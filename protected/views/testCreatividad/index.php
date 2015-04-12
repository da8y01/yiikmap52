<?php
$this->breadcrumbs=array(
	'Tests Creatividad',
);

$this->menu=array(
	array('label'=>'Crear TestCreatividad', 'url'=>array('create')),
	array('label'=>'Gestionar TestCreatividad', 'url'=>array('admin')),
);
?>

<h1>Tests Creatividad</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
