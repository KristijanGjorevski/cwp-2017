var niza5 = [2, 5, 3, 2, 3, 3, 5, 1, 1, 4, 4, 2, 4, 2, 2, 4, 2];
var x = 0;
var brojac = 0;

for (i = 0;  i<niza5.length; i++) {
	if ( niza5[i] % 2 === 0) {
		brojac++;
		if(brojac === 3){
			console.log(niza5[i]);
			brojac = 0;
		}
	}
}

//nacin 2
brojac = 0;
niza5.forEach(function (value) {
	//console.log("index : " +index + " value : " +value);
    //
    if ( value % 2 === 0) {
        brojac++;
        if(brojac === 3){
            console.log(value);
            brojac = 0;
        }
    }

});

niza5.forEach(function(value,index){

});

niza5.forEach(function (value, index) {
    
});
