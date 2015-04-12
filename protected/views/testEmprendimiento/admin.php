<?php
$this->breadcrumbs=array(
	'Tests Emprendimiento'=>array('index'),
	'Gestionar',
);

$this->menu=array(
	array('label'=>'Listar TestEmprendimiento', 'url'=>array('index')),
	array('label'=>'Crear TestEmprendimiento', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('test-emprendimiento-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Gestionar Tests Emprendimiento</h1>

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
	'id'=>'test-emprendimiento-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'capital_humano_id',
		'p201estimula',
		'p202predisposicion',
		'p203iniciativa',
		'p204dedica',
		/*
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
		*/
                'created_at',
		'updated_at',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
