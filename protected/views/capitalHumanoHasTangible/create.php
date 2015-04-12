<?php
$this->breadcrumbs=array(
	'Capitales Humanos tienen Tangibles'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Capital Humano tiene Tangible', 'url'=>array('index')),
	array('label'=>'Gestionar Capital Humano tiene Tangible', 'url'=>array('admin')),
);
?>

<h1>Crear Capital Humano tiene Tangible</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>