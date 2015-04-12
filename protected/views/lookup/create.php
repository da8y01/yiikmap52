<?php
$this->breadcrumbs=array(
	'Lookups'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Lookup', 'url'=>array('index')),
	array('label'=>'Gestionar Lookup', 'url'=>array('admin')),
);
?>

<h1>Crear Lookup</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>