billboardPos = 0;
function billboardLeft() {
    if (billboardPos > 0) {
        billboardPos--;
    } else {
        billboardPos = billboardContents.length - 1;
    }
    updateBillboard();
}
function billboardRight() {
    if (billboardPos < billboardContents.length - 1) {
        billboardPos++;
    } else {
        billboardPos = 0;
    }
    updateBillboard();
}
function updateBillboard() {
    document.getElementById("billboard-image").src = billboardContents[billboardPos].image;
    document.getElementById("billboard-name").innerHTML = billboardContents[billboardPos].name;
    document.getElementById("billboard-short").innerHTML = billboardContents[billboardPos].short;
    document.getElementById("billboard-long").innerHTML = billboardContents[billboardPos].long;

}