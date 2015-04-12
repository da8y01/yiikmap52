<?php
$this->breadcrumbs=array(
	'Procesos tienen Procesos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar ProcesoHasProceso', 'url'=>array('index')),
	array('label'=>'Crear ProcesoHasProceso', 'url'=>array('create')),
	array('label'=>'Actualizar ProcesoHasProceso', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar ProcesoHasProceso', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Seguro desea borrar este item?')),
	array('label'=>'Gestionar ProcesoHasProceso', 'url'=>array('admin')),
);
?>

<h1>Vista ProcesoHasProceso #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'descripcion',
		'tipo',
		array(               // Proceso relacionado mostrado como un enlace
                    'label'=>'Proceso',
                    'type'=>'raw',
                    'value'=>CHtml::link(CHtml::encode($model->proceso->nombre.' ('.$model->proceso->id.')'),
                                         array('Proceso/view', 'id'=>$model->proceso->id)
                            ),
                ),
		array(               // Proceso hijo relacionado mostrado como un enlace
                    'label'=>'Proceso Hijo',
                    'type'=>'raw',
                    'value'=>CHtml::link(CHtml::encode($model->procesoHijo->nombre.' ('.$model->procesoHijo->id.')'),
                                         array('Proceso/view', 'id'=>$model->procesoHijo->id)
                            ),
                ),
		'created_at',
		'updated_at',
	),
)); ?>
