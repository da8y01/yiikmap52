<?php
$this->breadcrumbs=array(
	'Procesos tienen Capitales Estructurales'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Proceso tiene Capital Estructural', 'url'=>array('index')),
	array('label'=>'Crear Proceso tiene Capital Estructural', 'url'=>array('create')),
	array('label'=>'Ver Proceso tiene Capital Estructural', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gestionar Proceso tiene Capital Estructural', 'url'=>array('admin')),
);
?>

<h1>Actualizar ProcesoHasCapitalEstructural <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>