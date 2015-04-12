<?php
$this->breadcrumbs=array(
	'Procesos tienen Politicas'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar ProcesoHasPolitica', 'url'=>array('index')),
	array('label'=>'Gestionar ProcesoHasPolitica', 'url'=>array('admin')),
);
?>

<h1>Crear ProcesoHasPolitica</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>