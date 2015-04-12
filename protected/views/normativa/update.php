<?php
$this->breadcrumbs=array(
	'Normativas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Normativa', 'url'=>array('index')),
	array('label'=>'Crear Normativa', 'url'=>array('create')),
	array('label'=>'Ver Normativa', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gestionar Normativa', 'url'=>array('admin')),
);
?>

<h1>Actualizar Normativa <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>