<?php
$this->pageTitle = Yii::app()->name . ' - Matriz-K (pivote Capital Estructural)';
$this->breadcrumbs = array(
    'Matriz-K (pivote Capital Estructural)',
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


<h1>Matriz-K (pivote Capital Estructural)</h1>

<p>La Matriz-K pivoteada en la 'Capital Estructural' presenta el conocimiento de la organizaci&oacute;n relacionado a los capitales estructurales concernientes a la organizaci&oacute;n.</p>


<?php

function getViewCapEstAll($data) {
    $aCapitalEstructuralProcesos = $data->getCapitalEstructuralProcesos();

    $sIdField_CapEstProc = 'ddlCapEstProc-' . $data->id;

    $sResult_CapEstProc = CHtml::dropDownList($sIdField_CapEstProc, 'nombre', CHtml::encodeArray(
                            CHtml::listData($aCapitalEstructuralProcesos, 'id', 'nombre', 'tiponombre')
                    ), array(
                'prompt' => 'Seleccionar...',
                'empty' => 'Sin elementos',
                'style' => 'width:50%',
                'ajax' => array(
                    'type' => 'POST',
                    'url' => Yii::app()->createUrl('site/dynamicproc/field/' . $sIdField_CapEstProc),
                    'update' => '#dHolderAJAX'
                )
                    )
    );


    $aCapitalEstructuralOrganizaciones = $data->getCapitalEstructuralOrganizaciones();

    $sIdField_CapEstOrg = 'ddlCapEstOrg-' . $data->id;

    $sResult_CapEstOrg = CHtml::dropDownList($sIdField_CapEstOrg, 'nombre', CHtml::encodeArray(
                            CHtml::listData($aCapitalEstructuralOrganizaciones, 'id', 'nombre', 'sector.nombre')
                    ), array(
                'prompt' => 'Seleccionar...',
                'empty' => 'Sin elementos',
                'style' => 'width:50%',
                'ajax' => array(
                    'type' => 'POST',
                    'url' => Yii::app()->createUrl('site/dynamicorg/field/' . $sIdField_CapEstOrg),
                    'update' => '#dHolderAJAX'
                )
                    )
    );


    $aCapitalEstructuralCompetencias = $data->getCapitalEstructuralCompetencias();

    $sIdField_CapEstComp = 'ddlCapEstComp-' . $data->id;

    $sResult_CapEstComp = CHtml::dropDownList($sIdField_CapEstComp, 'nombre', CHtml::encodeArray(
                            CHtml::listData($aCapitalEstructuralCompetencias, 'id', 'nombre', 'area.nombre')
                    ), array(
                'prompt' => 'Seleccionar...',
                'empty' => 'Sin elementos',
                'style' => 'width:50%',
                'ajax' => array(
                    'type' => 'POST',
                    'url' => Yii::app()->createUrl('site/dynamiccomp/field/' . $sIdField_CapEstComp),
                    'update' => '#dHolderAJAX'
                )
                    )
    );


    $aCapitalEstructuralCapitalesHumanos = $data->getCapitalEstructuralCapitalesHumanos();

    $sIdField_CapEstCapHum = 'ddlCapEstCapHum-' . $data->id;

    $sResult_CapEstCapHum = CHtml::dropDownList($sIdField_CapEstCapHum, 'nombre', CHtml::encodeArray(
                            CHtml::listData($aCapitalEstructuralCapitalesHumanos, 'id', 'nombre', 'tiponombre')
                    ), array(
                'prompt' => 'Seleccionar...',
                'empty' => 'Sin elementos',
                'style' => 'width:50%',
                'ajax' => array(
                    'type' => 'POST',
                    'url' => Yii::app()->createUrl('site/dynamiccaphum/field/' . $sIdField_CapEstCapHum),
                    'update' => '#dHolderAJAX'
                )
                    )
    );


    $aCapitalEstructuralCapitalesRelacionales = $data->getCapitalEstructuralCapitalesRelacionales();

    $sIdField_CapEstCapRel = 'ddlCapEstCapRel-' . $data->id;

    $sResult_CapEstCapRel = CHtml::dropDownList($sIdField_CapEstCapRel, 'nombre', CHtml::encodeArray(
                            CHtml::listData($aCapitalEstructuralCapitalesRelacionales, 'id', 'orgnombre', 'orgsector')
                    ), array(
                'prompt' => 'Seleccionar...',
                'empty' => 'Sin elementos',
                'style' => 'width:50%',
                'ajax' => array(
                    'type' => 'POST',
                    'url' => Yii::app()->createUrl('site/dynamiccaprel/field/' . $sIdField_CapEstCapRel),
                    'update' => '#dHolderAJAX'
                )
                    )
    );



    $sRow1Data1 = CHtml::tag('td', array('style' => 'text-align:right;width:25%;'), CHtml::label('PROCESOS:', 'ddlCapEstProc-' . $data->id, array()), true);
    $sRow1Data2 = CHtml::tag('td', array(), $sResult_CapEstProc, true);
    $sRow1Data = $sRow1Data1 . $sRow1Data2;

    $sRow2Data1 = CHtml::tag('td', array('style' => 'text-align:right;width:25%;'), CHtml::label('ORGANIZACIONES:', 'ddlCapEstOrg-' . $data->id, array()), true);
    $sRow2Data2 = CHtml::tag('td', array(), $sResult_CapEstOrg, true);
    $sRow2Data = $sRow2Data1 . $sRow2Data2;

    $sRow3Data1 = CHtml::tag('td', array('style' => 'text-align:right;width:25%;'), CHtml::label('COMPETENCIAS:', 'ddlCapEstComp-' . $data->id, array()), true);
    $sRow3Data2 = CHtml::tag('td', array(), $sResult_CapEstComp, true);
    $sRow3Data = $sRow3Data1 . $sRow3Data2;

    $sRow4Data1 = CHtml::tag('td', array('style' => 'text-align:right;width:25%;'), CHtml::label('CAP. HUMANOS:', 'ddlCapEstCapHum-' . $data->id, array()), true);
    $sRow4Data2 = CHtml::tag('td', array(), $sResult_CapEstCapHum, true);
    $sRow4Data = $sRow4Data1 . $sRow4Data2;

    $sRow5Data1 = CHtml::tag('td', array('style' => 'text-align:right;width:25%;'), CHtml::label('CAP. RELACIONALES:', 'ddlCapEstCapRel-' . $data->id, array()), true);
    $sRow5Data2 = CHtml::tag('td', array(), $sResult_CapEstCapRel, true);
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

$dataProvider = new CActiveDataProvider('CapitalEstructural');

echo CHtml::openTag('form');

$this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider' => $dataProvider,
    'ajaxUpdate' => false,
    'columns' => array(
        array(
            'name' => 'CAPITALES ESTRUCTURALES',
            'value' => 'CHtml::link(
                            CHtml::encode($data->nombre),
                            array(\'CapitalEstructural/view\', \'id\'=>$data->id)
                        ).
                        CHtml::tag("br").
                        CHtml::link(
                            CHtml::encode("ver tripletas"),
                            "' . Yii::app()->createUrl('site/triplescapitalestructural/id/$data->id') . '",
                            array("id"=>"aid_fbajaxtriples","target"=>"_self")
                        ).
                        CHtml::tag("br").
                        CHtml::link(
                            CHtml::encode("ver grafo (sujeto)"),
                            "' . Yii::app()->createUrl('site/grafocapitalestructuralsubject/id/$data->id') . '",
                            array("id"=>"aid_fbajaxtriples","target"=>"_self")
                        ).
                        CHtml::tag("br").
                        CHtml::link(
                            CHtml::encode("ver grafo (predicado)"),
                            "' . Yii::app()->createUrl('site/grafocapitalestructuralpredicate/id/$data->id') . '",
                            array("id"=>"aid_fbajaxtriples","target"=>"_self")
                        ).
                        CHtml::tag("br").
                        CHtml::link(
                            CHtml::encode("ver grafo (objeto)"),
                            "' . Yii::app()->createUrl('site/grafocapitalestructuralobject/id/$data->id') . '",
                            array("id"=>"aid_fbajaxtriples","target"=>"_self")
                        )',
            'type' => 'raw',
        ),
        array(
            'name' => 'ENTIDADES',
            'header' => CHtml::link('ENTIDADES', array('site/page', 'view' => 'Entidades')),
            'type' => 'raw',
            'value' => 'getViewCapEstAll($data)'
        ),
    ),
));

echo CHtml::closeTag('form');

echo CHtml::openTag('div', array('id' => 'dHolderAJAX', 'class' => 'view'));
echo CHtml::closeTag('div');
?>
