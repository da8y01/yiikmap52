<?php
ini_set('soap.wsdl_cache_enabled',0);

$this->pageTitle=Yii::app()->name . ' - WSClient';
$this->breadcrumbs=array(
	'WSClient',
);
?>
<h1>WS Client</h1>

<?php
function getExceptionTraceAsString($exception) {
    $rtn = "";
    $count = 0;
    foreach ($exception->getTrace() as $frame) {
        $args = "";
        if (isset($frame['args'])) {
            $args = array();
            foreach ($frame['args'] as $arg) {
                if (is_string($arg)) {
                    $args[] = "'" . $arg . "'";
                } elseif (is_array($arg)) {
                    $args[] = "Array";
                } elseif (is_null($arg)) {
                    $args[] = 'NULL';
                } elseif (is_bool($arg)) {
                    $args[] = ($arg) ? "true" : "false";
                } elseif (is_object($arg)) {
                    $args[] = get_class($arg);
                } elseif (is_resource($arg)) {
                    $args[] = get_resource_type($arg);
                } else {
                    $args[] = $arg;
                }
            }
            $args = join(", ", $args);
        }
        $rtn .= sprintf( "#%s %s(%s): %s(%s)\n",
                                 $count,
                                 $frame['file'],
                                 $frame['line'],
                                 $frame['function'],
                                 $args );
        $count++;
    }
    return $rtn;
}

try {
/*$client=new SoapClient('http://localhost:2080/kmap/yiikmap30/index.php/webservice/quote');
echo $client->getPrice('GOOGLE');
echo $client->getPrice('IBM');
$aWSAreas = $client->getAreas();
foreach ($aWSAreas as $wsArea) {
    echo $wsArea->id.'<br/>'.$wsArea->nombre.'<br/>'.$wsArea->descripcion;
}*/
//echo 'This is the WS Client.';
//$wsTestClient = new SoapClient('http://localhost:2080/kmap/yiikmap30/index.php/testws/quote');
$wsTestClient = new SoapClient('http://localhost/kmap/yiikmap31/index.php/WebService/quote');
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
//echo $wsTestClient->__getLastRequest(); die();
//echo $wsTestClient->__getLastResponse(); die();

$aRelatedModels = Competencia::model()->findByPk($iId)->getCompetenciaOrganizaciones();
foreach ($aRelatedModels as $relatedmodel) {
    echo $relatedmodel->getAttributeLabel('id').': '.$relatedmodel->id.' - '.$relatedmodel->getAttributeLabel('nombre').': '.$relatedmodel->nombre.' - '.$relatedmodel->getAttributeLabel('contacto').': '.$relatedmodel->contacto.' - '.$relatedmodel->getAttributeLabel('url').': '.$relatedmodel->url.'<br/>';
}
echo '<p/><br/>';
$aWSModels = $wsTestClient->getCompetenciaOrganizaciones($iId);
//echo $wsTestClient->__getLastRequest(); die();
foreach ($aWSModels as $oWSModel) {
    //echo $oWSModel->getAttributeLabel('id').': '.$oWSModel->id.' - '.$oWSModel->getAttributeLabel('nombre').': '.$oWSModel->nombre.' - '.$oWSModel->getAttributeLabel('contacto').': '.$oWSModel->contacto.' - '.$oWSModel->getAttributeLabel('url').': '.$oWSModel->url.'<br/>';
    echo 'Id: '.$oWSModel->id_soap.' - Nombre: '.$oWSModel->nombre_soap.' - Contacto: '.$oWSModel->contacto_soap.' - URL: '.$oWSModel->url_soap.'<br />';
}

//echo $wsTestClient->__getLastResponse(); die();
/*
$aRelatedModels = Proceso::model()->findByPk($iId)->getProcesoCompetencias();
foreach ($aRelatedModels as $relatedmodel) {
    echo $relatedmodel->getAttributeLabel('id').': '.$relatedmodel->id.' - '.$relatedmodel->getAttributeLabel('nombre').': '.$relatedmodel->nombre.' - '.$relatedmodel->getAttributeLabel('tipo').': '.$relatedmodel->tipo.' - '.$relatedmodel->getAttributeLabel('modelo').': '.$relatedmodel->modelo.'<br/>';
}
echo '<p/><br/>';
$aWSModels = $wsTestClient->getProcesoCompetencias($iId);
foreach ($aWSModels as $oWSModel) {
    //echo $oWSModel->getAttributeLabel('id').': '.$oWSModel->id.' - '.$oWSModel->getAttributeLabel('nombre').': '.$oWSModel->nombre.' - '.$oWSModel->getAttributeLabel('tipo').': '.$oWSModel->tipo.' - '.$oWSModel->getAttributeLabel('modelo').': '.$oWSModel->modelo.'<br/>';
    echo 'Id: '.$oWSModel->id_soap.' - Nombre: '.$oWSModel->nombre_soap.' - Tipo: '.$oWSModel->tipo_soap.' - Modelo: '.$oWSModel->modelo_soap.'<br />';
}
*/
/*
$aRelatedModels = Proceso::model()->findByPk($iId)->getProcesoCapitalesEstructurales();
foreach ($aRelatedModels as $relatedmodel) {
    echo $relatedmodel->getAttributeLabel('id').': '.$relatedmodel->id.' - '.$relatedmodel->getAttributeLabel('nombre').': '.$relatedmodel->nombre.' - '.$relatedmodel->getAttributeLabel('descripcion').': '.$relatedmodel->descripcion.' - '.$relatedmodel->getAttributeLabel('tipo').': '.$relatedmodel->tipo.'<br/>';
}
echo '<p/><br/>';
$aWSModels = $wsTestClient->getProcesoCapitalesEstructurales($iId);
foreach ($aWSModels as $oWSModel) {
    //echo $oWSModel->getAttributeLabel('id').': '.$oWSModel->id.' - '.$oWSModel->getAttributeLabel('nombre').': '.$oWSModel->nombre.' - '.$oWSModel->getAttributeLabel('descripcion').': '.$oWSModel->descripcion.' - '.$oWSModel->getAttributeLabel('tipo').': '.$oWSModel->tipo.'<br/>';
    echo 'Id: '.$oWSModel->id_soap.' - Nombre: '.$oWSModel->nombre_soap.' - Descripción: '.$oWSModel->descripcion_soap.' - Tipo: '.$oWSModel->tipo_soap.'<br />';
}
*/
/*
$aRelatedModels = Proceso::model()->findByPk($iId)->getProcesoCapitalesHumanos();
foreach ($aRelatedModels as $relatedmodel) {
    echo $relatedmodel->getAttributeLabel('id').': '.$relatedmodel->id.' - '.$relatedmodel->getAttributeLabel('nombre').': '.$relatedmodel->nombre.' - '.$relatedmodel->getAttributeLabel('tipo').': '.$relatedmodel->tipo.' - '.$relatedmodel->getAttributeLabel('contacto').': '.$relatedmodel->contacto.'<br/>';
}
echo '<p/><br/>';
$aWSModels = $wsTestClient->getProcesoCapitalesHumanos($iId);
foreach ($aWSModels as $oWSModel) {
    //echo $oWSModel->getAttributeLabel('id').': '.$oWSModel->id.' - '.$oWSModel->getAttributeLabel('nombre').': '.$oWSModel->nombre.' - '.$oWSModel->getAttributeLabel('tipo').': '.$oWSModel->tipo.' - '.$oWSModel->getAttributeLabel('contacto').': '.$oWSModel->contacto.'<br/>';
    echo 'Id: '.$oWSModel->id_soap.' - Nombre: '.$oWSModel->nombre_soap.' - Tipo: '.$oWSModel->tipo_soap.' - Contacto: '.$oWSModel->contacto_soap.'<br />';
}
*/
/*
$aRelatedModels = Proceso::model()->findByPk($iId)->getProcesoCapitalesRelacionales();
foreach ($aRelatedModels as $relatedmodel) {
    echo $relatedmodel->getAttributeLabel('id').': '.$relatedmodel->id.' - '.$relatedmodel->getAttributeLabel('afines').': '.$relatedmodel->afines.' - '.$relatedmodel->getAttributeLabel('organizacion_id').': '.$relatedmodel->organizacion_id.' - '.$relatedmodel->getAttributeLabel('created_at').': '.$relatedmodel->created_at.'<br/>';
}
echo '<p/><br/>';
$aWSModels = $wsTestClient->getProcesoCapitalesRelacionales($iId);
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
}
catch (SoapFault $e) {
    echo $e->getMessage();
    error_log( $e->getTraceAsString() );

    $fTrace = fopen('/home/gothmog/Desktop/SOAPTrace/SOAPTrace00.txt', 'w');
    fwrite($fTrace, getExceptionTraceAsString($e));
    fclose($fTrace);
}
?>
