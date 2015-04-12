<?php
$this->breadcrumbs=array(
	'Intangibles'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Intangible', 'url'=>array('index')),
	array('label'=>'Crear Intangible', 'url'=>array('create')),
	array('label'=>'Actualizar Intangible', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar Intangible', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Seguro desea borrar este item?')),
	array('label'=>'Gestionar Intangible', 'url'=>array('admin')),
);
?>

<h1>Vista Intangible #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
                array(               // nombre del Tipo de Intangible
                    'label'=>'Tipo',
                    'type'=>'raw',
                    'value'=>CHtml::encode(Lookup::item('TipoIntangible',$model->tipo).' ('.$model->tipo.')'),
                ),
		'descripcion',
		'created_at',
		'updated_at',
	),
)); ?>
