<?php
$this->breadcrumbs=array(
	'Lookups'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Lookup', 'url'=>array('index')),
	array('label'=>'Crear Lookup', 'url'=>array('create')),
	array('label'=>'Ver Lookup', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gestionar Lookup', 'url'=>array('admin')),
);
?>

<h1>Actualizar Lookup <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>