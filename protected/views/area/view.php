<?php
$this->breadcrumbs=array(
	'Áreas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Area', 'url'=>array('index')),
	array('label'=>'Crear Area', 'url'=>array('create')),
	array('label'=>'Actualizar Area', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar Area', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Seguro desea borrar este item?')),
	array('label'=>'Gestionar Area', 'url'=>array('admin')),
);
?>

<h1>Vista Area #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		'descripcion',
		'created_at',
		'updated_at',
	),
)); ?>
