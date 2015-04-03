var mycos = function(x) {
	var EPS = 1e-08;
	var s = 1.0, e = 1.0, d = 1.0;
	var k;
	x = x % (2 * 3.14159265358979);
	for(k = 1; k <= 200; k+=2) {
		d = s;
		e = - e * x * x / (k * (k + 1));
		s = s + e;
		if (Math.abs(s - d) < EPS * Math.abs(d)) return s;
	}
	return 9999.0;
}

var x, rd=3.14159/180;
for(x = 0; x <= 180; x = x + 10) {
	console.log((0|x*10) / 10 + "\t" + (0|mycos(x)*1000000)/1000000 + "\t" + (0|Math.cos(x)*1000000)/1000000);
}