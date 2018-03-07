let sliderImages = document.querySelectorAll(".slide");

arrowRight = document.querySelector("#arrow-right");
arrowLeft = document.querySelector("#arrow-left");

currImg = 0;

// hide images
function resetSlide() {
    for (let i = 0; i < sliderImages.length; i++) {
        sliderImages[i].style.display = "none";
    }
}

// start slider
function startSlide() {
    resetSlide();
    sliderImages[0].style.display = "block";
}

// prev slide
function slideLeft() {
    resetSlide();
    sliderImages[currImg - 1].style.display = "block";
    currImg--;
}

// next slide
function slideRight() {
    resetSlide();
    sliderImages[currImg + 1].style.display = "block";
    currImg++;
}

// left click arrow
arrowLeft.addEventListener("click", function name() {
    if (currImg === 0) {
        currImg = sliderImages.length;
    }
    slideLeft();
});
// right click arrow
arrowRight.addEventListener("click", function name() {
    if (currImg === sliderImages.length - 1) {
        currImg = -1;
    }
    slideRight();
});


startSlide();