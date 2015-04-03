<?php
if (isset($_SERVER['REQUEST_METHOD'])) $n = $_GET['n'];
else {
	$n = getopt('n:')['n'];
}

header('Content-Type: text/plain;');

for($i = $n; $i >= 2; $i--) {
	$set = strtotime(date('Y-m-d H:i:s'));
	for($j = 2; $j < $i; $j++)
		if ($i % $j == 0) break;

	$takes = (strtotime(date('Y-m-d H:i:s')) - $set);
	if ($j == $i) {
		printf("%d prime, %5.3f sec\n", $i, $takes);
	}
}

?>