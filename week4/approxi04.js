var mypi = function() {
	var EPS = 1e-08;
	var s = 0, e = 1.0, d = 1.0;
	var k;
	for(k = 1; k <= 1000000; k+=2) {
		e = ((k-1)/2%2?-1:1) / k;
		s = s + e;
	}
	return s * 4;
}

var x, rd=3.14159/180;
console.log(mypi())