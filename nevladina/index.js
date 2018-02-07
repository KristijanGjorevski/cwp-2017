// const append = document.querySelector(".slide_container");
// let sliki = [];
// fetch("slider.json")
// .then((res) => res.json())
// .then((data) =>{
//     console.log(data);

//     data.forEach((value) => {
//         console.log(value.src);
//         let sliderData = "<figure>" +
//             `                    <img src='${value.src}' class='slide_img'>` +
//             "                    <figcaption class='slide_txt'>" +
//             `                        <h4>${value.title}</h4>` +
//             `                        <span>${value.text}</span>` +
//             "                    </figcaption>" +
//             "                </figure>";


//          sliki.push(sliderData);

//     });

//     let i = 0;
//     setInterval(() => {

//         append.innerHTML = sliki[i]; i++;
//         if(i === sliki.length){
//             i = 0;
//         }
//     }, 3000);
// });
const current = document.querySelector("#current");
const imgs = document.querySelectorAll(".imgs img");
const slideArrowLeft = document.querySelector(".fa-chevron-circle-left");
const slideArrowRight = document.querySelector(".fa-chevron-circle-right");

const opacity = 0.5;

// Set first img opacity
imgs[0].style.opacity = opacity;

imgs.forEach((img, index) => {
    // console.log(index);
    img.addEventListener("click", imgClick);
});

function imgClick(event) {
    // console.log(index);
    // Reset opacity
    imgs.forEach(img => { img.style.opacity = 1 });

    // Change current image to src of clicked image
    current.src = event.target.src;

    // Add fade in class
    current.classList.add("fade-in");

    // Remove fade-in class after .5 seconds
    setTimeout(() => current.classList.remove("fade-in"), 500);

    // Change the opacity to opacity var
    event.target.style.opacity = opacity;
}
let brojoj = 0;
slideArrowLeft.addEventListener("click", (event) => {
    if (brojoj > 0) {
        brojoj--;
        current.src = imgs[brojoj].src;
    }
});
slideArrowRight.addEventListener("click", () => {
    if (brojoj < imgs.length - 1) {
        brojoj++;
        current.src = imgs[brojoj].src;
    }
});