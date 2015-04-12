<?php
$this->breadcrumbs=array(
	'Lookups'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'Listar Lookup', 'url'=>array('index')),
	array('label'=>'Crear Lookup', 'url'=>array('create')),
	array('label'=>'Actualizar Lookup', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar Lookup', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Seguro desea borrar este item?')),
	array('label'=>'Gestionar Lookup', 'url'=>array('admin')),
);
?>

<h1>Vista Lookup #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'code',
		'type',
		'position',
		'created_at',
		'updated_at',
	),
)); ?>
