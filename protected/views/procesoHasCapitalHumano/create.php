<?php
$this->breadcrumbs=array(
	'Procesos tienen Capitales Humanos'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Proceso tiene Capital Humano', 'url'=>array('index')),
	array('label'=>'Gestionar Proceso tiene Capital Humano', 'url'=>array('admin')),
);
?>

<h1>Crear ProcesoHasCapitalHumano</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>