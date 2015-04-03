var circuldecimal = function(x) {
	x /= x*x;
	var regex = /([0-9]+?)\1\1\1\1/;
	var result = regex.exec((''+x).split('.')[1]);
	return {match: result[1], length: result[1].length};
}

console.log(circuldecimal(100));