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
<link rel="stylesheet" href="<?php echo $protocol ?>://www.webosarchive.org/menu.css?<?php echo uniqid()?>">
<script src="<?php echo $protocol ?>://www.webosarchive.org/menu.js?<?php echo uniqid()?>"></script>
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
<div class="menu-wrapper">
  <header class="wosaMenu">
    <a href="<?php echo $protocol ?>://www.webosarchive.org" class="wosa-logo" target="_top"><img src="<?php echo $protocol ?>://www.webosarchive.org/webOSLogo.png" height="18" style="height:18px" alt="webOS Archive Home" title="webOS Archive Home"> Archive</a>
    <input class="menu-btn" type="checkbox" id="menu-btn" onclick="javascript:toggleMenu();"/>
    <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
    <nav id="navbar">
      <ul id="menu-ul">
        <li><a href="http://www.webosarchive.org">Home</a></li>
        <?php
        echo "<li";
        if (isset($_GET['content']) && $_GET['content'] == 'pivot')
          echo " style='background-color: dimgray'";
        echo "><a href=\"$protocol://www.webosarchive.org/pivot\" target=\"_top\">News ";
	      echo "<img src=\"$protocol://www.webosarchive.org/new-badge.png\" style='height:16px; width:16px; margin-top:-10px !important;'></a></li>";

        echo "<li";
        if (isset($_GET['content']) && $_GET['content'] == 'docs')
          echo " style='background-color: dimgray'";
        echo "><a href=\"$protocol://docs.webosarchive.org\" target=\"_top\">Docs</a></li>";  
        ?>
        <li onclick="console.log('invoke mneu');">
          <a>Apps + Services</a>
          <ul>
            <?php
              echo "<li><a href=\"$protocol://sdk.webosarchive.org\" target=\"_top\">SDK</a></li>";
              echo "<li><a href=\"$protocol://appcatalog.webosarchive.org\" target=\"_top\">App Museum</a></li>";
              echo "<li><a href=\"$protocol://www.webosarchive.org/tracker\" target=\"_top\">webOS Tracker</a></li>";
              echo "<li><a href=\"$protocol://podcasts.webosarchive.org\" target=\"_top\">Podcast Directory</a></li>";
              echo "<li><a href=\"$protocol://papyrus.wosa.link\" target=\"_top\">Papyrus eReader</a></li>";
              echo "<li><a href=\"$protocol://feedspider.wosa.link\" target=\"_top\">FeedSpider</a></li>";
              echo "<li><a href=\"$protocol://checkmate.wosa.link\" target=\"_top\">Check Mate</a></li>";
              echo "<li><a href=\"$protocol://hackermystery95.wosa.link\" target=\"_top\">Hacker Mystery 95</a></li>";
              /* // Deprecated
              echo "<li><a href=\"$protocol://flixnet.webosarchive.org\" target=\"_top\">Public Domain Movies</a></li>";
              */
            ?>
          </ul>
        </li>
        <li>
        <a>Community</a>
          <ul>
            <li><a href="http://www.webosarchive.org/discord">Discord</a></li>  
            <li><a href="https://forums.weboslives.eu/">webOSLives Forum (New!)</a></li>
            <li><a href="http://forums.webosarchive.org">webOSNation Forum Archive</a></li>
            <li><a href="https://palm.weboslives.eu/users/webosarchive">Mastodon</a></li>
            <li><a href="https://bsky.app/profile/webosarchive.org">Bluesky</a></li>
            <li><a href="https://twitter.com/webOSArchive">Xitter</a></li>
            <li><a href="https://palmdb.net/">PalmDB (Classic PalmOS)</a></li>
          </ul>
        </li>
        <?php
        echo "<li";
        if (isset($_GET['content']) && $_GET['content'] == 'shop')
          echo " style='background-color: dimgray'";
        echo "><a href=\"$protocol://shop.webosarchive.org\" target=\"_top\">Shop ";
	      echo "<img src=\"$protocol://www.webosarchive.org/new-badge.png\" style='height:16px; width:16px; margin-top:-10px !important;'></a></li>";
	      ?>
      </ul>
    </nav>
  </header>
</div>




