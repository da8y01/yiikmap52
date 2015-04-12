<?php
$this->breadcrumbs=array(
	'Tests Creatividad'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar TestCreatividad', 'url'=>array('index')),
	array('label'=>'Crear TestCreatividad', 'url'=>array('create')),
	array('label'=>'Actualizar TestCreatividad', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar TestCreatividad', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Seguro desea borrar este item?')),
	array('label'=>'Gestionar TestCreatividad', 'url'=>array('admin')),
);
?>

<h1>Vista TestCreatividad #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
                array(               // CapitalHumano relacionada mostrada como un enlace
                    'label'=>'Capital Humano',
                    'type'=>'raw',
                    'value'=>CHtml::link(CHtml::encode($model->capitalHumano->nombre),
                                         array('capitalhumano/view','id'=>$model->capitalHumano->id)
                            ),
                ),
                'created_at',
		'updated_at',
		'p01productividad',
		'p02agilidad',
		'p03originalidad',
		'p04diversion',
		'p05automotivacion',
		'p06persistencia',
		'p07lenguajes',
		'p08variedad',
		'p09fluencia',
		'p10visualizacion',
		'p11analogia',
		'p12problemas',
		'p13experimentos',
		'p14innovacion',
		'p15inventiva',
	),
)); ?>
