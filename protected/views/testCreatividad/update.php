<?php
$this->breadcrumbs=array(
	'Tests Creatividad'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar TestCreatividad', 'url'=>array('index')),
	array('label'=>'Crear TestCreatividad', 'url'=>array('create')),
	array('label'=>'Ver TestCreatividad', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gestionar TestCreatividad', 'url'=>array('admin')),
);
?>

<h1>Actualizar TestCreatividad <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>