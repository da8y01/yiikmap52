<?php
$this->breadcrumbs=array(
	'Sistemas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Sistema', 'url'=>array('index')),
	array('label'=>'Crear Sistema', 'url'=>array('create')),
	array('label'=>'Ver Sistema', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gestionar Sistema', 'url'=>array('admin')),
);
?>

<h1>Actualizar Sistema <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>