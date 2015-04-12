<?php
$this->pageTitle=Yii::app()->name . ' - CURL';
$this->breadcrumbs=array(
	'CURL',
);
?>
<h1>CURL 01</h1>

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

$fields = array(
    'update'=>
    'PREFIX+rdfs:+<http://www.w3.org/2000/01/rdf-schema#>+PREFIX+xsd:+<http://www.w3.org/2001/XMLSchema#>+INSERT+DATA+{<http://example.com/nodo>+rdfs:range+xsd:int}'
);

$fields_string = 'update=PREFIX+rdfs:+<http://www.w3.org/2000/01/rdf-schema#>+PREFIX+xsd:+<http://www.w3.org/2001/XMLSchema#>+INSERT+DATA+{<http://example.com/nodito01>+xsd:int+rdfs:range}';

//set the url, number of POST vars, POST data
//curl_setopt($ch,CURLOPT_URL,$url);
//curl_setopt($ch,CURLOPT_POST,count($fields));
curl_setopt($ch,CURLOPT_POST,1);
//curl_setopt($ch,CURLOPT_POSTFIELDS,$fields_string);
//curl_setopt($ch,CURLOPT_POSTFIELDS,$fields_string);
curl_setopt($ch,CURLOPT_POSTFIELDS,$fields_string);

curl_setopt($ch, CURLOPT_FILE, $fp);
curl_setopt($ch, CURLOPT_HEADER, 0);

curl_exec($ch);
curl_close($ch);
fclose($fp);
?>
