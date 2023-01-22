var menuOpen = false;
var resizeTimer;
var oldSize = 0;
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
      if (window.innerWidth > oldSize) {
        oldSize = window.innerWidth;
        if (window.innerWidth > 800) {
          menuElement.style.visibility = "visible";
          menuCheckbox.checked = true;
        }
      }
    }, 350);
}
window.addEventListener('resize', redrawMenu);