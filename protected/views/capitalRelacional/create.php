<?php
$this->breadcrumbs=array(
	'Capitales Relacionales'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Capital Relacional', 'url'=>array('index')),
	array('label'=>'Gestionar Capital Relacional', 'url'=>array('admin')),
);
?>

<h1>Crear Capital Relacional</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>