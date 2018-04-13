const imgsArr = document.querySelectorAll(".pic_template");

for (let index = 0; index < imgsArr.length; index++) {
    const element = imgsArr[index].childNodes[1];
    console.log(element);
    element.addEventListener("click", () => {

    });
}