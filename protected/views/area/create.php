<?php
$this->breadcrumbs=array(
	'Áreas'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Area', 'url'=>array('index')),
	array('label'=>'Gestionar Area', 'url'=>array('admin')),
);
?>

<h1>Crear Area</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>