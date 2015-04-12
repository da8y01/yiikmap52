<?php
$this->breadcrumbs=array(
	'Procesos tienen Sistemas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar ProcesoHasSistema', 'url'=>array('index')),
	array('label'=>'Crear ProcesoHasSistema', 'url'=>array('create')),
	array('label'=>'Actualizar ProcesoHasSistema', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar ProcesoHasSistema', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Seguro desea borrar este item?')),
	array('label'=>'Gestionar ProcesoHasSistema', 'url'=>array('admin')),
);
?>

<h1>Vista ProcesoHasSistema #<?php echo $model->id; ?></h1>

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
		array(               // Sistema relacionado mostrado como un enlace
                    'label'=>'Sistema',
                    'type'=>'raw',
                    'value'=>CHtml::link(CHtml::encode($model->sistema->nombre.' ('.$model->sistema->id.')'),
                                         array('Sistema/view', 'id'=>$model->sistema->id)
                            ),
                ),
                'descripcion',
		'created_at',
		'updated_at',
	),
)); ?>
