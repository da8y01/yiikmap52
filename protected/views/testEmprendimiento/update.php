<?php
$this->breadcrumbs=array(
	'Tests Emprendimiento'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar TestEmprendimiento', 'url'=>array('index')),
	array('label'=>'Crear TestEmprendimiento', 'url'=>array('create')),
	array('label'=>'Ver TestEmprendimiento', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gestionar TestEmprendimiento', 'url'=>array('admin')),
);
?>

<h1>Actualizar TestEmprendimiento <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>