<?php
$this->breadcrumbs=array(
	'Documentaciones'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Documentacion', 'url'=>array('index')),
	array('label'=>'Gestionar Documentacion', 'url'=>array('admin')),
);
?>

<h1>Crear Documentacion</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>