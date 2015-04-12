<?php
$this->pageTitle=Yii::app()->name . ' - About';
$this->breadcrumbs=array(
	'About',
);
?>
<h1>CURL 00</h1>

<?php 
/*
$ch = curl_init();

//curl_setopt($ch, CURLOPT_VERBOSE, 1);
//curl_setopt($ch, CURLOPT_URL, $req);
curl_setopt($ch, CURLOPT_URL, 'http://localhost:2080/update/');
curl_setopt($ch, CURLOPT_HTTPHEADER, array_merge(Array("Accept: text/tab-separated-values"), $headers));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_USERAGENT, "CURL");
$http_result = split("\n", curl_exec($ch));
curl_close($ch);
*/
$ch = curl_init("http://localhost:2080/update/");
$fp = fopen("localhost2080update.txt", "w");

curl_setopt($ch, CURLOPT_FILE, $fp);
curl_setopt($ch, CURLOPT_HEADER, 0);

curl_exec($ch);
curl_close($ch);
fclose($fp);
?>
