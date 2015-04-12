<?php
$this->breadcrumbs=array(
	'Competencias'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Competencia', 'url'=>array('index')),
	array('label'=>'Crear Competencia', 'url'=>array('create')),
	array('label'=>'Actualizar Competencia', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar Competencia', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Seguro desea borrar este item?')),
	array('label'=>'Gestionar Competencia', 'url'=>array('admin')),
);
?>

<h1>Vista Competencia #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
                array(               // nombre del Tipo de Competencia
                    'label'=>'Tipo',
                    'type'=>'raw',
                    'value'=>CHtml::encode(Lookup::item('TipoCompetencia',$model->tipo).' ('.$model->tipo.')'),
                ),
                array(               // nombre del Modelo de Competencia
                    'label'=>'Modelo',
                    'type'=>'raw',
                    'value'=>CHtml::encode(Lookup::item('ModeloCompetencia',$model->modelo).' ('.$model->modelo.')'),
                ),
		'perfil',
                array(               // Area relacionada mostrada como un enlace
                    'label'=>'Área',
                    'type'=>'raw',
                    'value'=>CHtml::link(CHtml::encode($model->area->nombre.' ('.$model->area->id.')'),
                                         array('Area/view','id'=>$model->area->id)
                            ),
                ),
		'descripcion',
		'created_at',
		'updated_at',
	),
)); ?>
