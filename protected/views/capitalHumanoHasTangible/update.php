<?php
$this->breadcrumbs=array(
	'Capitales Humanos tienen Tangibles'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Capital Humano tiene Tangible', 'url'=>array('index')),
	array('label'=>'Crear Capital Humano tiene Tangible', 'url'=>array('create')),
	array('label'=>'Ver Capital Humano tiene Tangible', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gestionar Capital Humano tiene Tangible', 'url'=>array('admin')),
);
?>

<h1>Actualizar CapitalHumanoHasTangible <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>