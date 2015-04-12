<?php
$this->breadcrumbs=array(
	'Procesos tienen Politicas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar ProcesoHasPolitica', 'url'=>array('index')),
	array('label'=>'Crear ProcesoHasPolitica', 'url'=>array('create')),
	array('label'=>'Ver ProcesoHasPolitica', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gestionar ProcesoHasPolitica', 'url'=>array('admin')),
);
?>

<h1>Actualizar ProcesoHasPolitica <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>