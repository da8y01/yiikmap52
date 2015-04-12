<?php
$this->pageTitle=Yii::app()->name . ' - Documentación';
$this->breadcrumbs=array(
	'Documentación',
);
?>
<h1>DOCUMENTACIÓN</h1>

<div>
<?php
    $this->widget('zii.widgets.CMenu', array('items'=>array(
        array('label'=>'Documentación PHP de la aplicación, componentes y API', 'url'=>Yii::app()->baseUrl.'/documentacion/api/index.html', 'linkOptions'=>array('target'=>'_blank')),
        array('label'=>'Informe del desarrollo del proyecto (corregido)', 'items'=>array(
            array('label'=>'MS Word 2007+ (.docx)', 'url'=>Yii::app()->baseUrl.'/documentacion/TG_KMapKM_DanielBR_2012-12_CorreccionesActualizaciones_2013-06.docx', 'linkOptions'=>array('target'=>'_blank')),
            array('label'=>'Adobe PDF (.pdf)', 'url'=>Yii::app()->baseUrl.'/documentacion/TG_KMapKM_DanielBR_2012-12_CorreccionesActualizaciones_2013-06.pdf', 'linkOptions'=>array('target'=>'_blank')),
            array('label'=>'PDF Latex (.pdf)'),
            array('label'=>'DocBook', 'items'=>array(
                array('label'=>'Source (.xml)', 'url'=>Yii::app()->baseUrl.'/documentacion/kmap_informe_2012-12.xml', 'linkOptions'=>array('target'=>'_blank')),
                array('label'=>'PDF'),
                array('label'=>'HTML completo', 'url'=>Yii::app()->baseUrl.'/documentacion/kmap_informe_2012-12.html', 'linkOptions'=>array('target'=>'_blank')),
                array('label'=>'HTML en partes'),
            )),
        )),
        array('label'=>'Manuales', 'items'=>array(
            array('label'=>'Técnico', 'url'=>Yii::app()->baseUrl.'/documentacion/TG_KMapKM_DanielBR_2012-12_ManualTecnico_20130604-0048.pdf', 'linkOptions'=>array('target'=>'_blank')),
            array('label'=>'De Usuario', 'url'=>Yii::app()->baseUrl.'/documentacion/TG_KMapKM_DanielBR_2012-12_ManualUsuario_20130604-0055.pdf', 'linkOptions'=>array('target'=>'_blank')),
            array('label'=>'Videos', 'url'=>'http://www.youtube.com/playlist?list=PL4_mw0TVfo5j35evBY5BxFxRExcYn2P5F', 'linkOptions'=>array('target'=>'_blank')),
        )),
        array('label'=>'Presentación del proyecto', 'items'=>array(
            array('label'=>'MS PowerPoint 2007+ (.pptx)', 'url'=>Yii::app()->baseUrl.'/documentacion/TG_KMapKM_DanielBR_2012-12_Slides_2013-06.pptx', 'linkOptions'=>array('target'=>'_blank')),
            array('label'=>'Prezi (on-line)', 'url'=>'http://prezi.com/rvcaf3dwsega/ucaldas-kmap/?kw=view-rvcaf3dwsega&rc=ref-11577359', 'linkOptions'=>array('target'=>'_blank')),
            array('label'=>'Prezi (PDF)', 'url'=>Yii::app()->baseUrl.'/documentacion/TG_KMapKM_DanielBR_2012-12_Prezi.pdf', 'linkOptions'=>array('target'=>'_blank')),
            array('label'=>'Prezi (portable prezi)', 'url'=>Yii::app()->baseUrl.'/documentacion/ucaldas-kmap-rvcaf3dwsega.zip', 'linkOptions'=>array('target'=>'_blank')),
            array('label'=>'HTML5 Slides', 'url'=>Yii::app()->baseUrl.'/documentacion/io-2012-slides/template.html', 'linkOptions'=>array('target'=>'_blank')),
        )),
    ))
    );
?>
</div><!-- mainmenu -->
