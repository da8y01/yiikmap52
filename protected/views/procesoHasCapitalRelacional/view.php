<?php
$this->breadcrumbs=array(
	'Procesos tienen Capitales Relacionales'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Proceso tiene Capital Relacional', 'url'=>array('index')),
	array('label'=>'Crear Proceso tiene Capital Relacional', 'url'=>array('create')),
	array('label'=>'Actualizar Proceso tiene Capital Relacional', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar Proceso tiene Capital Relacional', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Seguro desea borrar este item?')),
	array('label'=>'Gestionar Proceso tiene Capital Relacional', 'url'=>array('admin')),
);
?>

<h1>Vista ProcesoHasCapitalRelacional #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'descripcion',
                array(               // Proceso relacionado mostrado como un enlace
                    'label'=>'Proceso',
                    'type'=>'raw',
                    'value'=>CHtml::link(CHtml::encode($model->proceso->nombre.' ('.$model->proceso->id.')'),
                                         array('Proceso/view', 'id'=>$model->proceso->id)
                            ),
                ),
		array(               // CapitalRelacional relacionado mostrado como un enlace
                    'label'=>'Capital Relacional',
                    'type'=>'raw',
                    'value'=>CHtml::link(CHtml::encode(Organizacion::model()->findByPk($model->capitalRelacional->organizacion_id)->nombre.' ('.$model->capitalRelacional->id.')'),
                                         array('CapitalRelacional/view', 'id'=>$model->capitalRelacional->id)
                            ),
                ),
		'created_at',
		'updated_at',
	),
)); ?>
