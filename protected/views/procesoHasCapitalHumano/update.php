<?php
$this->breadcrumbs=array(
	'Procesos tienen Capitales Humanos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Proceso tiene Capital Humano', 'url'=>array('index')),
	array('label'=>'Crear Proceso tiene Capital Humano', 'url'=>array('create')),
	array('label'=>'Ver Proceso tiene Capital Humano', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gestionar Proceso tiene Capital Humano', 'url'=>array('admin')),
);
?>

<h1>Actualizar ProcesoHasCapitalHumano <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>