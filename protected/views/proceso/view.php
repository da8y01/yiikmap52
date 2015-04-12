<?php
$this->breadcrumbs=array(
	'Procesos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Proceso', 'url'=>array('index')),
	array('label'=>'Crear Proceso', 'url'=>array('create')),
	array('label'=>'Actualizar Proceso', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar Proceso', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Seguro desea borrar este item?')),
	array('label'=>'Gestionar Proceso', 'url'=>array('admin')),
);
?>

<h1>Vista Proceso #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'version',
		'nombre',
		array(               // nombre del Tipo de Proceso
                    'label'=>'Tipo',
                    'type'=>'raw',
                    'value'=>CHtml::encode(Lookup::item('TipoProceso',$model->tipo).' ('.$model->tipo.')'),
                ),
		'objetivo',
                array(               // Organizacion relacionada mostrada como un enlace
                    'label'=>'Organización',
                    'type'=>'raw',
                    'value'=>CHtml::link(CHtml::encode($model->organizacion->nombre.' ('.$model->organizacion->id.')'),
                                         array('Organizacion/view','id'=>$model->organizacion->id)
                            ),
                ),
                array(               // CapitalHumano relacionado mostrado como un enlace
                    'label'=>'Capital Humano',
                    'type'=>'raw',
                    'value'=>CHtml::link(CHtml::encode($model->capitalHumano->nombre.' ('.$model->capitalHumano->id.')'),
                                         array('CapitalHumano/view','id'=>$model->capitalHumano->id)
                            ),
                ),
		'created_at',
		'updated_at',
	),
)); ?>
