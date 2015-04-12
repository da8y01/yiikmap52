<?php
$this->breadcrumbs=array(
	'Normativas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Normativa', 'url'=>array('index')),
	array('label'=>'Crear Normativa', 'url'=>array('create')),
	array('label'=>'Actualizar Normativa', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar Normativa', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Seguro desea borrar este item?')),
	array('label'=>'Gestionar Normativa', 'url'=>array('admin')),
);
?>

<h1>Vista Normativa #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		'locacion',
                'descripcion',
		'created_at',
		'updated_at',
	),
)); ?>
