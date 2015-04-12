<?php
$this->breadcrumbs=array(
	'Tangibles'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Tangible', 'url'=>array('index')),
	array('label'=>'Crear Tangible', 'url'=>array('create')),
	array('label'=>'Actualizar Tangible', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar Tangible', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Seguro desea borrar este item?')),
	array('label'=>'Gestionar Tangible', 'url'=>array('admin')),
);
?>

<h1>Vista Tangible #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		array(               // nombre del Tipo de Intangible
                    'label'=>'Tipo',
                    'type'=>'raw',
                    'value'=>CHtml::encode(Lookup::item('TipoTangible',$model->tipo).' ('.$model->tipo.')'),
                ),
		'locacion',
		'descripcion',
		'created_at',
		'updated_at',
	),
)); ?>
