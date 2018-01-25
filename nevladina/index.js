const append = document.querySelector(".slide_container");
let sliki = [];
fetch("slider.json")
.then((res) => res.json())
.then((data) =>{
    console.log(data);

    data.forEach((value) => {
        console.log(value.src);
        let sliderData = "<figure>" +
            `                    <img src='${value.src}' class='slide_img'>` +
            "                    <figcaption class='slide_txt'>" +
            `                        <h4>${value.title}</h4>` +
            `                        <span>${value.text}</span>` +
            "                    </figcaption>" +
            "                </figure>";


         sliki.push(sliderData);

    });

    let i = 0;
    setInterval(() => {

        append.innerHTML = sliki[i]; i++;
        if(i === sliki.length){
            i = 0;
        }
    }, 3000);
});

