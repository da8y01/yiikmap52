<?php
$this->breadcrumbs=array(
	'Tests Creatividad'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar TestCreatividad', 'url'=>array('index')),
	array('label'=>'Gestionar TestCreatividad', 'url'=>array('admin')),
);
?>

<h1>Crear TestCreatividad</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>