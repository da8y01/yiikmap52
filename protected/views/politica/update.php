<?php
$this->breadcrumbs=array(
	'Políticas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Politica', 'url'=>array('index')),
	array('label'=>'Crear Politica', 'url'=>array('create')),
	array('label'=>'Ver Politica', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gestionar Politica', 'url'=>array('admin')),
);
?>

<h1>Actualizar Politica <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>