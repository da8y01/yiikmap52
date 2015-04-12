<?php
$this->breadcrumbs=array(
	'Tangibles',
);

$this->menu=array(
	array('label'=>'Crear Tangible', 'url'=>array('create')),
	array('label'=>'Gestionar Tangible', 'url'=>array('admin')),
);
?>

<h1>Tangibles</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
