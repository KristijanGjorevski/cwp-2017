const imgsArr = document.querySelectorAll(".pic_template");
const modalContainer = document.querySelector("#modal_box");

const modalContent = document.querySelector("#modal_content");
let modalImg = document.querySelector("#img");
let title = document.querySelector("#title");

imgsArr.forEach(element => {
    let imgSrc = element.children[0];

    imgSrc.addEventListener("click", function disPic() {
        // console.log(this.nextElementSibling);

        modalContainer.style.display = "block"; // DISPLAY MODAL
        modalImg.src = this.src; // GET IMG SRC
        title.innerHTML = this.nextElementSibling.innerHTML; // GET CONTENT

        modalContainer.onclick = function() {
            modalContainer.style.display = "none";
        }


    });
});