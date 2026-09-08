<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>webOS Archive</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link type="text/css" rel="stylesheet" media="screen" href="assets/landing-modern.css"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="text/javascript" src="assets/billboard.js"></script>
<script>
  function hoverImg(img) {
      img.src = img.src.replace("-dark.png", "_roll-dark.png");
  }
  function leaveImg(img) {
      img.src = img.src.replace("_roll-dark.png", "-dark.png");
  }
</script>
<style>
  .menu-wrapper 
  {
    background: black !important;
  }
  .menu-ul a:hover {
    color: black !important;
  }
</style>
</head>
<body bgcolor="#101110">
<?php include('menu.php') ?>
<?php
//Figure out what protocol the client wanted
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
  $protocol = "https";
else
  $protocol = "http";
?>
<?php include('social-meta.php') ?>
<div id="margin" style="margin-top: 65px"></div>
<div id="container">
  <div class="row">
    <div class="column left">
        <div id="billboard-text">
            <div id="billboard-name" class="prod-name">webOS 3.1.0</div>
            <div id="billboard-short" class="short-desc">Community Edition</div>
            <div id="billboard-long" class="long-desc">A modernized system image,<br/>created by and for the community in 2026.</div>
        </div>
    </div>
    <div class="column right">
      <a id="billboard-link" href=""><img class="hero" id="billboard-image" src="assets/webos-ce-billboard.png" alt="Jump into webOS!" title="Jump into webOS!"/></a>
    </div>
  </div>
  <div id="billboard-dots" class="billboard-dots"></div>
</div>
<div class="links">
    <a href="<?php echo $protocol; ?>://appcatalog.webosarchive.org"><img src="assets/icon_apps-dark.png" onmouseover="hoverImg(this)" onmouseout="leaveImg(this)" alt="webOS App Museum" title="webOS App Museum"></a>
    <a href="<?php echo $protocol; ?>://sdk.webosarchive.org"><img src="assets/icon_developer-dark.png" onmouseover="hoverImg(this)" onmouseout="leaveImg(this)" alt="Restored webOS SDK" title="Restored webOS SDK"></a>
    <a href="<?php echo $protocol; ?>://docs.webosarchive.org"><img src="assets/icon_support-dark.png" onmouseover="hoverImg(this)" onmouseout="leaveImg(this)" alt="Updated Help and Docs" title="Updated Help and Docs"></a>
</div>
<footer>
    <?php include("legalese.php"); ?>
</footer>
<script>
  billboardContents = [
    {
      image: "assets/webos-ce-billboard.png",
      link: "https://github.com/webOSArchive/webOS-Community-Edition",
      name: "webOS 3.1.0",
      short: "Community Edition",
      long: "A modernized system image,<br/>created by and for the community in 2026."
    },
    {
      image: "assets/touchpad-billboard-cropped.png",
      link: "http://docs.webosarchive.org/",
      name: "webOS",
      short: "Super natural",
      long: "Palm and HP's legacy mobile platform still works the way you do, so you can get more done."
    },
    {
      image: "assets/archive-billboard.png",
      link: "https://appcatalog.webosarchive.org",
      name: "wOSA",
      short: "webOS Lives!",
      long: "webOSArchive (WOSA) is the unofficial repository of development efforts and archives for webOS."
    }
  ]
  billboardPreload(billboardContents)
  billboardRenderDots()
  billboardStartAutoRotate(5500)
</script>
</body>
</html>