<?php
$this->breadcrumbs=array(
	'Capitales Humanos tienen Intangibles',
);

$this->menu=array(
	array('label'=>'Crear Capital Humano tiene Intangible', 'url'=>array('create')),
	array('label'=>'Gestionar Capital Humano tiene Intangible', 'url'=>array('admin')),
);
?>

<h1>Capitales Humanos tienen Intangibles</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
