<?php
$this->breadcrumbs=array(
	'Competencias tienen Capitales Humanos'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Competencia tiene Capital Humano', 'url'=>array('index')),
	array('label'=>'Gestionar Competencia tiene Capital Humano', 'url'=>array('admin')),
);
?>

<h1>Crear Competencia tiene Capital Humano</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>