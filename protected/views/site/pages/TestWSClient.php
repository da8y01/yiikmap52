<?php
$this->pageTitle=Yii::app()->name . ' - TestWSClient';
$this->breadcrumbs=array(
	'TestWSClient',
);
?>
<h1>Test WS Client</h1>

<?php
$wsTestClient = new SoapClient('http://localhost:2080/kmap/yiikmap42/index.php/testws/quote');
$aTests1 = $wsTestClient->getTests1();
foreach ($aTests1 as $test1) {
    echo 'Id: '.$test1->id.' - Name: '.$test1->name.' - Description: '.$test1->description.'<br />';
    //echo 'Id: '.$test1->ws_id.' - Name: '.$test1->ws_name.' - Description: '.$test1->ws_description.'<br />';
}
?>
