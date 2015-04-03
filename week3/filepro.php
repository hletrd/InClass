<?php
//입력된 파일을 입력된 keyphrase에 의해 AES256 암호화
//사용: php filepro.php -f=(파일명) : (파일명)을 password.txt으로 입력된 비밀번호로 AES256 암호화하여 파일 데이터는 file.out, 키 데이터(AES 256 해싱된 비밀번호 및 iv값)를 key.out에 출력
if (isset($_SERVER['REQUEST_METHOD'])) $f = $_GET['f'];
else {
	$f = getopt('f:')['f'];
}

$content = file_get_contents($f);
$key = pack('H*', hash('sha256', file_get_contents('password.txt')));

$iv = mcrypt_create_iv(16, MCRYPT_RAND);
$content = mcrypt_encrypt(MCRYPT_RIJNDAEL_128, $key, $content, MCRYPT_MODE_CBC, $iv);

file_put_contents('file.out', $content);
$iv = unpack('H*', $iv);
$out1 = '';
foreach($iv as $each) {
	$out1 .= $each;
}
$key = unpack('H*', $key);
$out2 = '';
foreach($key as $each) {
	$out2 .= $each;
}

file_put_contents('key.out', $out1 . '$' . $out2);


?>