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
      $protocol = "https://";
      else
      $protocol = "http://";
    ?>
    <a href="http://www.webosarchive.com" class="logo" target="_top"><img src="<?php echo $protocol ?>www.webosarchive.com/webOSLogo.png" height="18" style="height:18px"> Archive</a>
    <input class="menu-btn" type="checkbox" id="menu-btn" onclick="javascript:toggleMenu();"/>
    <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
    <ul class="menu" id="menu-ul">

      <?php      
      if (strpos( $_SERVER['REQUEST_URI'], "/news.php" ) !== false)
        echo "<li style='background-color: darkorange'><a href=\"www.webosarchive.com/news.php\" target=\"_top\">News</a></li>";
      else
        echo "<li><a href=\"http://www.webosarchive.com/news.php\" target=\"_top\">News</a></li>";
      ?>
      <?php
      if (isset($_GET['content']) && $_GET['content'] == 'appcatalog')
        echo "<li style='background-color: #3E0BF9'><a href=\"http://appcatalog.webosarchive.com\" target=\"_top\">App Catalog</a></li>";
      else
        echo "<li><a href=\"http://appcatalog.webosarchive.com\" target=\"_top\">App Catalog</a></li>";
      ?>
      <?php
      if (isset($_GET['content']) && $_GET['content'] == 'podcasts')
        echo "<li style='background-color: #EA7819'><a href=\"http://podcasts.webosarchive.com\" target=\"_top\">Podcasts</a></li>";
      else
        echo "<li><a href=\"http://podcasts.webosarchive.com\" target=\"_top\">Podcasts</a></li>";
      ?>
      <?php
      if (isset($_GET['content']) && $_GET['content'] == 'maps')
        echo "<li style='background-color: green'><a href=\"http://maps.webosarchive.com\" target=\"_top\">Maps</a></li>";
      else
        echo "<li><a href=\"http://maps.webosarchive.com\" target=\"_top\">Maps</a></li></li>";
      ?>
      <?php
      if (isset($_GET['content']) && $_GET['content'] == 'sdk')
        echo "<li style='background-color: #f38325'><a href=\"http://sdk.webosarchive.com\" target=\"_top\">SDK</a></li>";
      else
        echo "<li><a href=\"http://sdk.webosarchive.com\" target=\"_top\">SDK</a></li></li>";
      ?>
      <?php
      if (isset($_GET['content']) && $_GET['content'] == 'community')
        echo "<li style='background-color: #2980B9'><a href=\"http://www.webosarchive.com/docs/community\" target=\"_top\">Community</a></li>";
      else
        echo "<li><a href=\"http://www.webosarchive.com/docs/community\" target=\"_top\">Community</a></li></li>";
      ?>
    </ul>
  </header>
</div>
