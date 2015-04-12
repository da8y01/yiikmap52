<?php
$this->breadcrumbs=array(
	'Procesos tienen Procesos'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'List arProcesoHasProceso', 'url'=>array('index')),
	array('label'=>'Gestionar ProcesoHasProceso', 'url'=>array('admin')),
);
?>

<h1>Crear ProcesoHasProceso</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>