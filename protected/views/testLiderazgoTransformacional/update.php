<?php
$this->breadcrumbs=array(
	'Tests Liderazgo Transformacional'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar TestLiderazgoTransformacional', 'url'=>array('index')),
	array('label'=>'Crear TestLiderazgoTransformacional', 'url'=>array('create')),
	array('label'=>'Ver TestLiderazgoTransformacional', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gestionar TestLiderazgoTransformacional', 'url'=>array('admin')),
);
?>

<h1>Actualizar TestLiderazgoTransformacional <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>