<?php
$this->breadcrumbs=array(
	'Procesos tienen Normativas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar ProcesoHasNormativa', 'url'=>array('index')),
	array('label'=>'Crear ProcesoHasNormativa', 'url'=>array('create')),
	array('label'=>'Ver ProcesoHasNormativa', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gestionar ProcesoHasNormativa', 'url'=>array('admin')),
);
?>

<h1>Actualizar ProcesoHasNormativa <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>