var myexp = function(x) {
	var EPS = 1e-08;
	var s = 1.0, e = 1.0, d = 1.0;
	var k;
	for(k = 1; k <= 200; k++) {
		d = s;
		e = e * x / k;
		s = s + e;
		if (Math.abs(s - d) < EPS * Math.abs(d)) return s;
	}
	return 0.0;
}

var x;
for(x = 0; x <= 40; x = x + 10) {
	console.log((0|x*10) / 10 + "\t" + (0|myexp(x)*1000000)/1000000 + "\t" + (0|Math.exp(x)*1000000)/1000000);
}