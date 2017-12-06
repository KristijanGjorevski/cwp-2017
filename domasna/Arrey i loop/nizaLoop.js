var niza = [2, 5, 3, 2, 3, 3, 5, 1, 1, 4, 4, 2, 4, 2, 2, 4];

sekojTretParenBroj(niza);

//console.log(zbirNaNeparniBroevi(niza));

//console.log(prosek(niza));

function prosek(niza) {
    var zbirNaBroevi = 0;

    for(i=0; i<niza.length; i++) {
        zbirNaBroevi += niza[i];
    }

    return zbirNaBroevi / niza.length;
}

function zbirNaNeparniBroevi(niza) {
    var zbir = 0;

    for (i=0;i<niza.length;i++){
        if (niza[i] % 2 !== 0) {
            zbir += niza[i];
        }
    }
    return zbir;
}

function sekojTretParenBroj(niza) {
    var brojac = 0;

    for (i = 0; i < niza.length; i++) {
        if (niza[i] % 2 === 0) {
            brojac++;
            if (brojac === 3) {
                console.log(niza[i]);
                brojac = 0;
            }
        }
    }
}