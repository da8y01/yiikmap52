<?php
$this->breadcrumbs=array(
	'Capitales Humanos tienen Tangibles',
);

$this->menu=array(
	array('label'=>'Crear Capital Humano tiene Tangible', 'url'=>array('create')),
	array('label'=>'Gestionar Capital Humano tiene Tangible', 'url'=>array('admin')),
);
?>

<h1>Capitales Humanos tienen Tangibles</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
