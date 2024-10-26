<?php
    if (!isset($rssFeedURI)) { $rssFeedURI=""; }
    if (!isset($rssTimeZone)) { $rssTimeZone='America/New_York'; }
    if (!isset($rssOddColor)) { $rssOddColor='#f2f2f2'; }
    if (!isset($rssEvenColor)) { $rssEvenColor='lightgray'; }

    function getHashtags($string) {  
        unset($hashtags);
        preg_match_all("/(&#35;\w+)/u", $string, $matches);
        if ($matches) {
            $hashtagsArray = array_count_values($matches[0]);
            $hashtags = array_keys($hashtagsArray);
        }
        return $hashtags;
    }
?>
<style>
    .rss-widget-list {
        border-collapse: collapse;
        width: 100%;
    }
    .rss-widget-list tr:nth-child(odd) {background-color: <?php echo $rssOddColor ?>;}
    .rss-widget-list tr:nth-child(even) {background-color: <?php echo $rssEvenColor ?>;}
    .rss-widget-list a {
        text-decoration: none;
    }
    .rss-widget-list a:hover {
        text-decoration: underline;
    }
    .rss-widget-list small {
        font-size: smaller;
        color: dimgray;
    }
    .rss-widget-cell {
        text-align: left;
        padding: 18px 10px 18px 10px;
        border-bottom: 1px dotted dimgray;
    }
    .rss-widget-content {
        margin-left: 6px;
        margin-right: 6px;
    }
    .rss-widget-footer {
        margin-top: 12px;
    }
    .rss-widget-footer a,span {
        font-size: small;
    }
</style>
<table class='rss-widget-list'>
<?php
if (isset($rssFeedURI) && $rssFeedURI != "") {
    $content = file_get_contents($rssFeedURI);
    $feed = new SimpleXMLElement($content);
    //detect RSS or ATOM
    if (isset($feed->channel) && isset($feed->channel->item)) {
        //RSS
        foreach($feed->channel->item as $entry) {
            $tzDate = new DateTimeZone($rssTimeZone);
            date_default_timezone_set($rssTimeZone);
            $date = new DateTime($entry->published);
            $date->setTimeZone($tzDate);
            echo "<tr><td class='rss-widget-cell'>\n";
            echo "   <p><b><a href='" . $feed->channel->link . "'>@" . $entry->author . "</a></b> <small> ". $date->format('Y-m-d g:i:sa') . " ET</small></p>\n";
            echo "   <p class='rss-widget-content'>";
            //Entry media
            foreach ($entry->children('http://search.yahoo.com/mrss/') as $media) {
                echo "   <a href=\"" . $media->attributes()['url'] . "\">\n";
                echo "      <img src='" . $media->attributes()['url'] . "' style='float:left; margin-right: 8px; max-height: 100px'/>\n";
                echo "   </a>";
            }
    
            //Main Entry with hashtag lists moved to footer
            $description = $entry->description;
            $hashtags = getHashtags($description);
            if (isset($hashtags) && $hashtags != "") {
                $searchString = implode(" ", $hashtags);
                //$description = str_replace($searchString, "", $description);
            }
            echo $description . "\n";
            echo "   </p>\n";
    
            //Entry Footer
            echo "   <div class='rss-widget-footer'>\n";
            echo "      <span style='float:right; margin-right: 10px;'><a href='$entry->link' title='$entry->title'>Permalink</a>";
            if (isset($hashtags) && !empty($hashtags)) {
                echo " | Tags: ";
                foreach($hashtags as $hashtag) {
                    $linkTag = str_replace("#", "", $hashtag);
                    echo "<a href='https://twitter.com/hashtag/$linkTag'>" . $hashtag . "</a> ";
                }    
            }
            echo "      </span>\n";
            echo "   </div>\n";
    
            echo "</td></tr>\n";
        }
    } else {
        //ATOM
        foreach($feed->entry as $entry) {
            $tzDate = new DateTimeZone($rssTimeZone);
            date_default_timezone_set($rssTimeZone);
            $date = new DateTime($entry->published);
            $date->setTimeZone($tzDate);
            $hashTagRoot = $feed->author->uri;
            $hashTagRoot = explode('/users/', $hashTagRoot)[0];
            $hashTagRoot = $hashTagRoot . "/tag/";
            echo "<tr><td class='rss-widget-cell'>\n";
            echo "   <p><b><a href='" . $feed->author->uri . "'>@" . $feed->author->name . "</a></b> <small> ". $date->format('Y-m-d g:i:sa') . " ET</small></p>\n";
            echo "   <p class='rss-widget-content'>";
            //Entry media
            foreach ($entry->link as $link) {
                if ($link->attributes()['rel'] == "enclosure") {
                    echo "   <a href=\"" . $link->attributes()['href'] . "\">\n";
                    echo "      <img src='" . $link->attributes()['href'] . "' style='float:left; margin-right: 8px; max-height: 100px'/>\n";
                    echo "   </a>";
                }
            }
    
            //Main Entry with hashtag lists moved to footer
            $description = $entry->content;
            $hashtags = array();
            foreach($entry->category as $category) {
                array_push($hashtags, $category->attributes()['term']);
            }
            echo $description . "\n";
            echo "   </p>\n";
    
            //Entry Footer
            echo "   <div class='rss-widget-footer'>\n";
            echo "      <span style='float:right; margin-right: 10px;'><a href='$entry->id' title='$entry->title'>Permalink</a>";
            if (isset($hashtags) && !empty($hashtags)) {
                echo " | Tags: ";
                foreach($hashtags as $hashtag) {
                    $linkTag = str_replace("#", "", $hashtag);
                    echo "<a href='" . $hashTagRoot . $linkTag . "'>" . $hashtag . "</a> ";
                }    
            }
            echo "      </span>\n";
            echo "   </div>\n";
    
            echo "</td></tr>\n";
        }
    }
    
} else {
    echo "<!-- No feed URI provided for RSS Widget. Set the variable rssFeedURI to enable this widget. -->";
}
?>
</table>
