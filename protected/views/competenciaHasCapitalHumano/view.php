<?php
$this->breadcrumbs=array(
	'Competencias tienen Capitales Humanos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Competencia tiene Capital Humano', 'url'=>array('index')),
	array('label'=>'Crear Competencia tiene Capital Humano', 'url'=>array('create')),
	array('label'=>'Actualizar Competencia tiene Capital Humano', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar Competencia tiene Capital Humano', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Seguro desea borrar este item?')),
	array('label'=>'Gestionar Competencia tiene Capital Humano', 'url'=>array('admin')),
);
?>

<h1>Vista CompetenciaHasCapitalHumano #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'descripcion',
                array(               // Competencia relacionada mostrada como un enlace
                    'label'=>'Competencia',
                    'type'=>'raw',
                    'value'=>CHtml::link(CHtml::encode($model->competencia->nombre.' ('.$model->competencia->id.')'),
                                         array('Competencia/view','id'=>$model->competencia->id)
                            ),
                ),
                array(               // CapitalHumano relacionada mostrada como un enlace
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
