function pero(x, y, z){
	console.log(x);
}

var a = 5; // var = variable (променлива)
a = 10;
var b, c;


// pero(a);

// console.log(a);


var d = 'janko';

function ime(i){
	console.log(i);
	d = 'stanko';
}

// console.log(d);
// ime('pero');


var niza = ['a', 'b', 'c', 'd', 'e'];

console.log(niza);

console.log(niza[2]);

// niza[20] = 'z';
niza.push('z');

console.log(niza[20]);

console.log(niza.length);


var niza2 = ['bojan', 223305, true, 'test'];
console.log(niza2);

console.log(niza2[1]);

var niza3 = [
	[1, 2, 3, 4, 5], 
	[6, 7, 8, 9, 0], 
	[
		'a', 
		'b', 
		'c', 
		'd', 
		'e', 
		[10, 20, 30, 40]
	]
];

console.log(niza3);
console.log(niza3[1][2]);
console.log(niza3[2][5][2]);

// console.log(niza3.1.2); // ова не функционира кај низи

var o1 = {
	ime: 'Bojan',
	prezime: 'Gavrovski',
	oceni: [6, 6, 7, 5, 7, 6],
	profesori: [
		{
			ime: 'Pero',
			prezime: 'Perovski',
		},
		{
			ime: 'Janko',
			prezime: 'Jankovski'
		}
	]
};

console.log(o1);
console.log(o1['ime']);
console.log(o1['prezime']);

console.log(o1.ime);
console.log(o1.prezime);
console.log(o1.oceni[3]);
console.log(o1.profesori[1].prezime);



for(var i = 0; i < 10; i = i + 1) { // start, end, step
	console.log('Hello!');
	console.log(i);
}

var niza4 = [2, 2, 3, 5, 4, 5, 4, 6, 7, 8, 9];

// console.log(niza4[0]);
// console.log(niza4[1]);
// console.log(niza4[2]);
// console.log(niza4[3]);
// console.log(niza4[4]);

for(var i = 0; i < niza4.length; i++) {
	if(niza4[i] % 2 == 0){
		console.log(niza4[i]);
	}
}

// niza4.forEach((v) => {
// 	console.log(v % 2 == 0 ? v : '');
// });

function testFn(){
	console.log('testFn');
}

function testFn2(){
	return 'testFn2';
}

testFn();

var tfn2 = testFn2();
console.log(tfn2);

console.log(testFn2());


var niza5 = [2, 5, 3, 2, 3, 3, 5, 1, 1, 4, 4, 2, 4, 2, 2, 4];

sekojTretParenBroj(niza5); // console.log
// 4
// 4

zbirNaNeparniBroevi(niza5); // return
// 21

prosek(niza5); // return
// 2.9375