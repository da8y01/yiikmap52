<?php
$this->breadcrumbs=array(
	'Tests Liderazgo Transformacional'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar TestLiderazgoTransformacional', 'url'=>array('index')),
	array('label'=>'Crear TestLiderazgoTransformacional', 'url'=>array('create')),
	array('label'=>'Actualizar TestLiderazgoTransformacional', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar TestLiderazgoTransformacional', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Seguro desea borrar este item?')),
	array('label'=>'Gestionar TestLiderazgoTransformacional', 'url'=>array('admin')),
);
?>

<h1>Vista TestLiderazgoTransformacional #<?php echo $model->id; ?></h1>

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
		'p01proporciono',
		'p02reexamino',
		'p03interfiero',
		'p04enfoco',
		'p05evito',
		'p06hablo',
		'p07ausento',
		'p08perspectivas',
		'p09optimismo',
		'p10infundo',
		'p11refiero',
		'p12espero',
		'p13entusiasmo',
		'p14especifico',
		'p15dedico',
		'p16dejo',
		'p17demuestro',
		'p18abandono',
		'p19trato',
		'p20cronicos',
		'p21actuo',
		'p22concentro',
		'p23considero',
		'p24llevo',
		'p25demuestro',
		'p26vision',
		'p27dirijo',
		'p28decisiones',
		'p29individuo',
		'p30hago',
		'p31ayudo',
		'p32sugiero',
		'p33tardo',
		'p34enfatizo',
		'p35expreso',
		'p36confianza',
		'p37eficaz',
		'p38utilizo',
		'p39espera',
		'p40eficiente',
		'p41trabajo',
		'p42elevo',
		'p43organizacionales',
		'p44motivo',
		'p45encabezo',
	),
)); ?>
