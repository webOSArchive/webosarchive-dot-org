var menuOpen = false;
var resizeTimer;
var oldSize = window.innerWidth;
function toggleMenu() {
    var menuElement = document.getElementById("menu-ul");
    var menuCheckbox = document.getElementById("menu-btn");
    if (window.innerWidth < 800) {
      if (!menuOpen) {  //open menu
          menuElement.style.visibility = "visible";
          menuCheckbox.checked = true;
          menuOpen = true;
      }
      else {  //close menu
          menuElement.style.visibility = "hidden";
          menuCheckbox.checked = false;
          menuOpen = false;
      }
    } else {
      menuElement.style.visibility = "visible";
    }
}
function redrawMenu() { // Touchpads sometimes need help
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(function() {
      var menuElement = document.getElementById("menu-ul");
      var menuCheckbox = document.getElementById("menu-btn");
      var newSize = window.innerWidth;
      if (newSize > oldSize && newSize > 800) {
        // grew into the desktop layout: nav is always shown there
        menuElement.style.visibility = "visible";
        menuCheckbox.checked = true;
        menuOpen = false;
      } else if (newSize < oldSize && newSize < 800) {
        // shrank into the mobile layout: start collapsed rather than
        // inheriting whatever visibility the desktop layout left behind
        menuElement.style.visibility = "hidden";
        menuCheckbox.checked = false;
        menuOpen = false;
      }
      oldSize = newSize;
    }, 350);
}
window.addEventListener('resize', redrawMenu);