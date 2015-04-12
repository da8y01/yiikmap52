<?php
$this->breadcrumbs=array(
	'Capitales Humanos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Capital Humano', 'url'=>array('index')),
	array('label'=>'Crear Capital Humano', 'url'=>array('create')),
	array('label'=>'Actualizar Capital Humano', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar Capital Humano', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Seguro desea borrar este item?')),
	array('label'=>'Gestionar Capital Humano', 'url'=>array('admin')),
);
?>

<h1>Vista CapitalHumano #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
                array(               // nombre del Tipo de CapitalHumano
                    'label'=>'Tipo',
                    'type'=>'raw',
                    'value'=>CHtml::encode(Lookup::item('TipoCapitalHumano',$model->tipo).' ('.$model->tipo.')'),
                ),
		'contacto',
		'secundaria',
		'created_at',
		'updated_at',
	),
)); ?>
