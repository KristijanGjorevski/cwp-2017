// function c2f () {
// 	var celsius = document.getElementById('celsius').value;
// 	var fahrenheit = calculateC2F(celsius);
// 	document.getElementById('result').innerHTML = fahrenheit;
// }

// function calculateC2F(celsius) {
// 	var fahrenheit = celsius * 9/5 + 32;
// 	return fahrenheit;
// }


function c2f () {
	var celsius = document.getElementById('celsius').value;
	var fahrenheit = celsius * 9/5 + 32;
	document.getElementById('fahrenheit').value = fahrenheit;
}
function presmetajMomentalnoc2f(){
	var celsius = document.getElementById('celsius').value;
	var fahrenheit = celsius * 9/5 + 32;
	document.getElementById('fahrenheit').value = fahrenheit;
}
function presmetajf2c() {
	var fahrenheit = document.getElementById('fahrenheit').value;
	var celsius = (fahrenheit - 32) * 5/9;
	document.getElementById('celsius').value = celsius;
}



//se povikuva koga ke se izloadira browserot
window.onload = function() {
  var celsius = document.getElementById('celsius').value;
  var fahrenheit = document.getElementById('fahrenheit').value;
};



function asd(elementov){
	
	alert(elementov.value);
	elementov.style.display = 'none';
}




function f2c(celsius, fahrenheit) {
	var fahrenheit = getElementByClassName('fahrenheit').value;
	celsius = (fahrenheit - 32) * 5/9;
	return celsius;
}





function f2c(fahrenheit) {
	document.getElementByClassName('celsius').value = fahrenheit;
}


