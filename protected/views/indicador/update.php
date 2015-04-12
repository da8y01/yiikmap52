<?php
$this->breadcrumbs=array(
	'Indicadores'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Indicador', 'url'=>array('index')),
	array('label'=>'Crear Indicador', 'url'=>array('create')),
	array('label'=>'Ver Indicador', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gestionar Indicador', 'url'=>array('admin')),
);
?>

<h1>Actualizar Indicador <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>