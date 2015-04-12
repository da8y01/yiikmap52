<?php
$this->breadcrumbs=array(
	'Tests Emprendimiento'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar TestEmprendimiento', 'url'=>array('index')),
	array('label'=>'Gestionar TestEmprendimiento', 'url'=>array('admin')),
);
?>

<h1>Crear TestEmprendimiento</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>