<?php
$this->breadcrumbs=array(
	'Procesos tienen Capitales Estructurales'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Proceso tiene Capital Estructural', 'url'=>array('index')),
	array('label'=>'Crear Proceso tiene Capital Estructural', 'url'=>array('create')),
	array('label'=>'Actualizar Proceso tiene Capital Estructural', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar Proceso tiene Capital Estructural', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Seguro desea borrar este item?')),
	array('label'=>'Gestionar Proceso tiene Capital Estructural', 'url'=>array('admin')),
);
?>

<h1>Vista ProcesoHasCapitalEstructural #<?php echo $model->id; ?></h1>

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
                    'label'=>'Capital Estructural',
                    'type'=>'raw',
                    'value'=>CHtml::link(CHtml::encode($model->capitalEstructural->nombre.' ('.$model->capitalEstructural->id.')'), array('CapitalEstructural/view', 'id'=>$model->capitalEstructural->id)),
                ),
		'created_at',
		'updated_at',
	),
)); ?>
