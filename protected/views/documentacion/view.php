<?php
$this->breadcrumbs=array(
	'Documentaciones'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Documentacion', 'url'=>array('index')),
	array('label'=>'Crear Documentacion', 'url'=>array('create')),
	array('label'=>'Actualizar Documentacion', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar Documentacion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Seguro desea borrar este item?')),
	array('label'=>'Gestionar Documentacion', 'url'=>array('admin')),
);
?>

<h1>Vista Documentacion #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		'locacion',
                array(
                    'label'=>'Proceso',
                    'type'=>'raw',
                    'value'=>CHtml::link(CHtml::encode($model->proceso->nombre.' ('.$model->proceso->id.')'),
                                array('Proceso/view', 'id'=>$model->proceso->id)
                            )
                ),
                'descripcion',
		'created_at',
		'updated_at',
	),
)); ?>
