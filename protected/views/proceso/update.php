<?php
$this->breadcrumbs=array(
	'Procesos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Proceso', 'url'=>array('index')),
	array('label'=>'Crear Proceso', 'url'=>array('create')),
	array('label'=>'Ver Proceso', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gestionar Proceso', 'url'=>array('admin')),
);
?>

<h1>Actualizar Proceso <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>