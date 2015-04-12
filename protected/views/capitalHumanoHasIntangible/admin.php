<?php
$this->breadcrumbs=array(
	'Capitales Humanos tienen Intangibles'=>array('index'),
	'Gestionar',
);

$this->menu=array(
	array('label'=>'Listar Capital Humano tiene Intangible', 'url'=>array('index')),
	array('label'=>'Crear Capital Humano tiene Intangible', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('capital-humano-has-intangible-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Gestionar Capitales Humanos tienen Intangibles</h1>

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
	'id'=>'capital-humano-has-intangible-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'descripcion',
		'capital_humano_id',
		'intangible_id',
		'created_at',
		'updated_at',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
