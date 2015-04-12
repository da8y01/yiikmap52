<?php
$this->breadcrumbs=array(
	'Procesos tienen Capitales Estructurales'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Proceso tiene Capital Estructural', 'url'=>array('index')),
	array('label'=>'Gestionar Proceso tiene Capital Estructural', 'url'=>array('admin')),
);
?>

<h1>Crear ProcesoHasCapitalEstructural</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>