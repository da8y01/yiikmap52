<?php
$this->breadcrumbs=array(
	'Procesos'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Proceso', 'url'=>array('index')),
	array('label'=>'Gestionar Proceso', 'url'=>array('admin')),
);
?>

<h1>Crear Proceso</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>