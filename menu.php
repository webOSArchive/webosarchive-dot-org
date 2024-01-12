<?php
  //Figure out what protocol the client wanted
  if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
    $protocol = "https";
  else
    $protocol = "http";
  if (isset($_GET["protocol"])) {
      $protocol = $_GET["protocol"];
  }
?>
<!-- Menu -->
<link rel="stylesheet" href="<?php echo $protocol ?>://www.webosarchive.org/menu.css">
<script src="<?php echo $protocol ?>://www.webosarchive.org/menu.js"></script>
<!-- End Menu -->
<!-- Matomo -->
<script name="matomo">
  var _paq = window._paq = window._paq || [];
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//matomo.webosarchive.org/";
    _paq.push(['setTrackerUrl', u+'matomo.php']);
    _paq.push(['setSiteId', '1']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<!-- End Matomo -->
<!-- Notification Code -->
<link rel="stylesheet" href="<?php echo $protocol ?>://www.webosarchive.org/notifications/notifications.css">
<script src="<?php echo $protocol ?>://www.webosarchive.org/notifications/notifications.js"></script>
<script src="<?php echo $protocol ?>://www.webosarchive.org/tldnotice.js"></script>
<!-- End Notification -->
<div class="menu-wrapper">
  <header class="wosaMenu">
    <a href="<?php echo $protocol ?>://www.webosarchive.org" class="logo" target="_top"><img src="<?php echo $protocol ?>://www.webosarchive.org/webOSLogo.png" height="18" style="height:18px" alt="webOS Archive Home" title="webOS Archive Home"> Archive</a>
    <input class="menu-btn" type="checkbox" id="menu-btn" onclick="javascript:toggleMenu();"/>
    <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
    <nav id="navbar">
      <ul id="menu-ul">
        <li><a href="http://www.webosarchive.org">Home</a></li>
        <?php 
        echo "<li";
        if (strpos( $_SERVER['REQUEST_URI'], "/news.php" ) !== false)
          echo " style='background-color: darkorange'";
        echo "><a href=\"$protocol://www.webosarchive.org/news\" target=\"_top\">News</a></li>";

        echo "<li";
        if (isset($_GET['content']) && $_GET['content'] == 'docs')
          echo " style='background-color: #2980B9'";
        echo "><a href=\"$protocol://www.webosarchive.org/docs\" target=\"_top\">Docs</a></li>";  

        echo "<li";
        if (isset($_GET['content']) && $_GET['content'] == 'sdk')
          echo " style='background-color: #f38325'";
        echo "><a href=\"$protocol://sdk.webosarchive.org\" target=\"_top\">SDK</a></li>";
        ?>
        <li onclick="console.log('invoke mneu');">
          <a>Apps + Services</a>
          <ul>
            <?php
              echo "<li><a href=\"$protocol://appcatalog.webosarchive.org\" target=\"_top\">App Museum</a></li>";
              echo "<li><a href=\"https://play.google.com/store/apps/dev?id=6357470001766848305\">Apps on Google Play</a></li>";
              echo "<li><a href=\"$protocol://www.webosarchive.org/tracker\" target=\"_top\">webOS Tracker</a></li>";
              echo "<li><a href=\"$protocol://podcasts.webosarchive.org\" target=\"_top\">Podcast Directory</a></li>";
              echo "<li><a href=\"$protocol://maps.webosarchive.org\" target=\"_top\">Maps</a></li>";
              echo "<li><a href=\"$protocol://feedspider.wosa.link\" target=\"_top\">FeedSpider</a></li>";
              echo "<li><a href=\"$protocol://checkmate.wosa.link\" target=\"_top\">Check Mate</a></li>";
              echo "<li><a href=\"$protocol://homecontrol.wosa.link\" target=\"_top\">Home Control</a></li>";
            ?>
          </ul>
        </li>
        <li onclick="console.log('invoke mneu');">
        <a>Community</a>
          <ul>
            <li><a href="http://www.webosarchive.org/docs/community">Discord</a></li>  
            <li><a href="https://forums.weboslives.eu/">webOSLives Forum (New!)</a></li>
            <li><a href="http://forums.webosarchive.org">webOSNation Forum Archive</a></li>
            <li><a href="https://palm.weboslives.eu/users/webosarchive">Mastodon</a></li>
            <li><a href="https://twitter.com/webOSArchive">Twitter</a></li>
            <li><a href="http://pivotce.com/">PivotCE</a></li>
            <li><a href="https://palmdb.net/">PalmDB (Classic PalmOS)</a></li>
          </ul>
        </li>
        
        <?php
        echo "<li";
        if (strpos( $_SERVER['REQUEST_URI'], "/support.php" ) !== false)
          echo " style='background-color: darkorange'";
        echo "><a href=\"$protocol://www.webosarchive.org/support\" target=\"_top\">Support Us!</a></li>";
        ?>        
      </ul>
    </nav>
  </header>
</div>

