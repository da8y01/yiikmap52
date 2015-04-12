<?php
$this->breadcrumbs=array(
	'Políticas'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Politica', 'url'=>array('index')),
	array('label'=>'Gestionar Politica', 'url'=>array('admin')),
);
?>

<h1>Crear Politica</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>