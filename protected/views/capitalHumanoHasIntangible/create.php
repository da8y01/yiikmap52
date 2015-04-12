<?php
$this->breadcrumbs=array(
	'Capitales Humanos tienen Intangibles'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Capital Humano tiene Intangible', 'url'=>array('index')),
	array('label'=>'Gestionar Capital Humano tiene Intangible', 'url'=>array('admin')),
);
?>

<h1>Crear Capital Humano tiene Intangible</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>