// mobile drop menu
const mobileDropMenu = document.querySelector("#nav-list_mobile")
mobileDropMenu.addEventListener("click", function mobileButton() {

    //toggle icon
    this.classList.toggle("change");

    // display menu
    const menuToggle = document.querySelector("#mobile-menu");


    if (this.classList.value == "change") {
        menuToggle.style.display = "grid";

    } else {
        menuToggle.style.display = "none";

    }


});