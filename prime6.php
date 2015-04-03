<?php

header('Content-Type: text/plain;');

//C의 파일 읽기/쓰기와 비슷
$fp_in = fopen('n.txt', 'r');
$fp_out = fopen('get.txt', 'w');
fscanf($fp_in, '%d', $n);

for($i = $n; $i >= 2; $i--) {
	$set = microtime(true);
	for($j = 2; $j < $i; $j++)
		if ($i % $j == 0) break;

	$takes = (microtime(true) - $set);
	if ($j == $i) {
		fprintf($fp_out, "%d prime, %5.3f sec\n", $i, $takes / 1000000);
	}
}

?>