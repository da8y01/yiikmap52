<?php
$this->breadcrumbs=array(
	'Procesos tienen Normativas'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar ProcesoHasNormativa', 'url'=>array('index')),
	array('label'=>'Gestionar ProcesoHasNormativa', 'url'=>array('admin')),
);
?>

<h1>Crear ProcesoHasNormativa</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>