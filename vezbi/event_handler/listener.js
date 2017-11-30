 window.onload = function() {

	var numOne = document.getElementById('num-one');
	var numTwo = document.getElementById('num-two');
	var addSum = document.getElementById('add-sum');

	numOne.addEventListener('click',myFun);
	numTwo.addEventListener('click',myFun);

function myFun() {
	var one = parseFloat(numOne.value) || 0;
	var two = parseFloat(numTwo.value) || 0;
	addSum.innerHTML ='your summ is: ' + (one+two);
}
 }
