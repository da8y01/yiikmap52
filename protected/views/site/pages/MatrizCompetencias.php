<?php
$this->pageTitle = Yii::app()->name . ' - Matriz-K (pivote Competencia)';
$this->breadcrumbs = array(
    'Matriz-K (pivote Competencia)',
);


$this->widget('application.extensions.fancybox.EFancyBox', array(
    'target' => 'a#aid_fbajaxtriples',
    'config' => array(),
        )
);


$cs = Yii::app()->getClientScript();

$cs->registerScriptFile(Yii::app()->request->baseUrl . '/js/dhotson-springy-3e0a1be/springy.js', CClientScript::POS_HEAD);
$cs->registerScriptFile(Yii::app()->request->baseUrl . '/js/dhotson-springy-3e0a1be/springyui.js', CClientScript::POS_HEAD);
?>


<h1>Matriz-K (pivote Competencia)</h1>

<p>La Matriz-K pivoteada en la 'Competencia' presenta el conocimiento de la organizaci&oacute;n relacionado a las competencias concernientes a la organizaci&oacute;n.</p>


<?php

function getViewCompAll($data) {
    $aCompetenciaProcesos = $data->getCompetenciaProcesos();

    $sIdField_CompProc = 'ddlCompProc-' . $data->id;

    $sResult_CompProc = CHtml::dropDownList($sIdField_CompProc, 'nombre', CHtml::encodeArray(
                            CHtml::listData($aCompetenciaProcesos, 'id', 'nombre', 'tiponombre')
                    ), array(
                'prompt' => 'Seleccionar...',
                'empty' => 'Sin elementos',
                'style' => 'width:50%',
                'ajax' => array(
                    'type' => 'POST',
                    'url' => Yii::app()->createUrl('site/dynamicproc/field/' . $sIdField_CompProc),
                    'update' => '#dHolderAJAX'
                )
                    )
    );


    $aCompetenciaOrganizaciones = $data->getCompetenciaOrganizaciones();

    $sIdField_CompOrg = 'ddlCompOrg-' . $data->id;

    $sResult_CompOrg = CHtml::dropDownList($sIdField_CompOrg, 'nombre', CHtml::encodeArray(
                            CHtml::listData($aCompetenciaOrganizaciones, 'id', 'nombre', 'sector.nombre')
                    ), array(
                'prompt' => 'Seleccionar...',
                'empty' => 'Sin elementos',
                'style' => 'width:50%',
                'ajax' => array(
                    'type' => 'POST',
                    'url' => Yii::app()->createUrl('site/dynamicorg/field/' . $sIdField_CompOrg),
                    'update' => '#dHolderAJAX'
                )
                    )
    );


    $aCompetenciaCapitalesEstructurales = $data->getCompetenciaCapitalesEstructurales();

    $sIdField_CompCapEst = 'ddlCompCapEst-' . $data->id;

    $sResult_CompCapEst = CHtml::dropDownList($sIdField_CompCapEst, 'nombre', CHtml::encodeArray(
                            CHtml::listData($aCompetenciaCapitalesEstructurales, 'id', 'nombre', 'tiponombre')
                    ), array(
                'prompt' => 'Seleccionar...',
                'empty' => 'Sin elementos',
                'style' => 'width:50%',
                'ajax' => array(
                    'type' => 'POST',
                    'url' => Yii::app()->createUrl('site/dynamiccapest/field/' . $sIdField_CompCapEst),
                    'update' => '#dHolderAJAX'
                )
                    )
    );


    $aCompetenciaCapitalesHumanos = $data->getCompetenciaCapitalesHumanos();

    $sIdField_CompCapHum = 'ddlCompCapHum-' . $data->id;

    $sResult_CompCapHum = CHtml::dropDownList($sIdField_CompCapHum, 'nombre', CHtml::encodeArray(
                            CHtml::listData($aCompetenciaCapitalesHumanos, 'id', 'nombre', 'tiponombre')
                    ), array(
                'prompt' => 'Seleccionar...',
                'empty' => 'Sin elementos',
                'style' => 'width:50%',
                'ajax' => array(
                    'type' => 'POST',
                    'url' => Yii::app()->createUrl('site/dynamiccaphum/field/' . $sIdField_CompCapHum),
                    'update' => '#dHolderAJAX'
                )
                    )
    );


    $aCompetenciaCapitalesRelacionales = $data->getCompetenciaCapitalesRelacionales();

    $sIdField_CompCapRel = 'ddlCompCapRel-' . $data->id;

    $sResult_CompCapRel = CHtml::dropDownList($sIdField_CompCapRel, 'nombre', CHtml::encodeArray(
                            CHtml::listData($aCompetenciaCapitalesRelacionales, 'id', 'orgnombre', 'orgsector')
                    ), array(
                'prompt' => 'Seleccionar...',
                'empty' => 'Sin elementos',
                'style' => 'width:50%',
                'ajax' => array(
                    'type' => 'POST',
                    'url' => Yii::app()->createUrl('site/dynamiccaprel/field/' . $sIdField_CompCapRel),
                    'update' => '#dHolderAJAX'
                )
                    )
    );



    $sRow1Data1 = CHtml::tag('td', array('style' => 'text-align:right;width:25%;'), CHtml::label('PROCESOS:', 'ddlCompProc-' . $data->id, array()), true);
    $sRow1Data2 = CHtml::tag('td', array(), $sResult_CompProc, true);
    $sRow1Data = $sRow1Data1 . $sRow1Data2;

    $sRow2Data1 = CHtml::tag('td', array('style' => 'text-align:right;width:25%;'), CHtml::label('ORGANIZACIONES:', 'ddlCompOrg-' . $data->id, array()), true);
    $sRow2Data2 = CHtml::tag('td', array(), $sResult_CompOrg, true);
    $sRow2Data = $sRow2Data1 . $sRow2Data2;

    $sRow3Data1 = CHtml::tag('td', array('style' => 'text-align:right;width:25%;'), CHtml::label('CAP. ESTRUCTURALES:', 'ddlCompCapEst-' . $data->id, array()), true);
    $sRow3Data2 = CHtml::tag('td', array(), $sResult_CompCapEst, true);
    $sRow3Data = $sRow3Data1 . $sRow3Data2;

    $sRow4Data1 = CHtml::tag('td', array('style' => 'text-align:right;width:25%;'), CHtml::label('CAP. HUMANOS:', 'ddlCompCapHum-' . $data->id, array()), true);
    $sRow4Data2 = CHtml::tag('td', array(), $sResult_CompCapHum, true);
    $sRow4Data = $sRow4Data1 . $sRow4Data2;

    $sRow5Data1 = CHtml::tag('td', array('style' => 'text-align:right;width:25%;'), CHtml::label('CAP. RELACIONALES:', 'ddlCompCapRel-' . $data->id, array()), true);
    $sRow5Data2 = CHtml::tag('td', array(), $sResult_CompCapRel, true);
    $sRow5Data = $sRow5Data1 . $sRow5Data2;

    $sRow1 = CHtml::tag('tr', array(), $sRow1Data, true);
    $sRow2 = CHtml::tag('tr', array(), $sRow2Data, true);
    $sRow3 = CHtml::tag('tr', array(), $sRow3Data, true);
    $sRow4 = CHtml::tag('tr', array(), $sRow4Data, true);
    $sRow5 = CHtml::tag('tr', array(), $sRow5Data, true);

    $sRows = $sRow1 . $sRow2 . $sRow3 . $sRow4 . $sRow5;

    $sTable = CHtml::tag('table', array(), $sRows, true);

    return $sTable;
}

$dataProvider = new CActiveDataProvider('Competencia');

echo CHtml::openTag('form');

$this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider' => $dataProvider,
    'ajaxUpdate' => false,
    'columns' => array(
        array(
            'name' => 'COMPETENCIAS',
            'value' => 'CHtml::link(
                            CHtml::encode($data->nombre),
                            array(\'Competencia/view\', \'id\'=>$data->id)
                        ).
                        CHtml::tag("br").
                        CHtml::link(
                            CHtml::encode("ver tripletas"),
                            "' . Yii::app()->createUrl('site/triplescompetencia/id/$data->id') . '",
                            array("id"=>"aid_fbajaxtriples","target"=>"_self")
                        ).
                        CHtml::tag("br").
                        CHtml::link(
                            CHtml::encode("ver grafo (sujeto)"),
                            "' . Yii::app()->createUrl('site/grafocompetenciasubject/id/$data->id') . '",
                            array("id"=>"aid_fbajaxtriples","target"=>"_self")
                        ).
                        CHtml::tag("br").
                        CHtml::link(
                            CHtml::encode("ver grafo (predicado)"),
                            "' . Yii::app()->createUrl('site/grafocompetenciapredicate/id/$data->id') . '",
                            array("id"=>"aid_fbajaxtriples","target"=>"_self")
                        ).
                        CHtml::tag("br").
                        CHtml::link(
                            CHtml::encode("ver grafo (objeto)"),
                            "' . Yii::app()->createUrl('site/grafocompetenciaobject/id/$data->id') . '",
                            array("id"=>"aid_fbajaxtriples","target"=>"_self")
                        )',
            'type' => 'raw',
        ),
        array(
            'name' => 'ENTIDADES',
            'header' => CHtml::link('ENTIDADES', array('site/page', 'view' => 'Entidades')),
            'type' => 'raw',
            'value' => 'getViewCompAll($data)'
        ),
    ),
));

echo CHtml::closeTag('form');

echo CHtml::openTag('div', array('id' => 'dHolderAJAX', 'class' => 'view'));
echo CHtml::closeTag('div');
?>
