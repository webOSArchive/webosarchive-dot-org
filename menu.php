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
        <li><a class='item' href="http://www.webosarchive.org">Home</a></li>
        <?php
        echo "<li";
        if (isset($_GET['content']) && $_GET['content'] == 'pivot')
          echo " style='background-color: dimgray'";
        echo "><a class='item' href=\"$protocol://www.webosarchive.org/pivot\" target=\"_top\">News ";
	      echo "<img src=\"$protocol://www.webosarchive.org/new-badge.png\" style='height:16px; width:16px; margin-top:-10px !important;'></a></li>";
        ?>
        <li class='item' onclick="console.log('invoke menu');"
        <?php
        if (isset($_GET['content']) && ($_GET['content'] == 'docs' || $_GET['content'] == 'sdk'))
          echo " style='background-color: dimgray'";
        echo "><a class='item'>Guides</a>";  
        ?> 
          <ul>
            <?php
              echo "<li><a class=\"item\" href=\"$protocol://docs.webosarchive.org\" target=\"_top\"><img src=\"$protocol://www.webosarchive.org/assets/help-icon.png\" class=\"project-icon\">Support Docs</a></li>";
              echo "<li><a class=\"item\" href=\"$protocol://sdk.webosarchive.org\" target=\"_top\"><img src=\"$protocol://www.webosarchive.org/assets/sdk-icon.png\" class=\"project-icon\">SDK + PDK</a></li>";
              echo "<li><a class=\"item\" href=\"http://webos-internals.org/\" target=\"_top\"><img src=\"$protocol://www.webosarchive.org/assets/internals-icon.png\" class=\"project-icon\">webOS Internals</a></li>";
            ?>
          </ul>
        </li>
        <li onclick="console.log('invoke menu');">
          <a class='item'>Projects</a>
          <ul>
            <?php
              echo "<li><a class=\"item\" href=\"$protocol://appcatalog.webosarchive.org\" target=\"_top\"><img src=\"$protocol://www.webosarchive.org/assets/appcatalog-icon.png\" class=\"project-icon\">App Catalog</a></li>";
              echo "<li><a class=\"item\" href=\"$protocol://www.webosarchive.org/pivot/2026/09/20/lunacy-a-new-child-of-webos/\" target=\"_top\"><img src=\"$protocol://www.webosarchive.org/assets/lunacy-icon.png\" class=\"project-icon\">Lunacy for Android</a></li>";
              echo "<li><a class=\"item\" href=\"http://webos-ports.org\" target=\"_top\"><img src=\"$protocol://www.webosarchive.org/assets/luneos-icon.png\" class=\"project-icon\">LuneOS</a></li>";              
              echo "<li><a class=\"item\" href=\"$protocol://www.webosarchive.org/tracker\" target=\"_top\"><img src=\"$protocol://www.webosarchive.org/assets/tracker-icon.png\" class=\"project-icon\">webOS Tracker</a></li>";
              echo "<li><a class=\"item\" href=\"$protocol://podcasts.webosarchive.org\" target=\"_top\"><img src=\"$protocol://www.webosarchive.org/assets/podcast-icon.png\" class=\"project-icon\">Podcast Directory</a></li>";
              echo "<li><a class=\"item\" href=\"$protocol://papyrus.wosa.link\" target=\"_top\"><img src=\"$protocol://www.webosarchive.org/assets/papyrus-icon.png\" class=\"project-icon\">Papyrus eReader</a></li>";
              echo "<li><a class=\"item\" href=\"$protocol://feedspider.wosa.link\" target=\"_top\"><img src=\"$protocol://www.webosarchive.org/assets/feedspider-icon.png\" class=\"project-icon\">FeedSpider</a></li>";
              echo "<li><a class=\"item\" href=\"$protocol://checkmate.wosa.link\" target=\"_top\"><img src=\"$protocol://www.webosarchive.org/assets/checkmate-icon.png\" class=\"project-icon\">Check Mate</a></li>";
              echo "<li><a class=\"item\" href=\"$protocol://hackermystery95.wosa.link\" target=\"_top\"><img src=\"$protocol://www.webosarchive.org/assets/hacker-icon.png\" class=\"project-icon\">Hacker Mystery 95</a></li>";
            ?>
          </ul>
        </li>
        <li>
        <a class='item'>Community</a>
          <ul>
            <li><a class='item' href="http://www.webosarchive.org/discord"><img src="<?php echo $protocol; ?>://www.webosarchive.org/assets/discord.png" class="project-icon">Discord</a></li>
            <li><a class='item' href="http://www.github.com/webOSArchive"><img src="<?php echo $protocol; ?>://www.webosarchive.org/assets/github.png" class="project-icon">GitHub</a></li>
            <li><div class='item' style="padding:0.5rem 1rem 0.5rem 0.9rem !important">
              <a href="https://palm.weboslives.eu/users/webosarchive"><img src="<?php echo $protocol; ?>://www.webosarchive.org/assets/fediverse.png" class="social-icon"></a>
              <a href="https://bsky.app/profile/webosarchive.org"><img src="<?php echo $protocol; ?>://www.webosarchive.org/assets/bsky.png" class="social-icon"></a>
              <a href="https://twitter.com/webOSArchive"><img src="<?php echo $protocol; ?>://www.webosarchive.org/assets/twitter.png" class="social-icon"></a>
              Socials
            </div></li>
            <li><a class='item' href="http://www.webosarchive.org/feed.php"><img src="<?php echo $protocol; ?>://www.webosarchive.org/assets/rss.png" class="project-icon">RSS Feed</a></li>
            <li><div class='item'>Forums:
              <a href="https://forums.weboslives.eu/">Current</a> | 
              <a href="http://forums.webosarchive.org">Archived</a>
            </div></li>
            <li><a class='item' href="https://palmdb.net/"><img src="<?php echo $protocol; ?>://www.webosarchive.org/assets/palmdb.png" class="project-icon">PalmDB (Classic)</a></li>
          </ul>
        </li>
        <?php
        echo "<li";
        if (isset($_GET['content']) && $_GET['content'] == 'shop')
          echo " style='background-color: dimgray'";
        echo "><a class='item' href=\"$protocol://shop.webosarchive.org\" target=\"_top\">Shop ";
	      echo "<img src=\"$protocol://www.webosarchive.org/new-badge.png\" style='height:16px; width:16px; margin-top:-10px !important;'></a></li>";
	      ?>
      </ul>
    </nav>
  </header>
</div>




