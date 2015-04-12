<?php
$this->breadcrumbs=array(
	'Organizaciones tienen Capitales'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Organización tiene Capital', 'url'=>array('index')),
	array('label'=>'Gestionar Organización tiene Capital', 'url'=>array('admin')),
);
?>

<h1>Crear Organización tiene Capital</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>