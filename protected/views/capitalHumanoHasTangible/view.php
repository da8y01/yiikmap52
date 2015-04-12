<?php
$this->breadcrumbs=array(
	'Capitales Humanos tienen Tangibles'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Capital Humano tiene Tangible', 'url'=>array('index')),
	array('label'=>'Crear Capital Humano tiene Tangible', 'url'=>array('create')),
	array('label'=>'Actualizar Capital Humano tiene Tangible', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar Capital Humano tiene Tangible', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Seguro desea borrar este item?')),
	array('label'=>'Gestionar Capital Humano tiene Tangible', 'url'=>array('admin')),
);
?>

<h1>Vista CapitalHumanoHasTangible #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
                'descripcion',
		array(
                    'label'=>'Capital Humano',
                    'type'=>'raw',
                    'value'=>CHtml::link(CHtml::encode($model->capitalHumano->nombre.' ('.$model->capitalHumano->id.')'), array('CapitalHumano/view', 'id'=>$model->capitalHumano->id)),
                ),
		array(
                    'label'=>'Tangible',
                    'type'=>'raw',
                    'value'=>CHtml::link(CHtml::encode($model->tangible->nombre.' ('.$model->tangible->id.')'), array('Tangible/view', 'id'=>$model->tangible->id)),
                ),
		'created_at',
		'updated_at',
	),
)); ?>
