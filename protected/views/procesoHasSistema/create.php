<?php
$this->breadcrumbs=array(
	'Procesos tienen Sistemas'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar ProcesoHasSistema', 'url'=>array('index')),
	array('label'=>'Gestionar ProcesoHasSistema', 'url'=>array('admin')),
);
?>

<h1>Crear ProcesoHasSistema</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>