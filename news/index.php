<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>webOS Archive</title>

<link rel="stylesheet" href="../wosa.css?<?php uniqid()?>">
<style>

</style>
</head>
<body style="margin:0px;" height="100%">

<?php include('../social-meta.php') ?>
<?php include('../menu.php')?>
<?php
    $rssFeedURI="https://palm.weboslives.eu/users/webosarchive.rss";
?>

<div id="container" class="content">
<img class="circle-image" style="" src="../museum.png">
  <h1 style="">webOS Archive | News</h1>

  <div style="margin-left: 10px; margin-right: 10px">
    <p style="padding-top: 16px;">webOSArchive (WOSA) is the unofficial repository of information, restoration efforts, and archives for Palm/HP's mobile webOS operating system. This site does not provide material or information about the spin-off operating systems, webOS Open Source Edition (wOSE) or LG's webOS for TVs.</p>
    <p style="text-align: right !important; font-weight:bold;">
      Follow: 
      <a href="https://palm.weboslives.eu/users/webosarchive">Mastodon</a> | 
      <a href="https://bsky.app/profile/webosarchive.org">Bluesky</a> | 
      <a href="<?php echo $rssFeedURI; ?>">RSS</a>
    </p>
    <div>
        <?php include("../rssWidget.php") ?>
    </div>

  </div>
</div>

<footer>
<?php include("../legalese.php"); ?>
</footer>
</div>
</body>
