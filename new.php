<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta http-equiv="imagetoolbar" content="no"/>
<meta name="viewport" content="width=1220; user-scalable=yes"/>
<title>webOS Archive</title>

<link type="text/css" rel="stylesheet" media="screen" href="assets/landing-dark.css"/>
<link type="text/css" rel="stylesheet" media="screen" href="assets/us-landing-dark.css"/>
<link type="text/css" rel="stylesheet" href="assets/billboard.css"/>
<style type="text/css">
#footer {
  z-index: 1 !important;
}
#sms .hide {
  display: none;
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
      <!-- global nav --> 

<div>
    
<!--
  <ul id="top-nav" class="clearfix">
    <li id="logo"><a href="https://web.archive.org/web/20120501045026/http://www.hp.com/" target="_blank">HP</a></li>
    <li><a href="https://web.archive.org/web/20120501045026/http://blog.palm.com/">Community</a></li>
    <li><a href="/us/products/software/mobile-applications.html">Applications</a></li>
    <li><a href="https://web.archive.org/web/20120501045026/http://developer.palm.com/">Developer</a></li>
    <li><a href="https://web.archive.org/web/20120501045026/http://www.shopping.hp.com/can/handheld/categories/palm/2/accessories?sort=Desc&amp;">Accessories</a></li>
    <li><a href="/web/20120501045026/http://www.hpwebos.com/us/support">Support</a></li>
    <li><a href="/web/20120501045026/http://www.hpwebos.com/us/index.html">Home</a></li>
  </ul>
  <ul id="top-controls" class="clearfix">
    <li id="menu-search">
      <form id="menu-search-form" action="#" method="get">
        <div id="search-input-bg" class="search-input-bg">
          <input type="hidden" id="local-search" name="local-search" value="Search..."/>
          <input name="globalsearch" type="text" id="globalsearchinput" maxlength="50"/>
          <button type="submit" class="submit-search">Search</button>
          <div id="searchClickOverlay" class="searchClickOverlay"></div>
        </div>
      </form>
    </li>
  </ul>
-->
  <div style="clear:both;"></div>
</div>
<script>
  function setStyle()
  {
    var url = window.location.href;

    if (url.indexOf("search") > -1)
    {
      document.getElementById('menu-search').style.visibility = "hidden";
    }
  }
  setStyle();
</script>
 
      <!-- /global nav --> 
    </div>
  </div>
  <!--/divheader-->
  
  <div id="maincontent">
    <div class="hero-wrapper"> 
      <!-- billboard -->
      <div class="section" id="billboard">
        <div class="section touchpad"> <img class="billboard-image" src="assets/touchpad-billboard-new.png" alt=""/>
          <div class="prod-name">webOS</div>
          <div class="short-desc">Super natural.</div>
          <div class="long-desc">Works the way you do, so you get<br/>
            more done.</div>
          <!--<a id="touchpad" class="learn-more" href="http://www.hp.com/united-states/webos/us/en/why-webos.html"> <img src="assets/assets/landing/learn-more-dark.png" alt="Learn More" /> </a>-->
          <div class="availability">&nbsp;</div>
        </div>
      </div>
      <div id="pager" class="nav pager"> <a id="left-arrow-pager" href="#" class="prev dark">&laquo;</a> <a id="right-arrow-pager" href="#" class="next dark">&raquo;</a> </div>
      <!-- /billboard --> 
    </div>
  </div>
</div>
<!--/#maincontent-->
</div>
<!--/#body-wrapper-->
<div id="select-area"> 
  <!-- class="core clearfix">--> 
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
<?php include('legalese.php') ?>
  <ul class="footer-nav">
  </ul>
<script language="JavaScript" type="text/javascript" src="assets/s_code_1-5-09.js"></script>
<script language="JavaScript" type="text/javascript">
<!--
  s.pageName = "us:us:home"
  s.channel = "home"
  s.pageType = ""
  s.prop1 = "us"
  s.prop2 = "us"
  s.prop30 = "www.palm.com"
  s.eVar30 = "www.palm.com"
  s.eVar6 = "us:us:index.html"
  /************* DO NOT ALTER ANYTHING BELOW THIS LINE ! **************/
  var s_code = s.t();
  if (s_code)
    document.write(s_code)
//-->
</script>
<script language="JavaScript" type="text/javascript">
<!--
  if (navigator.appVersion.indexOf('MSIE') >= 0)
    document.write(unescape('%3C') + '\!-' + '-')
//-->
</script>

  <div class="footnotes">
  <?php include('legalese.php') ?>
  </div>
</div>
<div id="container-logo-stack"></div>
<!--prevents JS error--> 
<!--/#footer--> 
<script src="assets/yui-combined.js" type="text/javascript"></script>
<script src="assets/palm-util.js" type="text/javascript"></script>
<!--
<script src="assets/palm-search.js" type="text/javascript"></script>
<script src="assets/GetJSON.js" type="text/javascript"></script> 
-->
<div class="scrim hide lightbox-closer" id="scrim-layer"></div>
<!--[if IE]>
    <iframe id="iframe-shim" class="hide" src="/assets/includes/global/iframe-content.html"></iframe>
		<style>
			#iframe-shim {
        width: 100%;
      }
			</style>
<![endif]-->
<script type="text/javascript" src="assets/Lightbox.js"></script>
 
<script type="text/javascript" src="assets/ga-all.js"></script> 
<script type="text/javascript" src="/assets/billboard.js"></script>
<script type="text/javascript">
      $P.event.onDOMReady(function() {
        $P.dom.batch($$(".fade-out-layer"), function(el) {
          var a = new $P.anim(el, {
            opacity : {
              from : 1,
              to : 0
            }
          }, 1);
          a.onComplete.subscribe(function() {
            $P.addClass(el, "hide");
          });
          a.animate();
        });

        var b = new $P.Video({
          'selector' : '.open-video'
        });
        $P.billboard.init(10000);
      });
    </script> 
<script type="text/javascript">
      $PGA.attach([ {
          "id" : "ga-10",
          "dir" : "to",
          "data" : "home link:mobilityattpreplus"
        }, {
          "id" : "ga-11",
          "dir" : "to",
          "data" : "home link:mobilityverizonpixiplus"
        }, {
          "id" : "flightview",
          "dir" : "to",
          "data" : "home link:developers-flightview"
        }, {
          "id" : "rockband",
          "dir" : "to",
          "data" : "home link:developers-rockband"
        }, {
          "id" : "tradewinds",
          "dir" : "to",
          "data" : "home link:developers-tradewinds2"
        }, {
          "id" : "ga-1",
          "dir" : "to",
          "data" : "home link:giftcardpromo"
        } ]);
    </script>
<div class="img-event-over preload"></div>
<div class="img-touchpad-over preload"></div>
<div class="img-phones-over preload"></div>
<div class="img-apps-over preload"></div>
<div class="img-acc-over preload"></div>
</body>
</html>
<!--
     FILE ARCHIVED ON 04:50:26 May 01, 2012 AND RETRIEVED FROM THE
     INTERNET ARCHIVE ON 16:18:28 Nov 16, 2024.
     JAVASCRIPT APPENDED BY WAYBACK MACHINE, COPYRIGHT INTERNET ARCHIVE.

     ALL OTHER CONTENT MAY ALSO BE PROTECTED BY COPYRIGHT (17 U.S.C.
     SECTION 108(a)(3)).
-->
<!--
playback timings (ms):
  captures_list: 0.513
  exclusion.robots: 0.028
  exclusion.robots.policy: 0.016
  esindex: 0.01
  cdx.remote: 7.084
  LoadShardBlock: 213.104 (3)
  PetaboxLoader3.datanode: 202.112 (5)
  PetaboxLoader3.resolve: 240.92 (3)
  load_resource: 348.816 (2)
-->