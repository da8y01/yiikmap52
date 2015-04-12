<?php
$this->breadcrumbs=array(
	'Controles'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Control', 'url'=>array('index')),
	array('label'=>'Gestionar Control', 'url'=>array('admin')),
);
?>

<h1>Crear Control</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>