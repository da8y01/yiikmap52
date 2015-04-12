<?php
$this->pageTitle=Yii::app()->name . ' - Utilidades';
$this->breadcrumbs=array(
	'Utilidades',
);
?>
<h1>UTILIDADES</h1>

<div>
<?php
    $this->widget('zii.widgets.CMenu',  
            array('encodeLabel'=>false, 
                'items'=>array(
                    array('label'=>'Ver Modelo de Conocimiento Organizacional (MCO): <a href="'.Yii::app()->baseUrl.'/vocabulario/ModeloConocimientoOrganizacional_RDFS.ttl" target="_blank">turtle</a>, <a href="'.Yii::app()->baseUrl.'/vocabulario/ModeloConocimientoOrganizacional_RDFS.rdfs" target="_blank">RDF abreviado</a>, <a href="'.Yii::app()->baseUrl.'/vocabulario/ModeloConocimientoOrganizacional_RDFS.gv" target="_blank">lenguaje DOT</a>, <a href="'.Yii::app()->baseUrl.'/vocabulario/ModeloConocimientoOrganizacional_RDFS.gv.png" target="_blank">Graphviz</a>, <a href="'.Yii::app()->baseUrl.'/vocabulario/mco-graph-20130526-1945.png" target="_blank">grafo generado por el validador W3C</a>.'),
                    array('label'=>'Ver definici&oacute;n de clases: <a href="'.Yii::app()->baseUrl.'/vocabulario/ClassDefinitions11.ttl" target="_blank">turtle</a>, <a href="'.Yii::app()->baseUrl.'/vocabulario/ClassDefinitions11.rdfs" target="_blank">RDF abreviado</a>, <a href="'.Yii::app()->baseUrl.'/vocabulario/ClassDefinitions11.gv" target="_blank">lenguaje DOT</a>, <a href="'.Yii::app()->baseUrl.'/vocabulario/ClassDefinitions11.gv.png" target="_blank">Graphviz</a>, <a href="'.Yii::app()->baseUrl.'/vocabulario/classdefinitions-graph-20130526-1947.png" target="_blank">grafo generado por el validador W3C</a>.'),
                    array('label'=>'WebService.', 'url'=>Yii::app()->homeUrl.'/WebService/quote', 'linkOptions'=>array('target'=>'_blank')),
                    array('label'=>'WebService Clients.', 'url'=>array('page', 'view'=>'WSClients'), 'linkOptions'=>array('target'=>'_blank')),
                    array('label'=>'Ejemplos de consultas SPARQL.', 'url'=>array('page', 'view'=>'ConsultasSPARQL'), 'linkOptions'=>array('target'=>'_blank')),
                    array('label'=>'Abrir SPARQL EndPoint.', 'url'=>array('../plainold/SPARQLEP.php'), 'linkOptions'=>array('target'=>'_blank')),
                    array('label'=>'Ejecutar alimentación de triple-store.', 'url'=>array('page', 'view'=>'TripleStoreFeed'), 'linkOptions'=>array('style'=>'color:red; font-weight:bold;', 'target'=>'_blank'))
                )
            )
    );
?>
</div><!-- mainmenu -->
