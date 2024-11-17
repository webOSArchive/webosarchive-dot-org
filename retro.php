<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=1220; user-scalable=yes"/>
<title>webOS Archive</title>

<link type="text/css" rel="stylesheet" media="screen" href="assets/landing-dark.css"/>
<link type="text/css" rel="stylesheet" media="screen" href="assets/us-landing-dark.css"/>
<link type="text/css" rel="stylesheet" href="assets/billboard.css"/>
<script type="text/javascript" src="assets/billboard.js"></script>
<style type="text/css">
#footer {
  z-index: 1 !important;
}
.menu-wrapper 
{
  background: black !important;
}
a:hover {
  color: black !important;
}
</style>
</head>
<body id="page-homepage-light" class="cleantemp">
<?php include('menu.php') ?>
<?php
//Figure out what protocol the client wanted
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
  $protocol = "https";
else
  $protocol = "http";
?>
<?php include('social-meta.php') ?>

<div class="fade-out-layer"></div>
<div id="bg-focus" class="bg-focus">
  <div class="bg-wrapper"> <img class="bg-image" src="assets/background-dark.png"/> </div>
</div>
<div id="body-wrapper">
  <div id="header">
    <div class="core"> 
    </div>
  </div>
  <!--/divheader-->
  
  <div id="maincontent">
    <div class="hero-wrapper"> 
      <!-- billboard -->
      <div class="section" id="billboard">
        <div class="section touchpad"> 
          <img id="billboard-image" class="billboard-image" src="assets/touchpad-billboard-new.png" alt="" style="min-width:400px" onclick="billboardLeft()"/>
          <div id="billboard-name" class="prod-name">webOS</div>
          <div id="billboard-short" class="short-desc">Super natural.</div>
          <div id="billboard-long" class="long-desc">Works the way you do, so you get<br/>more done.</div>
          <!--<a id="touchpad" class="learn-more" href="http://www.hp.com/united-states/webos/us/en/why-webos.html"> <img src="assets/assets/landing/learn-more-dark.png" alt="Learn More" /> </a>-->
          <div class="availability">&nbsp;</div>
        </div>
      </div>
      <div id="pager" class="nav pager"> 
        <a id="left-arrow-pager" href="#" class="prev dark" onclick="billboardLeft()">&laquo;</a> 
        <a id="right-arrow-pager" href="#" class="next dark" onclick="billboardRight()">&raquo;</a> 
      </div>
      <!-- /billboard --> 
    </div>
  </div>
</div>
<!--/#maincontent-->
</div>
<!--/#body-wrapper-->
<div id="select-area">
  <img id="select-bg" src="assets/home-navigation-dark.png"/>
  <div class="menu-center">
    <div id="select-navs" class="buffer-center"> 
        <!--<a href="https://web.archive.org/web/20120501045026/http://blog.palm.com/"> <img class="img-community nav-el" id="img-community" alt="Community" src="assets/transparent.gif"/> </a> -->
        <a href="<?php echo $protocol; ?>://appcatalog.webosarchive.org"> <img class="img-apps nav-el" id="img-apps" alt="Mobile Applications" src="assets/transparent.gif" /> </a>
        <a href="<?php echo $protocol; ?>://sdk.webosarchive.org"> <img class="img-developer nav-el" id="img-developer" alt="Developer" src="assets/transparent.gif"/> </a>
        <a href="<?php echo $protocol; ?>://docs.webosarchive.org"> <img class="img-support nav-el" id="img-support" alt="Support" src="assets/transparent.gif"/> </a> </div>
  </div>
</div>
<!--/#select-area-->
<div id="footer"> 
  <ul class="footer-nav">
  </ul>
  <div class="footnotes">
  <?php include('legalese.php') ?>
  </div>
</div>
<div id="container-logo-stack"></div>
<!--prevents JS error--> 
<!--/#footer--> 
<script src="assets/yui-combined.js" type="text/javascript"></script>
<script src="assets/palm-util.js" type="text/javascript"></script>
<script type="text/javascript" src="assets/ga-all.js"></script> 
<div class="img-event-over preload"></div>
<div class="img-touchpad-over preload"></div>
<div class="img-phones-over preload"></div>
<div class="img-apps-over preload"></div>
<div class="img-acc-over preload"></div>
<script>
  billboardContents = [
    {
      image: "assets/touchpad-billboard-new.png",
      name: "webOS",
      short: "Super natural.",
      long: "Works the way you do, so you get<br/>more done."
    },
    {
      image: "assets/archive-billboard.png",
      name: "webOS Archive",
      short: "webOS Lives!",
      long: "webOSArchive (WOSA) is the unofficial repository of information, <br>restoration efforts, and archives for Palm/HP's mobile <br>webOS operating system."
    }
  ]
</script>
</body>
</html>
<!--
     FILE ARCHIVED ON 04:50:26 May 01, 2012 AND RETRIEVED FROM THE
     INTERNET ARCHIVE ON 16:18:28 Nov 16, 2024.
     JAVASCRIPT APPENDED BY WAYBACK MACHINE, COPYRIGHT INTERNET ARCHIVE.

     ALL OTHER CONTENT MAY ALSO BE PROTECTED BY COPYRIGHT (17 U.S.C.
     SECTION 108(a)(3)).
-->