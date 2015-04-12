<?php
$this->breadcrumbs=array(
	'Tests Liderazgo Transformacional'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar TestLiderazgoTransformacional', 'url'=>array('index')),
	array('label'=>'Gestionar TestLiderazgoTransformacional', 'url'=>array('admin')),
);
?>

<h1>Crear TestLiderazgoTransformacional</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>