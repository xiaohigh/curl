<?php 
	
namespace xiaohigh;
class Curl
{
	public function get($url)
	{
		//创建并初始化curl
		$ch = curl_init($url);
		//设置请求头信息
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_TIMEOUT, 10);
		//发送并获取结果
		$res = curl_exec($ch);
		//释放资源
		curl_close($ch);
		return $res;
	}

	public function post($url, $data)
	{
		//创建初始化curl
		$ch = curl_init($url);
		//设置请求头信息
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		curl_setopt($ch, CURLOPT_TIMEOUT, 10);
		//执行
		$res = curl_exec($ch); 
		curl_close($ch);
		return $res;
	}

}




 ?>