<?php
$this->breadcrumbs=array(
	'Sistemas'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Sistema', 'url'=>array('index')),
	array('label'=>'Gestionar Sistema', 'url'=>array('admin')),
);
?>

<h1>Crear Sistema</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>