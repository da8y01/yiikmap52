<?php
$this->breadcrumbs=array(
	'Tests Creatividad'=>array('index'),
	'Gestionar',
);

$this->menu=array(
	array('label'=>'Listar TestCreatividad', 'url'=>array('index')),
	array('label'=>'Crear TestCreatividad', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('test-creatividad-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Gestionar Tests Creatividad</h1>

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
	'id'=>'test-creatividad-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'capital_humano_id',
		'p01productividad',
		'p02agilidad',
		'p03originalidad',
		'p04diversion',
                'created_at',
                'updated_at',
		/*
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
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
