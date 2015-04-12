<?php
$this->breadcrumbs=array(
	'Organizaciones'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Organizacion', 'url'=>array('index')),
	array('label'=>'Gestionar Organizacion', 'url'=>array('admin')),
);
?>

<h1>Crear Organizacion</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>