<?php
$this->breadcrumbs=array(
	'Informaciones Primarias'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar InformacionPrimaria', 'url'=>array('index')),
	array('label'=>'Gestionar InformacionPrimaria', 'url'=>array('admin')),
);
?>

<h1>Crear InformacionPrimaria</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>