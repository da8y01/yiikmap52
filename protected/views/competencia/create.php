<?php
$this->breadcrumbs=array(
	'Competencias'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Competencia', 'url'=>array('index')),
	array('label'=>'Gestionar Competencia', 'url'=>array('admin')),
);
?>

<h1>Crear Competencia</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>