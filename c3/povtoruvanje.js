
// site iminja  sto imaat paren broj na bukvi da ispise ubavo ime

// site iminja sto imaat neparen broj na bukvi da ispise neubavo ime

//

	var ime = document.getElementById('ime');

function kakvoime() {
	
	if (ime.value.length %2 == 0) {
		alert('imeto e ubavo');
	} else{
		alert('imeto ne e ubavo');
	}

}