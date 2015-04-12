<?php
$this->breadcrumbs=array(
	'Procesos tienen Capitales Relacionales'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Proceso tiene Capital Relacional', 'url'=>array('index')),
	array('label'=>'Gestionar Proceso tiene Capital Relacional', 'url'=>array('admin')),
);
?>

<h1>Crear ProcesoHasCapitalRelacional</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>