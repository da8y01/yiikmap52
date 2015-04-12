<?php
$this->breadcrumbs=array(
	'Informaciones Secundarias'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar InformacionSecundaria', 'url'=>array('index')),
	array('label'=>'Crear InformacionSecundaria', 'url'=>array('create')),
	array('label'=>'Actualizar InformacionSecundaria', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar InformacionSecundaria', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Seguro desea borrar este item?')),
	array('label'=>'Gestionar InformacionSecundaria', 'url'=>array('admin')),
);
?>

<h1>Vista InformacionSecundaria #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'que',
		'a_quien',
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
