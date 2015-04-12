<?php
$this->breadcrumbs=array(
	'Organizaciones tienen Competencias'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Organización tiene Competencia', 'url'=>array('index')),
	array('label'=>'Gestionar Organización tiene Competencia', 'url'=>array('admin')),
);
?>

<h1>Crear Organización tiene Competencia</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>