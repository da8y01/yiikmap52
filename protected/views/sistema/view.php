<?php
$this->breadcrumbs=array(
	'Sistemas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Sistema', 'url'=>array('index')),
	array('label'=>'Crear Sistema', 'url'=>array('create')),
	array('label'=>'Actualizar Sistema', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar Sistema', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Seguro desea borrar este item?')),
	array('label'=>'Gestionar Sistema', 'url'=>array('admin')),
);
?>

<h1>Vista Sistema #<?php echo $model->id; ?></h1>

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
