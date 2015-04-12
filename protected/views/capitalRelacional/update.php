<?php
$this->breadcrumbs=array(
	'Capitales Relacionales'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Capital Relacional', 'url'=>array('index')),
	array('label'=>'Crear Capital Relacional', 'url'=>array('create')),
	array('label'=>'Ver Capital Relacional', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gestionar Capital Relacional', 'url'=>array('admin')),
);
?>

<h1>Actualizar CapitalRelacional <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>