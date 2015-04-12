<?php
$this->breadcrumbs=array(
	'Intangibles',
);

$this->menu=array(
	array('label'=>'Crear Intangible', 'url'=>array('create')),
	array('label'=>'Gestionar Intangible', 'url'=>array('admin')),
);
?>

<h1>Intangibles</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
