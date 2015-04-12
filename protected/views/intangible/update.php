<?php
$this->breadcrumbs=array(
	'Intangibles'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Intangible', 'url'=>array('index')),
	array('label'=>'Crear Intangible', 'url'=>array('create')),
	array('label'=>'Ver Intangible', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gestionar Intangible', 'url'=>array('admin')),
);
?>

<h1>Actualizar Intangible <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>