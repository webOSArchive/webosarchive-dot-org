var billboardPos = 0;
var billboardTransitioning = false;
var BILLBOARD_TRANSITION_MS = 500;

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
    billboardGoTo(billboardPos > 0 ? billboardPos - 1 : billboardContents.length - 1);
}
function billboardRight() {
    billboardGoTo(billboardPos < billboardContents.length - 1 ? billboardPos + 1 : 0);
}
function billboardGoTo(index) {
    if (billboardTransitioning || index === billboardPos) {
        return;
    }
    billboardTransitioning = true;
    billboardPos = index;
    billboardUpdateDots();

    var textEl = document.getElementById("billboard-text");
    var imageEl = document.getElementById("billboard-image");

    billboardSlideOut(textEl);
    billboardSlideOut(imageEl);

    window.setTimeout(function() {
        updateBillboard();
        billboardSlideInPrepare(textEl);
        billboardSlideInPrepare(imageEl);

        // force reflow so the "enter from the right" starting position is
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
function billboardSlideOut(el) {
    el.style.opacity = "0";
    el.style.webkitTransform = "translateX(-30px)";
    el.style.transform = "translateX(-30px)";
}
function billboardSlideInPrepare(el) {
    el.style.webkitTransition = "none";
    el.style.transition = "none";
    el.style.opacity = "0";
    el.style.webkitTransform = "translateX(30px)";
    el.style.transform = "translateX(30px)";
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
