
var broj = 5;

var kolicinaBrasno = 0.8;


	// > dali vrednosta na levata strana e pogolema od desnata
	// < dali vrednosta na desnata strana e pogolema od levata
	// >= pogolema ili ednakvo
	// <= pomala ili ednakvo
	// == ednakvo
	// === absolutno ednakvo (identicno)
	// != ne-ednakvo
	// !== absolutno ne-ednakvo
	//     if ( true ili false) { tuka kje se ispolni , ako ne go skoka}

	// { } - code block

/*if (kolicinaBrasno >= 1) {
	console.log("kje pravime torta!");
} else { 
console.log("prvo kupi brasno, pa posle kje pravime");
}


if (beloBrasno == true) {
		console.log("kje pravime so belo brasno!");
}	else if (crnoBrasno == true){
			console.log("kje pravime so crno brasno!")
		}
		sute broevi podeleni so 2 se parni
		site broevi podeleni so 2 imaat ostatok 1 se neparni
*/
kolicinaBrasno = 1;
var brasno = true;

if(brasno == true && kolicinaBrasno >= 1) {
	console.log("ima brasno taman")
}	else { 
	console.log("nema brasno ili kolicinata ne e dovolna")
}

var Mesec = "dekemvri";

broj = 7;

if (broj < 5 || broj > 10) {
	console.log("brojot e pomal od 5 ili pogolem od 10");
}	else { 
		console.log ("brojot e vo opsegot od 5 do 10 vklucuvajki gi i 5 i 10")
}

Mesec = "Januari";

switch(Mesec) {
	case "Januari":
	console.log('Go odbravte mesecot Januari');
	break;
	case "Fevruari":
	console.log('Go odbravte mesecot Fevruari');
	break;
	case "Mart":
	console.log('Go odbravte mesecot Mart');
	break;
	case "April":
	console.log('Go odbravte mesecot April');
	break;
	case "Maj":
	console.log('Go odbravte mesecot Maj');
	break;
	case "Juni":
	console.log('Go odbravte mesecot Juni');
	break;
	case "Juli":
	console.log('Go odbravte mesecot Juli');
	break;
	case "Avgus":
	console.log('Go odbravte mesecot Avgus');
	break;
	case "Septemvri":
	console.log('Go odbravte mesecot Septemvri');
	break;
	case "Oktomvri":
	console.log('Go odbravte mesecot Oktomvri');
	break;
	case "Noemvri":
	console.log('Go odbravte mesecot Noemvri');
	break;
	case "Dekemvri":
	console.log('Go odbravte mesecot Dekemvri');
	break;
	default:
	console.log("ne postoi vakov mesec");
	break;
}

function zdravo(ime) {
	console.log('zdravo' + ime);
}

zdravo();
zdravo();
zdravo();
zdravo();
zdravo();
zdravo();
zdravo();
zdravo();

/*if (Mesec.length % 2 == 0){
	console.log('Mesecot e ubav');
}
else (Mesec.length % 2 != 0) {
	console.log('Mesecot e neubav');
}
*/

 // + - * - / % 


