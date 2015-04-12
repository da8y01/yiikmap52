<?php
$this->breadcrumbs=array(
	'Controles'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Control', 'url'=>array('index')),
	array('label'=>'Crear Control', 'url'=>array('create')),
	array('label'=>'Actualizar Control', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar Control', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Seguro desea borrar este item?')),
	array('label'=>'Gestionar Control', 'url'=>array('admin')),
);
?>

<h1>Vista Control #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
                array(
                    'label'=>'Tipo',
                    'type'=>'raw',
                    'value'=>CHtml::encode(Lookup::item('TipoControl', $model->tipo).' ('.$model->tipo.')')
                ),
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
