<?php
$this->breadcrumbs=array(
	'Competencias tienen Capitales Humanos'=>array('index'),
	'Gestionar',
);

$this->menu=array(
	array('label'=>'Listar Competencia tiene Capital Humano', 'url'=>array('index')),
	array('label'=>'Crear Competencia tiene Capital Humano', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('competencia-has-capital-humano-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Gestionar Competencias tienen Capitales Humanos</h1>

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
	'id'=>'competencia-has-capital-humano-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'descripcion',
		'competencia_id',
		'capital_humano_id',
		'created_at',
		'updated_at',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
