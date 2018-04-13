let i = 0;
let images = [];
let time = 3000;

//image list
images[0] = "assets/pictures/minislide/fast1.jpg";
images[1] = "assets/pictures/minislide/fast2.jpg";
images[2] = "assets/pictures/minislide/fast3.jpg";

function pushImg() {
    document.slide.src = images[i];
    if (i < images.length - 1) {
        i++;
    } else {
        i = 0;
    }
    setTimeout("pushImg()", time);
}
window.onload = pushImg;