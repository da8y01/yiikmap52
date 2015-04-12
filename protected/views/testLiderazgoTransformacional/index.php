<?php
$this->breadcrumbs=array(
	'Tests Liderazgo Transformacional',
);

$this->menu=array(
	array('label'=>'Crear TestLiderazgoTransformacional', 'url'=>array('create')),
	array('label'=>'Gestionar TestLiderazgoTransformacional', 'url'=>array('admin')),
);
?>

<h1>Tests Liderazgo Transformacional</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
