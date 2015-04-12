<?php
$this->breadcrumbs=array(
	'Capitales Humanos tienen Intangibles'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Capital Humano tiene Intangible', 'url'=>array('index')),
	array('label'=>'Crear Capital Humano tiene Intangible', 'url'=>array('create')),
	array('label'=>'Actualizar Capital Humano tiene Intangible', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar Capital Humano tiene Intangible', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Seguro desea borrar este item?')),
	array('label'=>'Gestionar Capital Humano tiene Intangible', 'url'=>array('admin')),
);
?>

<h1>Vista CapitalHumanoHasIntangible #<?php echo $model->id; ?></h1>

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
                    'label'=>'Intangible',
                    'type'=>'raw',
                    'value'=>CHtml::link(CHtml::encode($model->intangible->nombre.' ('.$model->intangible->id.')'), array('Intangible/view', 'id'=>$model->intangible->id)),
                ),
		'created_at',
		'updated_at',
	),
)); ?>
