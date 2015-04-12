<?php
$this->breadcrumbs=array(
	'Procesos tienen Politicas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar ProcesoHasPolitica', 'url'=>array('index')),
	array('label'=>'Crear ProcesoHasPolitica', 'url'=>array('create')),
	array('label'=>'Actualizar ProcesoHasPolitica', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar ProcesoHasPolitica', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Seguro desea borrar este item?')),
	array('label'=>'Gestionar ProcesoHasPolitica', 'url'=>array('admin')),
);
?>

<h1>Vista ProcesoHasPolitica #<?php echo $model->id; ?></h1>

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
		array(               // Politica relacionado mostrado como un enlace
                    'label'=>'Política',
                    'type'=>'raw',
                    'value'=>CHtml::link(CHtml::encode($model->politica->nombre.' ('.$model->politica->id.')'),
                                         array('Politica/view', 'id'=>$model->politica->id)
                            ),
                ),
                'descripcion',
		'created_at',
		'updated_at',
	),
)); ?>
