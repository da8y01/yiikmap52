<?php
$this->breadcrumbs=array(
	'Informaciones Primarias'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar InformacionPrimaria', 'url'=>array('index')),
	array('label'=>'Crear InformacionPrimaria', 'url'=>array('create')),
	array('label'=>'Actualizar InformacionPrimaria', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar InformacionPrimaria', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Seguro desea borrar este item?')),
	array('label'=>'Gestionar InformacionPrimaria', 'url'=>array('admin')),
);
?>

<h1>Vista InformacionPrimaria #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'que',
		'quien',
		'como',
                array(
                    'label'=>'Proceso',
                    'type'=>'raw',
                    'value'=>CHtml::link(CHtml::encode($model->proceso->nombre.' ('.$model->proceso->id.')'), array('Proceso/view', 'id'=>$model->proceso->id))
                ),
                'descripcion',
		'created_at',
		'updated_at',
	),
)); ?>
