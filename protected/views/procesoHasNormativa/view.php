<?php
$this->breadcrumbs=array(
	'Procesos tienen Normativas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar ProcesoHasNormativa', 'url'=>array('index')),
	array('label'=>'Crear ProcesoHasNormativa', 'url'=>array('create')),
	array('label'=>'Actualizar ProcesoHasNormativa', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar ProcesoHasNormativa', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Seguro desea borrar este item?')),
	array('label'=>'Gestionar ProcesoHasNormativa', 'url'=>array('admin')),
);
?>

<h1>Vista ProcesoHasNormativa #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
                array(               // Proceso relacionado mostrado como un enlace
                    'label'=>'Proceso',
                    'type'=>'raw',
                    'value'=>CHtml::link(CHtml::encode($model->proceso->nombre.' ('.$model->proceso->id.')'),
                                         array('Proceso/view', 'id'=>$model->proceso->id)
                            ),
                ),
                array(               // Normativa relacionado mostrado como un enlace
                    'label'=>'Normativa',
                    'type'=>'raw',
                    'value'=>CHtml::link(CHtml::encode($model->normativa->nombre.' ('.$model->normativa->id.')'),
                                         array('Normativa/view', 'id'=>$model->normativa->id)
                            ),
                ),
                'descripcion',
		'created_at',
		'updated_at',
	),
)); ?>
