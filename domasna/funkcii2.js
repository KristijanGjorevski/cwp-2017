

function alertuvaj(asd) {
    //alert(asd);
    console.log(asd);
}

function ispecatiNiza(niza) {
    for (i = 0; i < niza.length; i++) {
        alertuvaj(niza[i]);
    }
}

function sekojParenBroj(niza) {

    for(i = 0 ; i < niza.length; i++) {
        if (niza[i] % 2 === 0) {
            alertuvaj(niza[i]);
        }
    }
}

function sekojTretParenBroj(niza){
    var brojac = 0; // 2  4  8 10

    for(i = 0 ; i < niza.length; i++) {
        if (niza[i] % 2 === 0) {
            brojac+=1;
            if(brojac === 3 ){
                alertuvaj(niza[i]);
                brojac = 0;
            }
        }
    }
}

function zbirNaNeparniBroevi(niza){
    var zbir = 0;
    for(i = 0 ; i < niza.length; i++) {
        if(niza[i] % 2 !== 0){
            zbir += niza[i];
        }
    }

    return zbir;
}