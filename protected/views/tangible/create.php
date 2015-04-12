<?php
$this->breadcrumbs=array(
	'Tangibles'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Tangible', 'url'=>array('index')),
	array('label'=>'Gestionar Tangible', 'url'=>array('admin')),
);
?>

<h1>Crear Tangible</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>