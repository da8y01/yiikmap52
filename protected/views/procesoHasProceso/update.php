<?php
$this->breadcrumbs=array(
	'Procesos tienen Procesos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar ProcesoHasProceso', 'url'=>array('index')),
	array('label'=>'Crear ProcesoHasProceso', 'url'=>array('create')),
	array('label'=>'Ver ProcesoHasProceso', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gestionar ProcesoHasProceso', 'url'=>array('admin')),
);
?>

<h1>Actualizar ProcesoHasProceso <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>