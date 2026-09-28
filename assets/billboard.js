var billboardPos = 0;
var billboardTransitioning = false;
var BILLBOARD_TRANSITION_MS = 500;
var billboardIntervalMs = 5500;
var billboardIntervalId = null;

function billboardStartAutoRotate(intervalMs) {
    if (intervalMs) {
        billboardIntervalMs = intervalMs;
    }
    if (billboardIntervalId !== null) {
        window.clearInterval(billboardIntervalId);
    }
    billboardIntervalId = window.setInterval(billboardRight, billboardIntervalMs);
}

function billboardPreload(contents) {
    var i, img;
    for (i = 0; i < contents.length; i++) {
        img = new Image();
        img.src = contents[i].image;
    }
}

function billboardRenderDots() {
    var container = document.getElementById("billboard-dots");
    var i, dot;
    if (!container) {
        return;
    }
    container.innerHTML = "";
    for (i = 0; i < billboardContents.length; i++) {
        dot = document.createElement("span");
        dot.className = "billboard-dot" + (i === billboardPos ? " active" : "");
        dot.onclick = billboardDotClickHandler(i);
        container.appendChild(dot);
    }
}
function billboardDotClickHandler(index) {
    return function() {
        billboardGoTo(index);
    };
}
function billboardUpdateDots() {
    var container = document.getElementById("billboard-dots");
    var dots, i;
    if (!container) {
        return;
    }
    dots = container.getElementsByTagName("span");
    for (i = 0; i < dots.length; i++) {
        dots[i].className = "billboard-dot" + (i === billboardPos ? " active" : "");
    }
}

function billboardLeft() {
    billboardGoTo(billboardPos > 0 ? billboardPos - 1 : billboardContents.length - 1, -1);
}
function billboardRight() {
    billboardGoTo(billboardPos < billboardContents.length - 1 ? billboardPos + 1 : 0, 1);
}
function billboardGoTo(index, direction) {
    if (billboardTransitioning || index === billboardPos) {
        return;
    }
    if (!direction) {
        direction = index > billboardPos ? 1 : -1;
    }
    billboardTransitioning = true;
    billboardPos = index;
    billboardUpdateDots();
    billboardStartAutoRotate();

    var textEl = document.getElementById("billboard-text");
    var imageEl = document.getElementById("billboard-image");

    billboardSlideOut(textEl, direction);
    billboardSlideOut(imageEl, direction);

    window.setTimeout(function() {
        updateBillboard();
        billboardSlideInPrepare(textEl, direction);
        billboardSlideInPrepare(imageEl, direction);

        // force reflow so the "enter from the side" starting position is
        // applied before the transition back to the resting position runs
        textEl.offsetHeight;
        imageEl.offsetHeight;

        billboardSlideInStart(textEl);
        billboardSlideInStart(imageEl);

        window.setTimeout(function() {
            billboardTransitioning = false;
        }, BILLBOARD_TRANSITION_MS);
    }, BILLBOARD_TRANSITION_MS);
}
function billboardSlideOut(el, direction) {
    el.style.opacity = "0";
    el.style.webkitTransform = "translateX(" + (-30 * direction) + "px)";
    el.style.transform = "translateX(" + (-30 * direction) + "px)";
}
function billboardSlideInPrepare(el, direction) {
    el.style.webkitTransition = "none";
    el.style.transition = "none";
    el.style.opacity = "0";
    el.style.webkitTransform = "translateX(" + (30 * direction) + "px)";
    el.style.transform = "translateX(" + (30 * direction) + "px)";
}
function billboardSlideInStart(el) {
    el.style.webkitTransition = "";
    el.style.transition = "";
    el.style.opacity = "1";
    el.style.webkitTransform = "translateX(0)";
    el.style.transform = "translateX(0)";
}
function updateBillboard() {
    document.getElementById("billboard-image").src = billboardContents[billboardPos].image;
    document.getElementById("billboard-link").href = billboardContents[billboardPos].link;
    document.getElementById("billboard-name").innerHTML = billboardContents[billboardPos].name;
    document.getElementById("billboard-short").innerHTML = billboardContents[billboardPos].short;
    document.getElementById("billboard-long").innerHTML = billboardContents[billboardPos].long;
}
function billboardEnableSwipe(elementId) {
    var el = document.getElementById(elementId);
    var startX = null, startY = null;
    if (!el || !el.addEventListener) {
        return;
    }
    el.addEventListener("touchstart", function(e) {
        if (e.touches.length !== 1) {
            startX = null;
            return;
        }
        startX = e.touches[0].pageX;
        startY = e.touches[0].pageY;
    }, false);
    el.addEventListener("touchend", function(e) {
        var dx, dy;
        if (startX === null || !e.changedTouches || !e.changedTouches.length) {
            return;
        }
        dx = e.changedTouches[0].pageX - startX;
        dy = e.changedTouches[0].pageY - startY;
        startX = null;
        if (Math.abs(dx) > 40 && Math.abs(dx) > Math.abs(dy)) {
            if (dx < 0) {
                billboardRight();
            } else {
                billboardLeft();
            }
        }
    }, false);
}
