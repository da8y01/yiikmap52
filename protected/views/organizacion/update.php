<?php
$this->breadcrumbs=array(
	'Organizaciones'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Organizacion', 'url'=>array('index')),
	array('label'=>'Crear Organizacion', 'url'=>array('create')),
	array('label'=>'Ver Organizacion', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gestionar Organizacion', 'url'=>array('admin')),
);
?>

<h1>Actualizar Organizacion <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>