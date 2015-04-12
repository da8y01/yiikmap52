<?php
$this->breadcrumbs=array(
	'Capitales Estructurales'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Capital Estructural', 'url'=>array('index')),
	array('label'=>'Gestionar Capital Estructural', 'url'=>array('admin')),
);
?>

<h1>Crear Capital Estructural</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>