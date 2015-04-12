<?php
$this->breadcrumbs=array(
	'Tangibles'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Tangible', 'url'=>array('index')),
	array('label'=>'Crear Tangible', 'url'=>array('create')),
	array('label'=>'Ver Tangible', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gestionar Tangible', 'url'=>array('admin')),
);
?>

<h1>Actualizar Tangible <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>