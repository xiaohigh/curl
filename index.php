<?php 
	
	include './vendor/autoload.php';

	//实例化
	$curl = new \xiaohigh\Curl;

	//发送get请求
	// $res = $curl -> get('http://www.xiaohigh.com');
	//发送post请求
	$res = $curl -> post('http://www.xiaohigh.com', []);

	echo $res;


 ?>