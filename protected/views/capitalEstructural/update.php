<?php
$this->breadcrumbs=array(
	'Capitales Estructurales'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Capital Estructural', 'url'=>array('index')),
	array('label'=>'Crear Capital Estructural', 'url'=>array('create')),
	array('label'=>'Ver Capital Estructural', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gestionar Capital Estructural', 'url'=>array('admin')),
);
?>

<h1>Actualizar CapitalEstructural <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>