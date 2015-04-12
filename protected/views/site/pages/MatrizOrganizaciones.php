<?php
$this->pageTitle = Yii::app()->name . ' - Matriz-K (pivote Organización)';
$this->breadcrumbs = array(
    'Matriz-K (pivote Organización)',
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


<h1>Matriz-K (pivote Organización)</h1>

<p>La Matriz-K pivoteada en la 'Organizaci&oacute;n' presenta el conocimiento de la organizaci&oacute;n relacionado a las organizaciones registradas.</p>


<?php

function getViewOrgAll($data) {
    $aOrganizacionProcesos = $data->getOrganizacionProcesos();

    $sIdField_OrgProc = 'ddlOrgProc-' . $data->id;

    $sResult_OrgProc = CHtml::dropDownList($sIdField_OrgProc, 'nombre', CHtml::encodeArray(
                            CHtml::listData($aOrganizacionProcesos, 'id', 'nombre', 'tiponombre')
                    ), array(
                'prompt' => 'Seleccionar...',
                'empty' => 'Sin elementos',
                'style' => 'width:50%',
                'ajax' => array(
                    'type' => 'POST',
                    'url' => Yii::app()->createUrl('site/dynamicproc/field/' . $sIdField_OrgProc),
                    'update' => '#dHolderAJAX'
                )
                    )
    );


    $aOrganizacionCompetencias = $data->getOrganizacionCompetencias();

    $sIdField_OrgComp = 'ddlOrgComp-' . $data->id;

    $sResult_OrgComp = CHtml::dropDownList($sIdField_OrgComp, 'nombre', CHtml::encodeArray(
                            CHtml::listData($aOrganizacionCompetencias, 'id', 'nombre', 'area.nombre')
                    ), array(
                'prompt' => 'Seleccionar...',
                'empty' => 'Sin elementos',
                'style' => 'width:50%',
                'ajax' => array(
                    'type' => 'POST',
                    'url' => Yii::app()->createUrl('site/dynamiccomp/field/' . $sIdField_OrgComp),
                    'update' => '#dHolderAJAX'
                )
                    )
    );


    $aOrganizacionCapitalesEstructurales = $data->getOrganizacionCapitalesEstructurales();

    $sIdField_OrgCapEst = 'ddlOrgCapEst-' . $data->id;

    $sResult_OrgCapEst = CHtml::dropDownList($sIdField_OrgCapEst, 'nombre', CHtml::encodeArray(
                            CHtml::listData($aOrganizacionCapitalesEstructurales, 'id', 'nombre', 'tiponombre')
                    ), array(
                'prompt' => 'Seleccionar...',
                'empty' => 'Sin elementos',
                'style' => 'width:50%',
                'ajax' => array(
                    'type' => 'POST',
                    'url' => Yii::app()->createUrl('site/dynamiccapest/field/' . $sIdField_OrgCapEst),
                    'update' => '#dHolderAJAX'
                )
                    )
    );


    $aOrganizacionCapitalesHumanos = $data->getOrganizacionCapitalesHumanos();

    $sIdField_OrgCapHum = 'ddlOrgCapHum-' . $data->id;

    $sResult_OrgCapHum = CHtml::dropDownList($sIdField_OrgCapHum, 'nombre', CHtml::encodeArray(
                            CHtml::listData($aOrganizacionCapitalesHumanos, 'id', 'nombre', 'tiponombre')
                    ), array(
                'prompt' => 'Seleccionar...',
                'empty' => 'Sin elementos',
                'style' => 'width:50%',
                'ajax' => array(
                    'type' => 'POST',
                    'url' => Yii::app()->createUrl('site/dynamiccaphum/field/' . $sIdField_OrgCapHum),
                    'update' => '#dHolderAJAX'
                )
                    )
    );


    $aOrganizacionCapitalesRelacionales = $data->getOrganizacionCapitalesRelacionales();

    $sIdField_OrgCapRel = 'ddlOrgCapRel-' . $data->id;

    $sResult_OrgCapRel = CHtml::dropDownList($sIdField_OrgCapRel, 'nombre', CHtml::encodeArray(
                            CHtml::listData($aOrganizacionCapitalesRelacionales, 'id', 'orgnombre', 'orgsector')
                    ), array(
                'prompt' => 'Seleccionar...',
                'empty' => 'Sin elementos',
                'style' => 'width:50%',
                'ajax' => array(
                    'type' => 'POST',
                    'url' => Yii::app()->createUrl('site/dynamiccaprel/field/' . $sIdField_OrgCapRel),
                    'update' => '#dHolderAJAX'
                )
                    )
    );



    $sRow1Data1 = CHtml::tag('td', array('style' => 'text-align:right;width:25%;'), CHtml::label('PROCESOS:', 'ddlOrgProc-' . $data->id, array()), true);
    $sRow1Data2 = CHtml::tag('td', array(), $sResult_OrgProc, true);
    $sRow1Data = $sRow1Data1 . $sRow1Data2;

    $sRow2Data1 = CHtml::tag('td', array('style' => 'text-align:right;width:25%;'), CHtml::label('COMPETENCIAS:', 'ddlOrgComp-' . $data->id, array()), true);
    $sRow2Data2 = CHtml::tag('td', array(), $sResult_OrgComp, true);
    $sRow2Data = $sRow2Data1 . $sRow2Data2;

    $sRow3Data1 = CHtml::tag('td', array('style' => 'text-align:right;width:25%;'), CHtml::label('CAP. ESTRUCTURALES:', 'ddlOrgCapEst-' . $data->id, array()), true);
    $sRow3Data2 = CHtml::tag('td', array(), $sResult_OrgCapEst, true);
    $sRow3Data = $sRow3Data1 . $sRow3Data2;

    $sRow4Data1 = CHtml::tag('td', array('style' => 'text-align:right;width:25%;'), CHtml::label('CAP. HUMANOS:', 'ddlOrgCapHum-' . $data->id, array()), true);
    $sRow4Data2 = CHtml::tag('td', array(), $sResult_OrgCapHum, true);
    $sRow4Data = $sRow4Data1 . $sRow4Data2;

    $sRow5Data1 = CHtml::tag('td', array('style' => 'text-align:right;width:25%;'), CHtml::label('CAP. RELACIONALES:', 'ddlOrgCapRel-' . $data->id, array()), true);
    $sRow5Data2 = CHtml::tag('td', array(), $sResult_OrgCapRel, true);
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

$dataProvider = new CActiveDataProvider('Organizacion');

echo CHtml::openTag('form');

$this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider' => $dataProvider,
    'ajaxUpdate' => false,
    'columns' => array(
        array(
            'name' => 'ORGANIZACIONES',
            'value' => 'CHtml::link(
                            CHtml::encode($data->nombre),
                            array(\'Organizacion/view\', \'id\'=>$data->id)
                        ).
                        CHtml::tag("br").
                        CHtml::link(
                            CHtml::encode("ver tripletas"),
                            "' . Yii::app()->createUrl('site/triplesorganizacion/id/$data->id') . '",
                            array("id"=>"aid_fbajaxtriples","target"=>"_self")
                        ).
                        CHtml::tag("br").
                        CHtml::link(
                            CHtml::encode("ver grafo (sujeto)"),
                            "' . Yii::app()->createUrl('site/grafoorganizacionsubject/id/$data->id') . '",
                            array("id"=>"aid_fbajaxtriples","target"=>"_self")
                        ).
                        CHtml::tag("br").
                        CHtml::link(
                            CHtml::encode("ver grafo (predicado)"),
                            "' . Yii::app()->createUrl('site/grafoorganizacionpredicate/id/$data->id') . '",
                            array("id"=>"aid_fbajaxtriples","target"=>"_self")
                        ).
                        CHtml::tag("br").
                        CHtml::link(
                            CHtml::encode("ver grafo (objeto)"),
                            "' . Yii::app()->createUrl('site/grafoorganizacionobject/id/$data->id') . '",
                            array("id"=>"aid_fbajaxtriples","target"=>"_self")
                        )',
            'type' => 'raw',
        ),
        array(
            'name' => 'ENTIDADES',
            'header' => CHtml::link('ENTIDADES', array('site/page', 'view' => 'Entidades')),
            'type' => 'raw',
            'value' => 'getViewOrgAll($data)',
        ),
    ),
));

echo CHtml::closeTag('form');

echo CHtml::openTag('div', array('id' => 'dHolderAJAX', 'class' => 'view'));
echo CHtml::closeTag('div');
?>
