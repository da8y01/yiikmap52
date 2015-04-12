<?php
ini_set('soap.wsdl_cache_enabled',0);

$this->pageTitle=Yii::app()->name . ' - WSClient';
$this->breadcrumbs=array(
	'WSClient',
);
?>
<h1>WS Client</h1>

<?php
/*$client=new SoapClient('http://localhost:2080/kmap/yiikmap30/index.php/webservice/quote');
echo $client->getPrice('GOOGLE');
echo $client->getPrice('IBM');
$aWSAreas = $client->getAreas();
foreach ($aWSAreas as $wsArea) {
    echo $wsArea->id.'<br/>'.$wsArea->nombre.'<br/>'.$wsArea->descripcion;
}*/
//echo 'This is the WS Client.';
//$wsTestClient = new SoapClient('http://localhost:2080/kmap/yiikmap30/index.php/testws/quote');
$wsTestClient = new SoapClient('http://localhost:3080/yiikmap50/index.php/WebService/quote');
/*$wsTestClient = new SoapClient('http://localhost/kmap/yiikmap31/index.php/WebService/quote',
        array(
            'trace' => 1,
            'exceptions' => true,
            'cache_wsdl' => WSDL_CACHE_NONE,
            'features' => SOAP_SINGLE_ELEMENT_ARRAYS
        )
    );*/
// __getLastRequest() and __getLastResponse()
//echo $wsTestClient->__getLastRequest(); die();
//echo $wsTestClient->__getLastResponse(); die();
/*
$aModels = $wsTestClient->getTestsLiderazgoTransformacional();
foreach ($aModels as $model) {
    echo 'Id: '.$model->id_soap.' - Capital Humano: '.$model->capital_humano_id_soap.' - Created At: '.$model->created_at_soap.'<br />';
}
*/
/*
$model = $wsTestClient->getTestLiderazgoTransformacionalById(1);
echo 'Id (soap): '.$model->id_soap.' - Capital Humano (soap): '.$model->capital_humano_id_soap.' - Created At: '.$model->created_at_soap.' - Updated At: '.$model->updated_at_soap.'<br/>';
*/

$iId = 1;
/*
$aRelatedModels = CapitalRelacional::model()->findByPk($iId)->getCapitalRelacionalProcesos();
foreach ($aRelatedModels as $relatedmodel) {
    echo $relatedmodel->getAttributeLabel('id').': '.$relatedmodel->id.' - '.$relatedmodel->getAttributeLabel('version').': '.$relatedmodel->version.' - '.$relatedmodel->getAttributeLabel('nombre').': '.$relatedmodel->nombre.' - '.$relatedmodel->getAttributeLabel('tipo').': '.$relatedmodel->tipo.'<br/>';
}
echo '<p/><br/>';
$aWSModels = $wsTestClient->getCapitalRelacionalProcesos($iId);
foreach ($aWSModels as $oWSModel) {
    //echo $relatedmodel->getAttributeLabel('id').': '.$relatedmodel->id.' - '.$relatedmodel->getAttributeLabel('version').': '.$relatedmodel->version.' - '.$relatedmodel->getAttributeLabel('nombre').': '.$relatedmodel->nombre.' - '.$relatedmodel->getAttributeLabel('tipo').': '.$relatedmodel->tipo.'<br/>';
    echo 'ID: '.$oWSModel->id_soap.' - Versi&oacute;n: '.$oWSModel->version_soap.' - Nombre: '.$oWSModel->nombre_soap.' - Tipo: '.$oWSModel->tipo_soap.'<br />';
}
*/
/*
$aRelatedModels = CapitalRelacional::model()->findByPk($iId)->getCapitalRelacionalOrganizaciones();
foreach ($aRelatedModels as $relatedmodel) {
    echo $relatedmodel->getAttributeLabel('id').': '.$relatedmodel->id.' - '.$relatedmodel->getAttributeLabel('nombre').': '.$relatedmodel->nombre.' - '.$relatedmodel->getAttributeLabel('contacto').': '.$relatedmodel->contacto.' - '.$relatedmodel->getAttributeLabel('url').': '.$relatedmodel->url.'<br/>';
}
echo '<p/><br/>';
$aWSModels = $wsTestClient->getCapitalRelacionalOrganizaciones($iId);
foreach ($aWSModels as $oWSModel) {
    //echo $oWSModel->getAttributeLabel('id').': '.$oWSModel->id.' - '.$oWSModel->getAttributeLabel('nombre').': '.$oWSModel->nombre.' - '.$oWSModel->getAttributeLabel('contacto').': '.$oWSModel->contacto.' - '.$oWSModel->getAttributeLabel('url').': '.$oWSModel->url.'<br/>';
    echo 'ID: '.$oWSModel->id_soap.' - Nombre: '.$oWSModel->nombre_soap.' - Contacto: '.$oWSModel->contacto_soap.' - URL: '.$oWSModel->url_soap.'<br />';
}
*/
/*
$aRelatedModels = CapitalRelacional::model()->findByPk($iId)->getCapitalRelacionalCompetencias();
foreach ($aRelatedModels as $relatedmodel) {
    echo $relatedmodel->getAttributeLabel('id').': '.$relatedmodel->id.' - '.$relatedmodel->getAttributeLabel('nombre').': '.$relatedmodel->nombre.' - '.$relatedmodel->getAttributeLabel('tipo').': '.$relatedmodel->tipo.' - '.$relatedmodel->getAttributeLabel('modelo').': '.$relatedmodel->modelo.'<br/>';
}
echo '<p/><br/>';
$aWSModels = $wsTestClient->getCapitalRelacionalCompetencias($iId);
foreach ($aWSModels as $oWSModel) {
    //echo $oWSModel->getAttributeLabel('id').': '.$oWSModel->id.' - '.$oWSModel->getAttributeLabel('nombre').': '.$oWSModel->nombre.' - '.$oWSModel->getAttributeLabel('tipo').': '.$oWSModel->tipo.' - '.$oWSModel->getAttributeLabel('modelo').': '.$oWSModel->modelo.'<br/>';
    echo 'ID: '.$oWSModel->id_soap.' - Nombre: '.$oWSModel->nombre_soap.' - Tipo: '.$oWSModel->tipo_soap.' - Modelo: '.$oWSModel->modelo_soap.'<br />';
}
*/
/*
$aRelatedModels = CapitalRelacional::model()->findByPk($iId)->getCapitalRelacionalCapitalesEstructurales();
foreach ($aRelatedModels as $relatedmodel) {
    echo $relatedmodel->getAttributeLabel('id').': '.$relatedmodel->id.' - '.$relatedmodel->getAttributeLabel('nombre').': '.$relatedmodel->nombre.' - '.$relatedmodel->getAttributeLabel('descripcion').': '.$relatedmodel->descripcion.' - '.$relatedmodel->getAttributeLabel('tipo').': '.$relatedmodel->tipo.'<br/>';
}
echo '<p/><br/>';
$aWSModels = $wsTestClient->getCapitalRelacionalCapitalesEstructurales($iId);
foreach ($aWSModels as $oWSModel) {
    //echo $oWSModel->getAttributeLabel('id').': '.$oWSModel->id.' - '.$oWSModel->getAttributeLabel('nombre').': '.$oWSModel->nombre.' - '.$oWSModel->getAttributeLabel('descripcion').': '.$oWSModel->descripcion.' - '.$oWSModel->getAttributeLabel('tipo').': '.$oWSModel->tipo.'<br/>';
    echo 'ID: '.$oWSModel->id_soap.' - Nombre: '.$oWSModel->nombre_soap.' - Descripción: '.$oWSModel->descripcion_soap.' - Tipo: '.$oWSModel->tipo_soap.'<br />';
}
*/

$aRelatedModels = CapitalRelacional::model()->findByPk($iId)->getCapitalRelacionalCapitalesHumanos();
foreach ($aRelatedModels as $relatedmodel) {
    echo $relatedmodel->getAttributeLabel('id').': '.$relatedmodel->id.' - '.$relatedmodel->getAttributeLabel('nombre').': '.$relatedmodel->nombre.' - '.$relatedmodel->getAttributeLabel('tipo').': '.$relatedmodel->tipo.' - '.$relatedmodel->getAttributeLabel('contacto').': '.$relatedmodel->contacto.'<br/>';
}
echo '<p/><br/>';
$aWSModels = $wsTestClient->getCapitalRelacionalCapitalesHumanos($iId);
foreach ($aWSModels as $oWSModel) {
    //echo $oWSModel->getAttributeLabel('id').': '.$oWSModel->id.' - '.$oWSModel->getAttributeLabel('nombre').': '.$oWSModel->nombre.' - '.$oWSModel->getAttributeLabel('tipo').': '.$oWSModel->tipo.' - '.$oWSModel->getAttributeLabel('contacto').': '.$oWSModel->contacto.'<br/>';
    echo 'ID: '.$oWSModel->id_soap.' - Nombre: '.$oWSModel->nombre_soap.' - Tipo: '.$oWSModel->tipo_soap.' - Contacto: '.$oWSModel->contacto_soap.'<br />';
}
echo '<p/><br/>';
$aWSFunctions = $wsTestClient->__getFunctions();
foreach ($aWSFunctions as $oWSFunction) {
    CVarDumper::dump($oWSFunction);
    echo '<p/><br/>';
}

/*
$aRelatedModels = CapitalHumano::model()->findByPk($iId)->getCapitalHumanoCapitalesRelacionales();
foreach ($aRelatedModels as $relatedmodel) {
    echo $relatedmodel->getAttributeLabel('id').': '.$relatedmodel->id.' - '.$relatedmodel->getAttributeLabel('afines').': '.$relatedmodel->afines.' - '.$relatedmodel->getAttributeLabel('organizacion_id').': '.$relatedmodel->organizacion_id.' - '.$relatedmodel->getAttributeLabel('created_at').': '.$relatedmodel->created_at.'<br/>';
}
echo '<p/><br/>';
$aWSModels = $wsTestClient->getCapitalHumanoCapitalesRelacionales($iId);
foreach ($aWSModels as $oWSModel) {
    //echo $oWSModel->getAttributeLabel('id').': '.$oWSModel->id.' - '.$oWSModel->getAttributeLabel('nombre').': '.$oWSModel->nombre.' - '.$oWSModel->getAttributeLabel('tipo').': '.$oWSModel->tipo.' - '.$oWSModel->getAttributeLabel('contacto').': '.$oWSModel->contacto.'<br/>';
    echo 'ID: '.$oWSModel->id_soap.' - Afines: '.$oWSModel->afines_soap.' - Organizaci&oacute;n: '.$oWSModel->organizacion_id_soap.' - Creaci&oacute;n: '.$oWSModel->created_at_soap.'<br />';
}
*/

/*
$aRelatedModels = $wsTestClient->getProcOrg(5);
foreach ($aRelatedModels as $relatedmodel) {
    echo 'Id: '.$relatedmodel->id_soap.' - Nombre: '.$relatedmodel->nombre_soap.' - Contacto: '.$relatedmodel->contacto_soap.' - Descripcion: '.$relatedmodel->descripcion_soap.'<br/>';
}
*/
/*
$o = CapitalRelacional::model()->findByPk(1);
echo $o->getOrgNombre();
echo $o->orgnombre;
*/
?>
