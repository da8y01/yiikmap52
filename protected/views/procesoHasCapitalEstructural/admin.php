<?php
$this->breadcrumbs=array(
	'Procesos tienen Capitales Estructurales'=>array('index'),
	'Gestionar',
);

$this->menu=array(
	array('label'=>'Listar Proceso tiene Capital Estructural', 'url'=>array('index')),
	array('label'=>'Crear Proceso tiene Capital Estructural', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('proceso-has-capital-estructural-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Gestionar Proceso tienen Capitales Estructurales</h1>

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
	'id'=>'proceso-has-capital-estructural-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'descripcion',
		'proceso_id',
		'capital_estructural_id',
		'created_at',
		'updated_at',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
