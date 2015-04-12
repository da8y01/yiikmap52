<?php
$this->breadcrumbs=array(
	'Capitales'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Capital', 'url'=>array('index')),
	array('label'=>'Crear Capital', 'url'=>array('create')),
	array('label'=>'Ver Capital', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gestionar Capital', 'url'=>array('admin')),
);
?>

<h1>Actualizar Capital <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>