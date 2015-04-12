<?php
$this->breadcrumbs=array(
	'Políticas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Politica', 'url'=>array('index')),
	array('label'=>'Crear Politica', 'url'=>array('create')),
	array('label'=>'Actualizar Politica', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar Politica', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Seguro desea borrar este item?')),
	array('label'=>'Gestionar Politica', 'url'=>array('admin')),
);
?>

<h1>Vista Politica #<?php echo $model->id; ?></h1>

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
