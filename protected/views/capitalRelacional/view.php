<?php
$this->breadcrumbs=array(
	'Capitales Relacionales'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Capital Relacional', 'url'=>array('index')),
	array('label'=>'Crear Capital Relacional', 'url'=>array('create')),
	array('label'=>'Actualizar Capital Relacional', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar Capital Relacional', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Seguro desea borrar este item?')),
	array('label'=>'Gestionar Capital Relacional', 'url'=>array('admin')),
);
?>

<h1>Vista CapitalRelacional #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'afines',
                array(               // Organizacion correspondiente a este CapitalRelacional
                    'label'=>'Organización',
                    'type'=>'raw',
                    'value'=>CHtml::link(CHtml::encode($model->orgnombre.' ('.$model->organizacion_id.')'),
                                         array('Organizacion/view','id'=>$model->organizacion_id)
                            ),
                ),
		'created_at',
		'updated_at',
	),
)); ?>
