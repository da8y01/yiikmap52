<?php
$this->breadcrumbs=array(
	'Normativas'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Normativa', 'url'=>array('index')),
	array('label'=>'Gestionar Normativa', 'url'=>array('admin')),
);
?>

<h1>Crear Normativa</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>