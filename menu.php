<?php
  //Figure out what protocol the client wanted
  if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
    $protocol = "https";
  else
    $protocol = "http";
?>
<style>
body {
    margin:0;
    padding: 0;
    box-sizing: border-box;
}
/* Dropdown, responsive CSS menus from here: https://webcodeflow.com/responsive-navbar-with-dropdown/ */
:root {
  --primary-color: pink;
  --secondary-color: #fff;
}

#navbar {
  float:left;
  clear:none;
  position: absolute;
  z-index: 100;
  padding-left: 5px;
  line-height: 1;
}
#navbar ul {
  list-style: none;
  margin: 0px;
  padding: 0px;
}

#navbar ul li {
  color: #fff;
  display: inline-block;
  position: relative;
  padding: 1rem;
  margin-bottom: 0px;
}

#navbar ul li a {
  color: #fff;
  text-decoration: none;
}

/* Hide Nested ul By Default */

#navbar ul li ul {
  display: none;
}

#navbar ul li:hover {
  cursor: pointer;
  background-color: dimgray;
  color: #fff;
}

#navbar ul li:hover a {
  color: #fff;
}

/* Nested Dropdown Show */

#navbar ul li:hover ul {
  display: block;
  position: absolute;
  left: 0;
  width: 200px;
  margin-top: 1rem;
}

#navbar ul li:hover ul li {
  display: block;
  background-color: #414141;
}

#navbar ul li:hover ul li a {
  color: #fff;
}

#navbar ul li:hover ul li:hover {
  background-color: dimgray;
  color: inherit;
}

#navbar ul li:hover ul li span {
  float: right;
  color: #fff;
  background: blue;
  text-align: center;
  font-size: 0.8rem;
  border-radius: 5px;
}

#navbar ul li:hover ul li:hover span {
  background: var(--secondary-color);
}

@media (max-width: 600px) {
  #navbar ul li {
    display: block;
  }
  #navbar ul li:hover ul {
    width: 100%;
    position: relative;
  }
}
/* /new */
/* menu area */
.wosaMenu {
  font-family: Verdana,sans-serif;
  font-size: 12px;
  background-color: #414141;
  box-shadow: 1px 1px 4px 0 rgba(0,0,0,.1);
  position: relative;
  width: 100%;
  z-index: 3;
}
.wosaMenu .logo {
  color: #fff;
  display: block;
  float: right;
  font-size: 1.3em;
  padding: 12px 20px;
  text-decoration: none;
}
.wosaMenu .menu {
  max-height: 0;
}
.menu-wrapper{
  background: #414141;
  height: 45px;
  line-height: 45px;
  width: 100%;
}
.wosaMenu .logo{
  line-height: 1;
}
</style>
<!-- Matomo -->
<script>
  var _paq = window._paq = window._paq || [];
  /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
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
<!-- End Matomo Code -->
<!-- Notification Code -->
<link rel="stylesheet" href="<?php echo $protocol ?>://www.webosarchive.org/notifications/notifications.css">
<script src="<?php echo $protocol ?>://www.webosarchive.org/notifications/notifications.js"></script>
<script src="<?php echo $protocol ?>://www.webosarchive.org/tldnotice.js"></script>
<!-- End Notification Code -->
<div class="menu-wrapper">
  <header class="wosaMenu">
    <a href="<?php echo $protocol ?>://www.webosarchive.org" class="logo" target="_top"><img src="<?php echo $protocol ?>://www.webosarchive.org/webOSLogo.png" height="18" style="height:18px" alt="webOS Archive Home" title="webOS Archive Home"> Archive</a>
    <nav id="navbar">
      <ul>
        <li><a href="http://www.webosarchive.org">Home</a></li>
        <?php 
        echo "<li";
        if (strpos( $_SERVER['REQUEST_URI'], "/news.php" ) !== false)
          echo " style='background-color: darkorange'";
        echo "><a href=\"$protocol://www.webosarchive.org/news.php\" target=\"_top\">News</a></li>";

        echo "<li";
        if (isset($_GET['content']) && $_GET['content'] == 'appcatalog')
          echo " style='background-color: #3E0BF9'";
        echo "><a href=\"$protocol://appcatalog.webosarchive.org\" target=\"_top\">App Museum</a></li>";

        echo "<li";
        if (isset($_GET['content']) && $_GET['content'] == 'docs')
          echo " style='background-color: #2980B9'";
        echo "><a href=\"$protocol://www.webosarchive.org/docs\" target=\"_top\">Docs</a></li>";  

        echo "<li";
        if (isset($_GET['content']) && $_GET['content'] == 'sdk')
          echo " style='background-color: #f38325'";
        echo "><a href=\"$protocol://sdk.webosarchive.org\" target=\"_top\">SDK</a></li>";
        ?>
        <li>
          Services</i>
          <ul>
            <?php
              echo "<li><a href=\"$protocol://podcasts.webosarchive.org\" target=\"_top\">Podcasts</a></li>";
              echo "<li><a href=\"$protocol://cdav.webosarchive.org\" target=\"_top\">Calendars</a></li>";
              echo "<li><a href=\"$protocol://maps.webosarchive.org\" target=\"_top\">Maps</a></li>";
            ?>
          </ul>
        </li>
        <li>
          Community</i>
          <ul>
            <li><a href="http://www.webosarchive.org/docs/community">Discord</a></li>  
            <li><a href="http://forums.webosarchive.org">Forums (Archive)</a></li>
            <li><a href="https://www.lgwebos.com/forum/6-hp-webos/">Forums (New)</a></li>
            <li><a href="https://old.reddit.com/r/webos">Reddit</a></li>
            <li><a href="http://pivotce.com/">PivotCE</a></li>
          </ul>
        </li>
      </ul>
    </nav>
  </header>
  

</ul>



</div>

