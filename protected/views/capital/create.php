<?php
$this->breadcrumbs=array(
	'Capitales'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Capital', 'url'=>array('index')),
	array('label'=>'Gestionar Capital', 'url'=>array('admin')),
);
?>

<h1>Crear Capital</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>