<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>webOS Archive</title>

<link rel="stylesheet" href="wosa.css">
<style>
td { font-size: 14px; }
</style>
</head>
<body style="margin:0px;" height="100%">

<?php include('social-meta.php') ?>
<?php include('menu.php')?>
<?php
    //$rssFeedURI="http://twitter.webosarchive.org/?twitterid=MTQ2MzI2MjQ3NTM2MTUzMzk1Mg";
    $rssFeedURI="https://palm.weboslives.eu/users/webosarchive.rss";
?>

<div id="container">

<div class="wosaTitle">
  <div class="wosaIntro">
    <h2>News and Information</h2>
  </div>
</div>
<div class="wosaIntro">
    <img class="circle-image" style="margin: -12px 14px 14px 14px; float:left" src="museum.png">
    <p style="padding-top: 16px;">webOSArchive (WOSA) is the unofficial repository of information, restoration efforts, and archives for Palm/HP's mobile webOS operating system. This site does not provide material or information about the spin-off operating systems, webOS Open Source Edition (wOSE) or LG's webOS for TVs.</p>
    <p>Its the position of the curator, and the remaining webOS community, that Palm and HP's webOS devices, including the Pre series phones, the Veer and Pixi phones, and the TouchPad, remain useful devices that both provide value to their users and education to the rest of the industry. In fact, many webOS innovations have been copied by modern mobile OS developers. You can follow the ongoing efforts to restore and retain the usefulness of the platform here, or join the community and participate!
    <p style="text-align: right !important">
    Follow: 
      <a href="https://palm.weboslives.eu/users/webosarchive">Mastodon</a> | 
      <a href="<?php echo $rssFeedURI; ?>">RSS</a> |
      <a href="https://www.twitter.com/webOSArchive">Twitter</a>
    </p>
</div>

<div>
    <?php include("rssWidget.php") ?>
</div>

<div class="wosaIntro" style="margin-top: 14px; margin-bottom: 40px; padding-bottom: 10px;">
  <p style="font-size:smaller">The material on this site has been collected from private archives, the Internet Archive's wayback machine, and historical forum and blog posts and is preserved here for public interest under Fair Use provisions of United States' copyright law. The curator will respond promptly to formal and legally authorized take-down requests from rights holders who can demonstrate clear harm that results from having their historical material preserved.</p>
</div>

<footer>
<?php include("legalese.php"); ?>
</footer>
</div>
</body>
