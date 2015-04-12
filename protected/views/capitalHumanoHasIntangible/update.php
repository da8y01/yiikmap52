<?php
$this->breadcrumbs=array(
	'Capitales Humanos tienen Intangibles'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Capital Humano tiene Intangible', 'url'=>array('index')),
	array('label'=>'Crear Capital Humano tiene Intangible', 'url'=>array('create')),
	array('label'=>'Ver Capital Humano tiene Intangible', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gestionar Capital Humano tiene Intangible', 'url'=>array('admin')),
);
?>

<h1>Actualizar CapitalHumanoHasIntangible <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>