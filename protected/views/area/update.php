<?php
$this->breadcrumbs=array(
	'Áreas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Area', 'url'=>array('index')),
	array('label'=>'Crear Area', 'url'=>array('create')),
	array('label'=>'Ver Area', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gestionar Area', 'url'=>array('admin')),
);
?>

<h1>Actualizar Area <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>