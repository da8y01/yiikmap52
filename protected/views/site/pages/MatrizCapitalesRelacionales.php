<?php
$this->pageTitle = Yii::app()->name . ' - Matriz-K (pivote Capital Relacional)';
$this->breadcrumbs = array(
    'Matriz-K (pivote Capital Relacional)',
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


<h1>Matriz-K (pivote Capital Relacional)</h1>

<p>La Matriz-K pivoteada en el 'Capital Relacional' presenta el conocimiento de la organizaci&oacute;n relacionado a los capitales relacionales concernientes a la organizaci&oacute;n.</p>


<?php

function getViewCapRelAll($data) {
    $aCapitalRelacionalProcesos = $data->getCapitalRelacionalProcesos();

    $sIdField_CapRelProc = 'ddlCapRelProc-' . $data->id;

    $sResult_CapRelProc = CHtml::dropDownList($sIdField_CapRelProc, 'nombre', CHtml::encodeArray(
                            CHtml::listData($aCapitalRelacionalProcesos, 'id', 'nombre', 'tiponombre')
                    ), array(
                'prompt' => 'Seleccionar...',
                'empty' => 'Sin elementos',
                'style' => 'width:50%',
                'ajax' => array(
                    'type' => 'POST',
                    'url' => Yii::app()->createUrl('site/dynamicproc/field/' . $sIdField_CapRelProc),
                    'update' => '#dHolderAJAX'
                )
                    )
    );


    $aCapitalRelacionalOrganizaciones = $data->getCapitalRelacionalOrganizaciones();

    $sIdField_CapRelOrg = 'ddlCapRelOrg-' . $data->id;

    $sResult_CapRelOrg = CHtml::dropDownList($sIdField_CapRelOrg, 'nombre', CHtml::encodeArray(
                            CHtml::listData($aCapitalRelacionalOrganizaciones, 'id', 'nombre', 'sector.nombre')
                    ), array(
                'prompt' => 'Seleccionar...',
                'empty' => 'Sin elementos',
                'style' => 'width:50%',
                'ajax' => array(
                    'type' => 'POST',
                    'url' => Yii::app()->createUrl('site/dynamicorg/field/' . $sIdField_CapRelOrg),
                    'update' => '#dHolderAJAX'
                )
                    )
    );


    $aCapitalRelacionalCompetencias = $data->getCapitalRelacionalCompetencias();

    $sIdField_CapRelComp = 'ddlCapRelComp-' . $data->id;

    $sResult_CapRelComp = CHtml::dropDownList($sIdField_CapRelComp, 'nombre', CHtml::encodeArray(
                            CHtml::listData($aCapitalRelacionalCompetencias, 'id', 'nombre', 'area.nombre')
                    ), array(
                'prompt' => 'Seleccionar...',
                'empty' => 'Sin elementos',
                'style' => 'width:50%',
                'ajax' => array(
                    'type' => 'POST',
                    'url' => Yii::app()->createUrl('site/dynamiccomp/field/' . $sIdField_CapRelComp),
                    'update' => '#dHolderAJAX'
                )
                    )
    );


    $aCapitalRelacionalCapitalesEstructurales = $data->getCapitalRelacionalCapitalesEstructurales();

    $sIdField_CapRelCapEst = 'ddlCapRelCapEst-' . $data->id;

    $sResult_CapRelCapEst = CHtml::dropDownList($sIdField_CapRelCapEst, 'nombre', CHtml::encodeArray(
                            CHtml::listData($aCapitalRelacionalCapitalesEstructurales, 'id', 'nombre', 'tiponombre')
                    ), array(
                'prompt' => 'Seleccionar...',
                'empty' => 'Sin elementos',
                'style' => 'width:50%',
                'ajax' => array(
                    'type' => 'POST',
                    'url' => Yii::app()->createUrl('site/dynamiccapest/field/' . $sIdField_CapRelCapEst),
                    'update' => '#dHolderAJAX'
                )
                    )
    );


    $aCapitalRelacionalCapitalesHumanos = $data->getCapitalRelacionalCapitalesHumanos();

    $sIdField_CapEstCapHum = 'ddlCapEstCapHum-' . $data->id;

    $sResult_CapEstCapHum = CHtml::dropDownList($sIdField_CapEstCapHum, 'nombre', CHtml::encodeArray(
                            CHtml::listData($aCapitalRelacionalCapitalesHumanos, 'id', 'nombre', 'tiponombre')
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



    $sRow1Data1 = CHtml::tag('td', array('style' => 'text-align:right;width:25%;'), CHtml::label('PROCESOS:', 'ddlCapRelProc-' . $data->id, array()), true);
    $sRow1Data2 = CHtml::tag('td', array(), $sResult_CapRelProc, true);
    $sRow1Data = $sRow1Data1 . $sRow1Data2;

    $sRow2Data1 = CHtml::tag('td', array('style' => 'text-align:right;width:25%;'), CHtml::label('ORGANIZACIONES:', 'ddlCapRelOrg-' . $data->id, array()), true);
    $sRow2Data2 = CHtml::tag('td', array(), $sResult_CapRelOrg, true);
    $sRow2Data = $sRow2Data1 . $sRow2Data2;

    $sRow3Data1 = CHtml::tag('td', array('style' => 'text-align:right;width:25%;'), CHtml::label('COMPETENCIAS:', 'ddlCapRelComp-' . $data->id, array()), true);
    $sRow3Data2 = CHtml::tag('td', array(), $sResult_CapRelComp, true);
    $sRow3Data = $sRow3Data1 . $sRow3Data2;

    $sRow4Data1 = CHtml::tag('td', array('style' => 'text-align:right;width:25%;'), CHtml::label('CAP. ESTRUCTURALES:', 'ddlCapRelCapEst-' . $data->id, array()), true);
    $sRow4Data2 = CHtml::tag('td', array(), $sResult_CapRelCapEst, true);
    $sRow4Data = $sRow4Data1 . $sRow4Data2;

    $sRow5Data1 = CHtml::tag('td', array('style' => 'text-align:right;width:25%;'), CHtml::label('CAP. HUMANOS:', 'ddlCapRelCapHum-' . $data->id, array()), true);
    $sRow5Data2 = CHtml::tag('td', array(), $sResult_CapEstCapHum, true);
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

$dataProvider = new CActiveDataProvider('CapitalRelacional');

echo CHtml::openTag('form');

$this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider' => $dataProvider,
    'ajaxUpdate' => false,
    'columns' => array(
        array(
            'name' => 'CAPITALES RELACIONALES',
            'value' => 'CHtml::link(
                            CHtml::encode($data->getOrgNombre()),
                            array(\'CapitalRelacional/view\', \'id\'=>$data->id)
                        ).
                        CHtml::tag("br").
                        CHtml::link(
                            CHtml::encode("ver tripletas"),
                            "' . Yii::app()->createUrl('site/triplescapitalrelacional/id/$data->id') . '",
                            array("id"=>"aid_fbajaxtriples","target"=>"_self")
                        ).
                        CHtml::tag("br").
                        CHtml::link(
                            CHtml::encode("ver grafo (sujeto)"),
                            "' . Yii::app()->createUrl('site/grafocapitalrelacionalsubject/id/$data->id') . '",
                            array("id"=>"aid_fbajaxtriples","target"=>"_self")
                        ).
                        CHtml::tag("br").
                        CHtml::link(
                            CHtml::encode("ver grafo (predicado)"),
                            "' . Yii::app()->createUrl('site/grafocapitalrelacionalpredicate/id/$data->id') . '",
                            array("id"=>"aid_fbajaxtriples","target"=>"_self")
                        ).
                        CHtml::tag("br").
                        CHtml::link(
                            CHtml::encode("ver grafo (objeto)"),
                            "' . Yii::app()->createUrl('site/grafocapitalrelacionalobject/id/$data->id') . '",
                            array("id"=>"aid_fbajaxtriples","target"=>"_self")
                        )',
            'type' => 'raw',
        ),
        array(
            'name' => 'ENTIDADES',
            'header' => CHtml::link('ENTIDADES', array('site/page', 'view' => 'Entidades')),
            'type' => 'raw',
            'value' => 'getViewCapRelAll($data)'
        ),
    ),
));

echo CHtml::closeTag('form');

echo CHtml::openTag('div', array('id' => 'dHolderAJAX', 'class' => 'view'));
echo CHtml::closeTag('div');
?>
