<?php
$this->breadcrumbs=array(
	'Tests Liderazgo Transformacional'=>array('index'),
	'Gestionar',
);

$this->menu=array(
	array('label'=>'Listar TestLiderazgoTransformacional', 'url'=>array('index')),
	array('label'=>'Crear TestLiderazgoTransformacional', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('test-liderazgo-transformacional-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Gestionar Tests Liderazgo Transformacional</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Búsqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'test-liderazgo-transformacional-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'capital_humano_id',
		'p01proporciono',
		'p02reexamino',
		'p03interfiero',
		'p04enfoco',
		/*
		'p05evito',
		'p06hablo',
		'p07ausento',
		'p08perspectivas',
		'p09optimismo',
		'p10infundo',
		'p11refiero',
		'p12espero',
		'p13hablo',
		'p14especifico',
		'p15dedico',
		'p16dejo',
		'p17demuestro',
		'p18abandono',
		'p19trato',
		'p20demuestro',
		'p21actuo',
		'p22concentro',
		'p23considero',
		'p24llevo',
		'p25demuestro',
		'p26expreso',
		'p27dirijo',
		'p28evito',
		'p29considero',
		'p30hago',
		'p31ayudo',
		'p32sugiero',
		'p33tardo',
		'p34enfatizo',
		'p35expreso',
		'p36expreso',
		'p37eficaz',
		'p38utilizo',
		'p39hago',
		'p40eficiente',
		'p41trabajo',
		'p42elevo',
		'p43eficiente',
		'p44motivo',
		'p45encabezo',
		*/
                'created_at',
                'updated_at',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
