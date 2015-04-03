<?php
if (isset($_SERVER['REQUEST_METHOD'])) $n = $_GET['n'];
else {
	$n = getopt('n:')['n'];
}

header('Content-Type: text/plain;');
error_reporting(0);

class time {
	public $time = null;
	public function __construct(&$something) {
		$this->time = microtime();
		$something = $this;
	}

	public function getTime() {
		return $this->time;
	}
}

function difftime(&$time1, &$time2) {
	return (round(($time2->time - $time1->time) / 1000) / 1000);
}

for($i = $n; $i >= 2; $i--) {
	time($t1);
	for($j = 2; $j < $i; $j++)
		if ($i % $j == 0) break;

	time($t2);
	if ($j == $i) {
		printf("%d prime, %5.3f sec\n", $i, difftime($t1, $t2));
	}
}

?>