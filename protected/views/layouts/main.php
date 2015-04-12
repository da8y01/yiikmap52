<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
            <div id="logo"><?php echo CHtml::imageButton(Yii::app()->request->baseUrl.'/images/udcheader.jpg', array('width'=>'100%', 'heigth'=>'100%', 'onclick'=>'window.open(\'http://www.ucaldas.edu.co/\'), target="_blank"')); ?><p style="position: absolute; top: 90px; left: 450px"><?php echo CHtml::encode(Yii::app()->name) ?></p><?php /*echo CHtml::encode(Yii::app()->name);*/ ?></div>
	</div><!-- header -->

	<!-- <div id="mainmenu"> -->
        <div id="mainMbMenu">
		<?php $this->widget('application.extensions.mbmenu.MbMenu', array(
                       'items' => array(
                           array('label' => 'Inicio', 'url' => array('site/index')),
                           array('label' => 'Procesos', 'url' => array('site/page', 'view' => 'MatrizProcesos'),
                               'items' => array(
                                   array('label' => 'Gestionar', 'url' => array('/Proceso')),
                                   array('label' => 'asociar Cap. Estructural', 'url' => array('/ProcesoHasCapitalEstructural')),
                                   array('label' => 'asociar Cap. Humano', 'url' => array('/ProcesoHasCapitalHumano')),
                                   array('label' => 'asociar Cap. Relacional', 'url' => array('/ProcesoHasCapitalRelacional')),
                               ),
                           ),
                           array('label' => 'Organizaciones', 'url' => array('site/page', 'view' => 'MatrizOrganizaciones'),
                               'items' => array(
                                   array('label' => 'Gestionar', 'url' => array('/Organizacion')),
                                   array('label' => 'asociar Competencia', 'url' => array('/OrganizacionHasCompetencia')),
                                   array('label' => 'asociar Capital', 'url' => array('/OrganizacionHasCapital')),
                               ),
                           ),
                           array('label' => 'Competencias', 'url' => array('site/page', 'view' => 'MatrizCompetencias'),
                               'items' => array(
                                   array('label' => 'Gestionar', 'url' => array('/Competencia')),
                                   array('label' => 'asociar Cap. Humano', 'url' => array('/CompetenciaHasCapitalHumano')),
                               ),
                           ),
                           array('label' => 'Cap. Estructurales', 'url' => array('site/page', 'view' => 'MatrizCapitalesEstructurales'),
                               'items' => array(
                                   array('label' => 'Gestionar', 'url' => array('/CapitalEstructural')),
                               ),
                           ),
                           array('label' => 'Cap. Humanos', 'url' => array('site/page', 'view' => 'MatrizCapitalesHumanos'),
                               'items' => array(
                                   array('label' => 'Gestionar', 'url' => array('/CapitalHumano')),
                                   array('label' => 'asociar Tangible', 'url' => array('/CapitalHumanoHasTangible')),
                                   array('label' => 'asociar Intangible', 'url' => array('/CapitalHumanoHasIntangible')),
                               ),
                           ),
                           array('label' => 'Cap. Relacionales', 'url' => array('site/page', 'view' => 'MatrizCapitalesRelacionales'),
                               'items' => array(
                                   array('label' => 'Gestionar', 'url' => array('/CapitalRelacional')),
                               ),
                           ),
                           array('label'=>'Entrar', 'url'=>array('site/login'), 'visible'=>Yii::app()->user->isGuest),
                           array('label'=>'Salir ('.Yii::app()->user->name.')', 'url'=>array('site/logout'), 'visible'=>!Yii::app()->user->isGuest),
                           array('label'=>'Entidades', 'url'=>array('site/page', 'view'=>'Entidades')),
                           array('label'=>'Utilidades', 'url'=>array('site/page', 'view'=>'Utilidades')),
                           array('label'=>'Documentación', 'url'=>array('site/page', 'view'=>'Documentacion')),
                           array('label'=>'Enlaces', 'url'=>array('site/page', 'view'=>'Enlaces')),
                       ),
                   ));
                
                ?>
	</div><!-- mainmenu -->

	<?php $this->widget('zii.widgets.CBreadcrumbs', array(
		'links'=>$this->breadcrumbs,
	)); ?><!-- breadcrumbs -->

	<?php echo $content; ?>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> por Universidad de Caldas.<br/>
		Todos los derechos reservados.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
