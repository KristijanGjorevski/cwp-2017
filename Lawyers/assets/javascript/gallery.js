const tempContainer = document.querySelector(".image_container");

var boxModel = document.createElement("div");
boxModel.setAttribute("id", "zoomContainer");
boxModel.setAttribute("class", "zoom_box");
var boxImg = document.createElement("img");
boxImg.setAttribute("id", "imgfull");
boxImg.setAttribute("class", "pic_box");
var closeFC = document.createElement("span");
closeFC.setAttribute("class", "close");
closeFC.innerHTML = "×";
var captionText = document.createElement("div");
captionText.setAttribute("id", "caption");

boxModel.appendChild(closeFC);
boxModel.appendChild(boxImg);
boxModel.appendChild(captionText);
document.body.appendChild(boxModel);


fetch("assets/json/gallery.json")
    .then(res => res.json())
    .then(res => {

        for (let index = 0; index < res.length; index++) {
            const element = res[index];


            const imageTemplate = document.createElement("div");
            const figure = document.createElement("figure");
            const image = document.createElement("img");
            const title = document.createElement("figcaption");

            imageTemplate.setAttribute("class", "image_template");
            image.setAttribute("alt", "image");
            image.addEventListener("click", zoomPic);

            title.innerHTML = element.title;
            image.src = element.image;

            figure.appendChild(title);
            figure.appendChild(image);
            imageTemplate.appendChild(figure);
            tempContainer.appendChild(imageTemplate);




        }

    });

/////////////////////////////////////////////////////////// contact

function zoomPic() {
    const boxModel = document.querySelector('#zoomContainer'); ///////container box for zoom
    const boxImg = document.querySelector("#imgfull"); /////// box for img to put in zoomed
    const link = this.previousElementSibling.innerHTML;
    const captionText = document.createElement("div");
    //     console.log(this.previousElementSibling);

    const embeddedText = document.querySelector("#caption") /////// box to display text while in zoom

    boxModel.style.display = "block";
    boxImg.src = this.src;
    embeddedText.innerHTML = link;

    document.body.style.overflow = "hidden";
    boxModel.style.overflow = "hidden";
    boxModel.onclick = function() {
        boxModel.style.display = "none";
        document.body.style.overflow = "scroll";
    }
}