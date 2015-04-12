<?php
$this->breadcrumbs=array(
	'Intangibles'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Intangible', 'url'=>array('index')),
	array('label'=>'Gestionar Intangible', 'url'=>array('admin')),
);
?>

<h1>Crear Intangible</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>