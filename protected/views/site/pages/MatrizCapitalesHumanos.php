<?php
$this->pageTitle = Yii::app()->name . ' - Matriz-K (pivote Capital Humano)';
$this->breadcrumbs = array(
    'Matriz-K (pivote Capital Humano)',
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


<h1>Matriz-K (pivote Capital Humano)</h1>

<p>La Matriz-K pivoteada en el 'Capital Humano' presenta el conocimiento de la organizaci&oacute;n relacionado a los capitales humanos concernientes a la organizaci&oacute;n.</p>


<?php

function getViewCapHumAll($data) {
    $aCapitalHumanoProcesos = $data->getCapitalHumanoProcesos();

    $sIdField_CapHumProc = 'ddlCapHumProc-' . $data->id;

    $sResult_CapHumProc = CHtml::dropDownList($sIdField_CapHumProc, 'nombre', CHtml::encodeArray(
                            CHtml::listData($aCapitalHumanoProcesos, 'id', 'nombre', 'tiponombre')
                    ), array(
                'prompt' => 'Seleccionar...',
                'empty' => 'Sin elementos',
                'style' => 'width:50%',
                'ajax' => array(
                    'type' => 'POST',
                    'url' => Yii::app()->createUrl('site/dynamicproc/field/' . $sIdField_CapHumProc),
                    'update' => '#dHolderAJAX'
                )
                    )
    );


    $aCapitalHumanoOrganizaciones = $data->getCapitalHumanoOrganizaciones();

    $sIdField_CapHumOrg = 'ddlCapHumOrg-' . $data->id;

    $sResult_CapHumOrg = CHtml::dropDownList($sIdField_CapHumOrg, 'nombre', CHtml::encodeArray(
                            CHtml::listData($aCapitalHumanoOrganizaciones, 'id', 'nombre', 'sector.nombre')
                    ), array(
                'prompt' => 'Seleccionar...',
                'empty' => 'Sin elementos',
                'style' => 'width:50%',
                'ajax' => array(
                    'type' => 'POST',
                    'url' => Yii::app()->createUrl('site/dynamicorg/field/' . $sIdField_CapHumOrg),
                    'update' => '#dHolderAJAX'
                )
                    )
    );


    $aCapitalHumanoCompetencias = $data->getCapitalHumanoCompetencias();

    $sIdField_CapHumComp = 'ddlCapHumComp-' . $data->id;

    $sResult_CapHumComp = CHtml::dropDownList($sIdField_CapHumComp, 'nombre', CHtml::encodeArray(
                            CHtml::listData($aCapitalHumanoCompetencias, 'id', 'nombre', 'area.nombre')
                    ), array(
                'prompt' => 'Seleccionar...',
                'empty' => 'Sin elementos',
                'style' => 'width:50%',
                'ajax' => array(
                    'type' => 'POST',
                    'url' => Yii::app()->createUrl('site/dynamiccomp/field/' . $sIdField_CapHumComp),
                    'update' => '#dHolderAJAX'
                )
                    )
    );


    $aCapitalHumanoCapitalesEstructurales = $data->getCapitalHumanoCapitalesEstructurales();

    $sIdField_CapHumCapEst = 'ddlCapHumCapEst-' . $data->id;

    $sResult_CapHumCapEst = CHtml::dropDownList($sIdField_CapHumCapEst, 'nombre', CHtml::encodeArray(
                            CHtml::listData($aCapitalHumanoCapitalesEstructurales, 'id', 'nombre', 'tiponombre')
                    ), array(
                'prompt' => 'Seleccionar...',
                'empty' => 'Sin elementos',
                'style' => 'width:50%',
                'ajax' => array(
                    'type' => 'POST',
                    'url' => Yii::app()->createUrl('site/dynamiccapest/field/' . $sIdField_CapHumCapEst),
                    'update' => '#dHolderAJAX'
                )
                    )
    );


    $aCapitalHumanoCapitalesRelacionales = $data->getCapitalHumanoCapitalesRelacionales();

    $sIdField_CapHumCapRel = 'ddlCapHumCapRel-' . $data->id;

    $sResult_CapHumCapRel = CHtml::dropDownList($sIdField_CapHumCapRel, 'nombre', CHtml::encodeArray(
                            CHtml::listData($aCapitalHumanoCapitalesRelacionales, 'id', 'orgnombre', 'orgsector')
                    ), array(
                'prompt' => 'Seleccionar...',
                'empty' => 'Sin elementos',
                'style' => 'width:50%',
                'ajax' => array(
                    'type' => 'POST',
                    'url' => Yii::app()->createUrl('site/dynamiccaprel/field/' . $sIdField_CapHumCapRel),
                    'update' => '#dHolderAJAX'
                )
                    )
    );



    $sRow1Data1 = CHtml::tag('td', array('style' => 'text-align:right;width:25%;'), CHtml::label('PROCESOS:', 'ddlCapHumProc-' . $data->id, array()), true);
    $sRow1Data2 = CHtml::tag('td', array(), $sResult_CapHumProc, true);
    $sRow1Data = $sRow1Data1 . $sRow1Data2;

    $sRow2Data1 = CHtml::tag('td', array('style' => 'text-align:right;width:25%;'), CHtml::label('ORGANIZACIONES:', 'ddlCapHumOrg-' . $data->id, array()), true);
    $sRow2Data2 = CHtml::tag('td', array(), $sResult_CapHumOrg, true);
    $sRow2Data = $sRow2Data1 . $sRow2Data2;

    $sRow3Data1 = CHtml::tag('td', array('style' => 'text-align:right;width:25%;'), CHtml::label('COMPETENCIAS:', 'ddlCapHumComp-' . $data->id, array()), true);
    $sRow3Data2 = CHtml::tag('td', array(), $sResult_CapHumComp, true);
    $sRow3Data = $sRow3Data1 . $sRow3Data2;

    $sRow4Data1 = CHtml::tag('td', array('style' => 'text-align:right;width:25%;'), CHtml::label('CAP. ESTRUCTURALES:', 'ddlCapHumCapEst-' . $data->id, array()), true);
    $sRow4Data2 = CHtml::tag('td', array(), $sResult_CapHumCapEst, true);
    $sRow4Data = $sRow4Data1 . $sRow4Data2;

    $sRow5Data1 = CHtml::tag('td', array('style' => 'text-align:right;width:25%;'), CHtml::label('CAP. RELACIONALES:', 'ddlCapHumCapRel-' . $data->id, array()), true);
    $sRow5Data2 = CHtml::tag('td', array(), $sResult_CapHumCapRel, true);
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

$dataProvider = new CActiveDataProvider('CapitalHumano');

echo CHtml::openTag('form');

$this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider' => $dataProvider,
    'ajaxUpdate' => false,
    'columns' => array(
        array(
            'name' => 'CAPITALES HUMANOS',
            'value' => 'CHtml::link(
                            CHtml::encode($data->nombre),
                            array(\'CapitalHumano/view\', \'id\'=>$data->id)
                        ).
                        CHtml::tag("br").
                        CHtml::link(
                            CHtml::encode("ver tripletas"),
                            "' . Yii::app()->createUrl('site/triplescapitalhumano/id/$data->id') . '",
                            array("id"=>"aid_fbajaxtriples","target"=>"_self")
                        ).
                        CHtml::tag("br").
                        CHtml::link(
                            CHtml::encode("ver grafo (sujeto)"),
                            "' . Yii::app()->createUrl('site/grafocapitalhumanosubject/id/$data->id') . '",
                            array("id"=>"aid_fbajaxtriples","target"=>"_self")
                        ).
                        CHtml::tag("br").
                        CHtml::link(
                            CHtml::encode("ver grafo (predicado)"),
                            "' . Yii::app()->createUrl('site/grafocapitalhumanopredicate/id/$data->id') . '",
                            array("id"=>"aid_fbajaxtriples","target"=>"_self")
                        ).
                        CHtml::tag("br").
                        CHtml::link(
                            CHtml::encode("ver grafo (objeto)"),
                            "' . Yii::app()->createUrl('site/grafocapitalhumanoobject/id/$data->id') . '",
                            array("id"=>"aid_fbajaxtriples","target"=>"_self")
                        )',
            'type' => 'raw',
        ),
        array(
            'name' => 'ENTIDADES',
            'header' => CHtml::link('ENTIDADES', array('site/page', 'view' => 'Entidades')),
            'type' => 'raw',
            'value' => 'getViewCapHumAll($data)'
        ),
    ),
));

echo CHtml::closeTag('form');

echo CHtml::openTag('div', array('id' => 'dHolderAJAX', 'class' => 'view'));
echo CHtml::closeTag('div');
?>
