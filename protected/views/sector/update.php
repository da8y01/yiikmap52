<?php
$this->breadcrumbs=array(
	'Sectores'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Sector', 'url'=>array('index')),
	array('label'=>'Crear Sector', 'url'=>array('create')),
	array('label'=>'Ver Sector', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gestionar Sector', 'url'=>array('admin')),
);
?>

<h1>Actualizar Sector <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>