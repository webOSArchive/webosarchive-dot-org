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
  .menu-wrapper a:hover {
    color: black !important;
  }
</style>
</head>
<body>
<?php include('menu.php') ?>
<?php
//Figure out what protocol the client wanted
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
  $protocol = "https";
else
  $protocol = "http";
?>
<?php include('social-meta.php') ?>
<div id="margin" style="margin-top: 80px"></div>
<div id="container">
  <div class="row">
    <div class="column left">
        <div id="billboard-name" class="prod-name">webOS</div>
        <div id="billboard-short" class="short-desc">Super natural</div>
        <div id="billboard-long" class="long-desc">Works the way you do, so you get more done.</div>
    </div>
    <div class="column right">
      <img class="hero" id="billboard-image" src="assets/touchpad-billboard-cropped.png"/>
    </div>
  </div>
</div>
<div class="links">
    <a href="<?php echo $protocol; ?>://appcatalog.webosarchive.org"><img src="assets/icon_apps-dark.png" onmouseover="hoverImg(this)" onmouseout="leaveImg(this)"></a>
    <a href="<?php echo $protocol; ?>://sdk.webosarchive.org"><img src="assets/icon_developer-dark.png" onmouseover="hoverImg(this)" onmouseout="leaveImg(this)"></a>
    <a href="<?php echo $protocol; ?>://docs.webosarchive.org"><img src="assets/icon_support-dark.png" onmouseover="hoverImg(this)" onmouseout="leaveImg(this)"></a>
</div>
<footer>
    <?php include("legalese.php"); ?>
</footer>
<script>
  billboardContents = [
    {
      image: "assets/touchpad-billboard-cropped.png",
      name: "webOS",
      short: "Super natural",
      long: "Works the way you do, so you get >more done."
    },
    {
      image: "assets/archive-billboard.png",
      name: "webOS Archive",
      short: "webOS Lives!",
      long: "webOSArchive (WOSA) is the unofficial repository of restoration efforts and archives for Palm/HP's mobile OS."
    }
  ]
  window.setInterval("billboardRight()", 4000)
</script>
</body>
</html>