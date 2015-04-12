<?php
$this->breadcrumbs=array(
	'Procesos tienen Capitales Humanos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Proceso tiene Capital Humano', 'url'=>array('index')),
	array('label'=>'Crear Proceso tiene Capital Humano', 'url'=>array('create')),
	array('label'=>'Actualizar Proceso tiene Capital Humano', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar Proceso tiene Capital Humano', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Seguro desea borrar este item?')),
	array('label'=>'Gestionar Proceso tiene Capital Humano', 'url'=>array('admin')),
);
?>

<h1>Vista ProcesoHasCapitalHumano #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'descripcion',
		array(
                    'label'=>'Proceso',
                    'type'=>'raw',
                    'value'=>CHtml::link(CHtml::encode($model->proceso->nombre.' ('.$model->proceso->id.')'), array('Proceso/view', 'id'=>$model->proceso->id)),
                ),
		array(
                    'label'=>'Capital Humano',
                    'type'=>'raw',
                    'value'=>CHtml::link(CHtml::encode($model->capitalHumano->nombre.' ('.$model->capitalHumano->id.')'), array('CapitalHumano/view', 'id'=>$model->capitalHumano->id)),
                ),
		'created_at',
		'updated_at',
	),
)); ?>
