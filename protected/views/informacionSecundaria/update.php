<?php
$this->breadcrumbs=array(
	'Informaciones Secundarias'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar InformacionSecundaria', 'url'=>array('index')),
	array('label'=>'Crear InformacionSecundaria', 'url'=>array('create')),
	array('label'=>'Ver InformacionSecundaria', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gestionar InformacionSecundaria', 'url'=>array('admin')),
);
?>

<h1>Actualizar InformacionSecundaria <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>