<?php
ini_set('soap.wsdl_cache_enabled',0);

$this->pageTitle=Yii::app()->name . ' - PHPClient';
$this->breadcrumbs=array(
	'PHPClient',
);
?>
<h1>PHP Client</h1>

<?php
$wsTestClient = new SoapClient('http://localhost:3080'.Yii::app()->homeUrl.'/WebService/quote');
$aWSFunctions = $wsTestClient->__getFunctions();
foreach ($aWSFunctions as $oWSFunction) {
    CVarDumper::dump($oWSFunction);
    echo '<p/><br/>';
}
?>
