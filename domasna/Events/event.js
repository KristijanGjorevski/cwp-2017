
var strana = document.querySelector('a');

strana.addEventListener("click",function () {

strana.setAttribute("href","https://www.yahoo.com/")

});

var rezultat = document.querySelector(".res");

var prvInput = document.querySelector(".prv");
prvInput.setAttribute('value','');

var vtorInput = document.querySelector(".vtor");
vtorInput.setAttribute('value','');

var eventi = document.querySelectorAll('.input');

    for (i=0;i<eventi.length;i++){
        eventi[i].addEventListener("input",suma);
    }

function suma() {
     var zbir = parseInt(prvInput.value || 0) + parseInt(vtorInput.value || 0);
     rezultat.innerHTML = zbir;
}

