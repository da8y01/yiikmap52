<?php
$this->breadcrumbs=array(
	'Capitales Humanos'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Capital Humano', 'url'=>array('index')),
	array('label'=>'Gestionar Capital Humano', 'url'=>array('admin')),
);
?>

<h1>Crear Capital Humano</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>