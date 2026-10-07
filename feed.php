<?php
/*
 * webOS Archive meta-feed: merges the site's RSS feeds into a single RSS 2.0 feed.
 * Results are cached on disk; if a source can't be fetched, its last good copy is used.
 */

$sources = [
	['label' => 'Pivot',      'url' => 'https://www.webosarchive.org/pivot/index.xml'],
	['label' => 'App Museum', 'url' => 'https://appcatalog.webosarchive.org/feed.php'],
	['label' => 'Mastodon',   'url' => 'https://palm.weboslives.eu/users/webosarchive.rss', 'skipReplies' => true],
];
$feedTitle = 'webOS Archive - Everything';
$feedLink  = 'https://www.webosarchive.org/';
$feedDesc  = 'News, app updates and posts from across the webOS Archive.';
$selfUrl   = 'http://www.webosarchive.org/feed.php';
$maxItems  = 50;
$cacheTtl  = 900; // seconds
$cacheDir  = sys_get_temp_dir() . '/wosa-feed-cache';

function fetch_source($url, $cacheDir, $cacheTtl) {
	if (!is_dir($cacheDir))
		@mkdir($cacheDir, 0775, true);
	$cacheFile = $cacheDir . '/' . md5($url) . '.xml';
	if (is_file($cacheFile) && (time() - filemtime($cacheFile)) < $cacheTtl)
		return file_get_contents($cacheFile);

	$ctx = stream_context_create(['http' => [
		'timeout' => 10,
		'user_agent' => 'webOSArchive-MetaFeed/1.0',
		'follow_location' => 1,
	]]);
	$data = @file_get_contents($url, false, $ctx);
	if ($data !== false && @simplexml_load_string($data) !== false) {
		@file_put_contents($cacheFile, $data, LOCK_EX);
		return $data;
	}
	// Fetch failed: fall back to stale cache if we have one
	return is_file($cacheFile) ? file_get_contents($cacheFile) : null;
}

$items = [];
foreach ($sources as $source) {
	$data = fetch_source($source['url'], $cacheDir, $cacheTtl);
	if (!$data)
		continue;
	$xml = @simplexml_load_string($data);
	if (!$xml || !isset($xml->channel))
		continue;
	$channelTitle = (string)$xml->channel->title;
	foreach ($xml->channel->item as $item) {
		if (!empty($source['skipReplies']) && count($item->children('http://purl.org/syndication/thread/1.0')->{'in-reply-to'}) > 0)
			continue;
		// Some feeds (Pleroma) have several <link> elements; use the first one without a rel
		$link = '';
		foreach ($item->link as $l) {
			if (!isset($l['rel'])) {
				$link = trim((string)$l);
				break;
			}
		}
		$guid = trim((string)$item->guid);
		$time = strtotime((string)$item->pubDate);
		$items[] = [
			'title'       => $source['label'] . ': ' . trim((string)$item->title),
			'link'        => $link ?: $guid,
			'guid'        => $guid ?: $link,
			'time'        => $time ?: 0,
			'description' => (string)$item->description,
			'categories'  => array_map('strval', iterator_to_array($item->category, false)),
			'source'      => ['title' => $channelTitle, 'url' => $source['url']],
		];
	}
}

usort($items, function ($a, $b) { return $b['time'] <=> $a['time']; });
$items = array_slice($items, 0, $maxItems);

header('Content-Type: application/rss+xml; charset=utf-8');
header('Cache-Control: public, max-age=' . $cacheTtl);

$w = new XMLWriter();
$w->openMemory();
$w->setIndent(true);
$w->setIndentString("\t");
$w->startDocument('1.0', 'UTF-8');
$w->startElement('rss');
$w->writeAttribute('version', '2.0');
$w->writeAttribute('xmlns:atom', 'http://www.w3.org/2005/Atom');
$w->startElement('channel');
$w->writeElement('title', $feedTitle);
$w->writeElement('link', $feedLink);
$w->startElement('atom:link');
$w->writeAttribute('href', $selfUrl);
$w->writeAttribute('rel', 'self');
$w->writeAttribute('type', 'application/rss+xml');
$w->endElement();
$w->writeElement('description', $feedDesc);
$w->writeElement('language', 'en-us');
$w->writeElement('lastBuildDate', date(DATE_RSS, $items ? max($items[0]['time'], 0) : time()));
$w->writeElement('ttl', (string)intdiv($cacheTtl, 60));
foreach ($items as $item) {
	$w->startElement('item');
	$w->writeElement('title', $item['title']);
	$w->writeElement('link', $item['link']);
	$w->startElement('guid');
	$w->writeAttribute('isPermaLink', filter_var($item['guid'], FILTER_VALIDATE_URL) ? 'true' : 'false');
	$w->text($item['guid']);
	$w->endElement();
	if ($item['time'])
		$w->writeElement('pubDate', date(DATE_RSS, $item['time']));
	foreach ($item['categories'] as $category)
		$w->writeElement('category', $category);
	$w->startElement('description');
	$w->writeCdata(str_replace(']]>', ']]]]><![CDATA[>', $item['description']));
	$w->endElement();
	$w->startElement('source');
	$w->writeAttribute('url', $item['source']['url']);
	$w->text($item['source']['title']);
	$w->endElement();
	$w->endElement();
}
$w->endElement();
$w->endElement();
$w->endDocument();
echo $w->outputMemory();
