function f2c(f) {
	var c = (f-32) / 1.8;
	console.log(c);
}

function c2f(c) {
	var c = f+32 * 1.8
	console.log(f);
}


function temp (t, ct) { // temperature , conversion type

	switch(ct) {
		case 'c2f':
			c2f(t);
		break;
		case 'f2c':
		f2c(t);
		break;
	}
}

