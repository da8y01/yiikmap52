<?php
$this->breadcrumbs=array(
	'Capitales Humanos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Capital Humano', 'url'=>array('index')),
	array('label'=>'Crear Capital Humano', 'url'=>array('create')),
	array('label'=>'Ver Capital Humano', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gestionar Capital Humano', 'url'=>array('admin')),
);
?>

<h1>Actualizar CapitalHumano <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>