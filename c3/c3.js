/*var niza = ['a','b','c','d','e'];

console.log(niza);

console.log(niza[2]);

niza[20] = 'z';
niza.push('z');

console.log(niza[20]);

console.log(niza.length);*/

/*var niza3 = [

	[1,2,3,4,5],
	[6,7,8,9,0],
	['a','b','c','d','e']
];

console.log(niza3[1][2]);


var o1 = {

	ime: 'Bojan',
	prezime: 'Gavrovski',
	oceni : [6,6,4,2,3],
	profesori: [

		{
			ime: "pero",
			prezime:"Perovski",


		},
		{
			ime:"Janko",
			prezime:"Jankovski"


		}

	]
};


console.log(o1);
console.log(o1['ime']);
console.log(o1['prezime']);

// varijanta kako da se ispecati istoto

console.log(o1.ime);
console.log(o1.prezime);

o1.ime = "Kristijan";
console.log(o1.ime);

console.log(o1.oceni[3]);

console.log(o1.profesori[1].prezime)


for (i =0; i<10;i++) {

	console.log('hello!');
	console.log(i);
}*/


niza4 = [2, 2, 3, 5, 4, 5, 4, 6, 7, 8, 9];


for (i=0; i<niza4.length; i++) {

	if (niza4[i] %2 == 0 ) {

		console.log(niza4[i]);

	}
}

//     e isto kako i pisanoto podole !!

niza4.forEach((v) => {
	console.log(v %2 == 0 ? v : '');
});
