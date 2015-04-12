<?php
$this->breadcrumbs=array(
	'Informaciones Primarias'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar InformacionPrimaria', 'url'=>array('index')),
	array('label'=>'Crear InformacionPrimaria', 'url'=>array('create')),
	array('label'=>'Ver InformacionPrimaria', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gestionar InformacionPrimaria', 'url'=>array('admin')),
);
?>

<h1>Actualizar InformacionPrimaria <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>