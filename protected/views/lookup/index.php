<?php
$this->breadcrumbs=array(
	'Lookups',
);

$this->menu=array(
	array('label'=>'Crear Lookup', 'url'=>array('create')),
	array('label'=>'Gestionar Lookup', 'url'=>array('admin')),
);
?>

<h1>Lookups</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
