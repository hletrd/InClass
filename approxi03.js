var mypi = function() {
	var EPS = 1e-08;
	var s = 1.0, e = 1.0, d = 1.0;
	var k;
	for(k = 2; k <= 200; k+=2) {
		d = s;
		e = - e / (k * (k + 1));
		s = s + e;
		if (Math.abs(s - d) < EPS * Math.abs(d)) return s;
	}
	return 9999.0;
}

var x, rd=3.14159/180;
console.log(mypi())