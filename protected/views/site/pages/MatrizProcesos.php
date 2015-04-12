<?php
$this->pageTitle = Yii::app()->name . ' - Matriz-K (pivote Proceso)';

$this->breadcrumbs = array(
    'Matriz-K (pivote Proceso)',
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


<h1>Matriz-K (pivote Proceso)</h1>

<p>La Matriz-K pivoteada en el 'Proceso' presenta el conocimiento de la organizaci&oacute;n relacionado a los procesos organizacionales.</p>

<?php

function getViewProcAll($data) {
    $aProcesoOrganizaciones = $data->getProcesoOrganizaciones();

    $sIdField_ProcOrg = 'ddlProcOrg-' . $data->id;

    $sResult_ProcOrg = CHtml::dropDownList($sIdField_ProcOrg, 'nombre', CHtml::encodeArray(
                            CHtml::listData($aProcesoOrganizaciones, 'id', 'nombre', 'sector.nombre')
                    ), array(
                'prompt' => 'Seleccionar...',
                'empty' => 'Sin elementos',
                'style' => 'width:50%',
                'ajax' => array(
                    'type' => 'POST',
                    'url' => Yii::app()->createUrl('site/dynamicorg/field/' . $sIdField_ProcOrg),
                    'update' => '#dHolderAJAX'
                )
                    )
    );


    $aProcesoCompetencias = $data->getProcesoCompetencias();

    $sIdField_ProcComp = 'ddlProcComp-' . $data->id;

    $sResult_ProcComp = CHtml::dropDownList($sIdField_ProcComp, 'nombre', CHtml::encodeArray(
                            CHtml::listData($aProcesoCompetencias, 'id', 'nombre', 'area.nombre')
                    ), array(
                'prompt' => 'Seleccionar...',
                'empty' => 'Sin elementos',
                'style' => 'width:50%',
                'ajax' => array(
                    'type' => 'POST',
                    'url' => Yii::app()->createUrl('site/dynamiccomp/field/' . $sIdField_ProcComp),
                    'update' => '#dHolderAJAX'
                )
                    )
    );


    $aProcesoCapitalesEstructurales = $data->getProcesoCapitalesEstructurales();

    $sIdField_ProcCapEst = 'ddlProcCapEst-' . $data->id;

    $sResult_ProcCapEst = CHtml::dropDownList($sIdField_ProcCapEst, 'nombre', CHtml::encodeArray(
                            CHtml::listData($aProcesoCapitalesEstructurales, 'id', 'nombre', 'tiponombre')
                    ), array(
                'prompt' => 'Seleccionar...',
                'empty' => 'Sin elementos',
                'style' => 'width:50%',
                'ajax' => array(
                    'type' => 'POST',
                    'url' => Yii::app()->createUrl('site/dynamiccapest/field/' . $sIdField_ProcCapEst),
                    'update' => '#dHolderAJAX'
                )
                    )
    );


    $aProcesoCapitalesHumanos = $data->getProcesoCapitalesHumanos();

    $sIdField_ProcCapHum = 'ddlProcCapHum-' . $data->id;

    $sResult_ProcCapHum = CHtml::dropDownList($sIdField_ProcCapHum, 'nombre', CHtml::encodeArray(
                            CHtml::listData($aProcesoCapitalesHumanos, 'id', 'nombre', 'tiponombre')
                    ), array(
                'prompt' => 'Seleccionar...',
                'empty' => 'Sin elementos',
                'style' => 'width:50%',
                'ajax' => array(
                    'type' => 'POST',
                    'url' => Yii::app()->createUrl('site/dynamiccaphum/field/' . $sIdField_ProcCapHum),
                    'update' => '#dHolderAJAX'
                )
                    )
    );


    $aProcesoCapitalesRelacionales = $data->getProcesoCapitalesRelacionales();

    $sIdField_ProcCapRel = 'ddlProcCapRel-' . $data->id;

    $sResult_ProcCapRel = CHtml::dropDownList($sIdField_ProcCapRel, 'nombre', CHtml::encodeArray(
                            CHtml::listData($aProcesoCapitalesRelacionales, 'id', 'orgnombre', 'orgsector')
                    ), array(
                'prompt' => 'Seleccionar...',
                'empty' => 'Sin elementos',
                'style' => 'width:50%',
                'ajax' => array(
                    'type' => 'POST',
                    'url' => Yii::app()->createUrl('site/dynamiccaprel/field/' . $sIdField_ProcCapRel),
                    'update' => '#dHolderAJAX'
                )
                    )
    );



    $sRow1Data1 = CHtml::tag('td', array('style' => 'text-align:right;width:25%;'), CHtml::label('ORGANIZACIONES:', 'ddlProcOrg-' . $data->id, array()), true);
    $sRow1Data2 = CHtml::tag('td', array(), $sResult_ProcOrg, true);
    $sRow1Data = $sRow1Data1 . $sRow1Data2;

    $sRow2Data1 = CHtml::tag('td', array('style' => 'text-align:right;width:25%;'), CHtml::label('COMPETENCIAS:', 'ddlProcComp-' . $data->id, array()), true);
    $sRow2Data2 = CHtml::tag('td', array(), $sResult_ProcComp, true);
    $sRow2Data = $sRow2Data1 . $sRow2Data2;

    $sRow3Data1 = CHtml::tag('td', array('style' => 'text-align:right;width:25%;'), CHtml::label('CAP. ESTRUCTURALES:', 'ddlProcCapEst-' . $data->id, array()), true);
    $sRow3Data2 = CHtml::tag('td', array(), $sResult_ProcCapEst, true);
    $sRow3Data = $sRow3Data1 . $sRow3Data2;

    $sRow4Data1 = CHtml::tag('td', array('style' => 'text-align:right;width:25%;'), CHtml::label('CAP. HUMANOS:', 'ddlProcCapHum-' . $data->id, array()), true);
    $sRow4Data2 = CHtml::tag('td', array(), $sResult_ProcCapHum, true);
    $sRow4Data = $sRow4Data1 . $sRow4Data2;

    $sRow5Data1 = CHtml::tag('td', array('style' => 'text-align:right;width:25%;'), CHtml::label('CAP. RELACIONALES:', 'ddlProcCapRel-' . $data->id, array()), true);
    $sRow5Data2 = CHtml::tag('td', array(), $sResult_ProcCapRel, true);
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

$dataProvider = new CActiveDataProvider('Proceso');

echo CHtml::openTag('form');

$this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider' => $dataProvider,
    'ajaxUpdate' => false,
    'columns' => array(
        array(
            'name' => 'PROCESOS',
            'value' => 'CHtml::link(
                            CHtml::encode($data->nombre),
                            array(\'Proceso/view\', \'id\'=>$data->id)
                        ).
                        CHtml::tag("br").
                        CHtml::link(
                            CHtml::encode("ver tripletas"),
                            "' . Yii::app()->createUrl('site/triplesproceso/id/$data->id') . '",
                            array("id"=>"aid_fbajaxtriples","target"=>"_self")
                        ).
                        CHtml::tag("br").
                        CHtml::link(
                            CHtml::encode("ver grafo (sujeto)"),
                            "' . Yii::app()->createUrl('site/grafoprocesosubject/id/$data->id') . '",
                            array("id"=>"aid_fbajaxtriples","target"=>"_self")
                        ).
                        CHtml::tag("br").
                        CHtml::link(
                            CHtml::encode("ver grafo (predicado)"),
                            "' . Yii::app()->createUrl('site/grafoprocesopredicate/id/$data->id') . '",
                            array("id"=>"aid_fbajaxtriples","target"=>"_self")
                        ).
                        CHtml::tag("br").
                        CHtml::link(
                            CHtml::encode("ver grafo (objeto)"),
                            "' . Yii::app()->createUrl('site/grafoprocesoobject/id/$data->id') . '",
                            array("id"=>"aid_fbajaxtriples","target"=>"_self")
                        )',
            'type' => 'raw',
        ),
        array(
            'name' => 'ENTIDADES',
            'header' => CHtml::link('ENTIDADES', array('site/page', 'view' => 'Entidades')),
            'type' => 'raw',
            'value' => 'getViewProcAll($data)'
        ),
    ),
));

echo CHtml::closeTag('form');


echo CHtml::openTag('div', array('id' => 'dHolderAJAX', 'class' => 'view'));
echo CHtml::closeTag('div');
?>
