<?php
$this->breadcrumbs=array(
	'Sectores'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Sector', 'url'=>array('index')),
	array('label'=>'Gestionar Sector', 'url'=>array('admin')),
);
?>

<h1>Crear Sector</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>