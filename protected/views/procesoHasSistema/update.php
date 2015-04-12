<?php
$this->breadcrumbs=array(
	'Procesos tienen Sistemas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar ProcesoHasSistema', 'url'=>array('index')),
	array('label'=>'Crear ProcesoHasSistema', 'url'=>array('create')),
	array('label'=>'Ver ProcesoHasSistema', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gestionar ProcesoHasSistema', 'url'=>array('admin')),
);
?>

<h1>Actualizar ProcesoHasSistema <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>