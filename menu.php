<style>
body {
    margin:0px;
}
/* hamburger menu */
.wosaMenu {
  font-family: Verdana,sans-serif;
  font-size: 12px;
  background-color: #414141;
  box-shadow: 1px 1px 4px 0 rgba(0,0,0,.1);
  position: relative;
  width: 100%;
  z-index: 3;
}

.wosaMenu ul {
  margin: 0;
  padding: 0;
  list-style: none;
  overflow: hidden;
}

.wosaMenu li a {
    display: block;
    color: #414141;
    padding: 20px 20px;
    text-decoration: none;
  }

.wosaMenu li a:hover,
.wosaMenu .menu-btn:hover {
  background-color: rgba(0, 0, 0, 0.10);
}

.wosaMenu .logo {
  color: #fff;
  display: block;
  float: left;
  font-size: 1.3em;
  padding: 12px 20px;
  text-decoration: none;
}

.wosaMenu .menu {
  clear: both;
  max-height: 0;
  transition: max-height .2s ease-out;
}

/* menu icon */
.wosaMenu .menu-icon {
  cursor: pointer;
  display: inline-block;
  float: right;
  padding: 22px 22px;
  position: relative;
  user-select: none;
}

.wosaMenu .menu-icon .navicon {
  background: #fff;
  display: block;
  height: 2px;
  position: relative;
  transition: background .2s ease-out;
  width: 18px;
}

.wosaMenu .menu-icon .navicon:before,
.wosaMenu .menu-icon .navicon:after {
  background: #fff;
  content: '';
  display: block;
  height: 100%;
  position: absolute;
  transition: all .2s ease-out;
  width: 100%;
}

.wosaMenu .menu-icon .navicon:before {
  top: 5px;
}

.wosaMenu .menu-icon .navicon:after {
  top: -5px;
}

/* menu btn */
.wosaMenu .menu-btn {
  display: none;
}

.wosaMenu .menu-btn:checked ~ .menu-icon .navicon {
  background: transparent;
}

.wosaMenu .menu-btn:checked ~ .menu-icon .navicon:before {
  transform: rotate(-45deg);
}

.wosaMenu .menu-btn:checked ~ .menu-icon .navicon:after {
  transform: rotate(45deg);
}

.wosaMenu .menu-btn:checked ~ .menu-icon:not(.steps) .navicon:before,
.wosaMenu .menu-btn:checked ~ .menu-icon:not(.steps) .navicon:after {
  top: 0;
}

/* Responsive */
@media only screen and (max-width: 815px){
  .wosaMenu ul{
      background-color: lightgray;
  }
  .wosaMenu li a {
    padding: 15px;
    border-bottom: 1px dotted #414141;
  }
}

@media only screen and (min-width: 815px) {
  .menu-wrapper{
        background: #414141;
        height: 45px;
        line-height: 45px;
        width: 100%;
  }
  .wosaMenu li {
    float: left;
  }
  .wosaMenu .logo{
      line-height: 1;
  }
  .wosaMenu li a {
    color: #fff;
    padding: 0px 25px;
    border-right: 1px solid rgba(255, 255, 255, 0.2);
  }
  .wosaMenu .menu {
    clear: none;
    float: right;
    max-height: none;
  }
  .wosaMenu .menu-icon {
    display: none;
  }
}
</style>
<!-- Matomo -->
<script>
  var _paq = window._paq = window._paq || [];
  /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//matomo.webosarchive.com/";
    _paq.push(['setTrackerUrl', u+'matomo.php']);
    _paq.push(['setSiteId', '1']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<!-- End Matomo Code -->
<!-- Notification Code -->
<script src="notifications/notifications.js"></script>
<script>
function notifyTLDChange() {
  try {
      if (window.location.href.indexOf("webosarchive.com") != -1) {
          var myNotification = window.createNotification({});
          myNotification({ 
              title: 'webOS Archive is evolving!',
              displayCloseButton: true,
              theme: 'info',
              message: 'webOSArchive.com is now webOSArchive.org! Please update your bookmarks to use the new URL.' 
          });
      }
  } catch (e) {
      //oh well
  }
}
document.body.addEventListener(
  "onload",
  notifyTLDChange
);
</script>
<!-- End Notification Code -->
<script>
  var menuOpen = false;
  var resizeTimer;
  var oldSize = 0;
  function toggleMenu() {
      var menuElement = document.getElementById("menu-ul");
      var menuCheckbox = document.getElementById("menu-btn");
      if (window.innerWidth < 815) {
          if (!menuOpen) {
              menuElement.style.maxHeight = "340px";
              menuCheckbox.checked = true;
              menuOpen = true;
          }
          else {
              menuElement.style.maxHeight = "2px";
              menuCheckbox.checked = false;
              menuOpen = false;
          }
      } else {
          menuElement.style.maxHeight = "340px";
          menuOpen = true;
      }
  }
  function redrawMenu() { // Touchpads sometimes need help
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(function() {
      var menuElement = document.getElementById("menu-ul");
      if (window.innerWidth > oldSize) {
        oldSize = window.innerWidth;
        if (window.innerWidth > 815) {
          menuElement.style.maxHeight = "340px";
        }
      }
    }, 350);
  }
  window.addEventListener('resize', redrawMenu);
</script>
<div class="menu-wrapper">
  <header class="wosaMenu">
    <?php
      //Figure out what protocol the client wanted
      if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
        $protocol = "https";
      else
        $protocol = "http";
    ?>
    <a href="<?php echo $protocol ?>://www.webosarchive.org" class="logo" target="_top"><img src="<?php echo $protocol ?>://www.webosarchive.org/webOSLogo.png" height="18" style="height:18px" alt="webOS Archive Home" title="webOS Archive Home"> Archive</a>
    <input class="menu-btn" type="checkbox" id="menu-btn" onclick="javascript:toggleMenu();"/>
    <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
    <ul class="menu" id="menu-ul">

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
      if (isset($_GET['content']) && $_GET['content'] == 'podcasts')
        echo " style='background-color: #EA7819'";
      echo "><a href=\"$protocol://podcasts.webosarchive.org\" target=\"_top\">Podcasts</a></li>";

      echo "<li";
      if (isset($_GET['content']) && $_GET['content'] == 'sdk')
        echo " style='background-color: #f38325'";
      echo "><a href=\"$protocol://sdk.webosarchive.org\" target=\"_top\">SDK</a></li>";

      echo "<li";
      if (isset($_GET['content']) && $_GET['content'] == 'community')
        echo " style='background-color: #5f72b5'";
      echo "><a href=\"$protocol://www.webosarchive.org/docs/community\" target=\"_top\">Community</a></li>";

      echo "<li";
      if (isset($_GET['content']) && $_GET['content'] == 'docs')
        echo " style='background-color: #2980B9'";
      echo "><a href=\"$protocol://www.webosarchive.org/docs\" target=\"_top\">Docs</a></li>";
      ?>
    </ul>
  </header>
</div>
