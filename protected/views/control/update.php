<?php
$this->breadcrumbs=array(
	'Controles'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Control', 'url'=>array('index')),
	array('label'=>'Crear Control', 'url'=>array('create')),
	array('label'=>'Ver Control', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gestionar Control', 'url'=>array('admin')),
);
?>

<h1>Actualizar Control <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>