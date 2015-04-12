<?php
$this->breadcrumbs=array(
	'Documentaciones'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Documentacion', 'url'=>array('index')),
	array('label'=>'Crear Documentacion', 'url'=>array('create')),
	array('label'=>'Ver Documentacion', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gestionar Documentacion', 'url'=>array('admin')),
);
?>

<h1>Actualizar Documentacion <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>