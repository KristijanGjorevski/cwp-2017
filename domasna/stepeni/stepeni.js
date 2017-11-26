var celsius = getElementByClassName('celsius').value ;
var fahrenheit = getElementByClassName('fahrenheit').value ;

function c2f (fahrenheit) {
	fahrenheit = fahrenheit * 9/5 + 32;
		return fahrenheit;
}

function f2c(celsius) {
	celsius = (celsius - 32) * 5/9
		return celsius;

}



c2f(celsius) {
	document.getElementByClassName('fahrenheit') = celsius;
}

f2c(fahrenheit) {
	document.getElementByClassName('celsius').value = fahrenheit;
}