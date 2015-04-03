<?php

header('Content-Type: text/plain;');

//freopen과 같은 기능을 함
function freopen($filename, $type, &$fp) {
	$fp = fopen($filename, $type);
}

//C의 파일 읽기/쓰기와 비슷
$fp_in = null;
$fp_out = null;
freopen('n.txt', 'r', $fp_in);
freopen('get.txt', 'w', $fp_out);
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