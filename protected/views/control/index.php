<?php
$this->breadcrumbs=array(
	'Controles',
);

$this->menu=array(
	array('label'=>'Crear Control', 'url'=>array('create')),
	array('label'=>'Gestionar Control', 'url'=>array('admin')),
);
?>

<h1>Controles</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
