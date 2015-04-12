<?php
$this->breadcrumbs=array(
	'Indicadores'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Indicador', 'url'=>array('index')),
	array('label'=>'Gestionar Indicador', 'url'=>array('admin')),
);
?>

<h1>Crear Indicador</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>