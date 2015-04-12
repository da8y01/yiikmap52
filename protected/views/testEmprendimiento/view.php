<?php
$this->breadcrumbs=array(
	'Tests Emprendimiento'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar TestEmprendimiento', 'url'=>array('index')),
	array('label'=>'Crear TestEmprendimiento', 'url'=>array('create')),
	array('label'=>'Actualizar TestEmprendimiento', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar TestEmprendimiento', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Seguro desea borrar este item?')),
	array('label'=>'Gestionar TestEmprendimiento', 'url'=>array('admin')),
);
?>

<h1>Vista TestEmprendimiento #<?php echo $model->id; ?></h1>

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
		'p201estimula',
		'p202predisposicion',
		'p203iniciativa',
		'p204dedica',
		'p205relaciona',
		'p206autonomia',
		'p207responsabilidad',
		'p208independiente',
		'p209prever',
		'p210objetivos',
		'p211experiencia',
		'p212equipo',
		'p31explica',
		'p32iniciar',
		'p33oportuno',
		'p34convencido',
		'p35arranque',
		'p36presupuesto',
		'p37contacto',
		'p38invertiria',
		'p39conoce',
		'p41empresas',
		'p42actuan',
		'p43datos',
		'p44convencido',
		'p45vista',
		'p46mercado',
		'p47mecanismos',
		'p48situacion',
	),
)); ?>
