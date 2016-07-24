<?php 
	
	include './vendor/autoload.php';

	//实例化
	$curl = new \xiaohigh\Curl;

	$res = $curl -> get('http://www.xiaohigh.com');

	echo $res;


 ?>