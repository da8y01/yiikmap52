<?php
$this->breadcrumbs=array(
	'Normativas',
);

$this->menu=array(
	array('label'=>'Crear Normativa', 'url'=>array('create')),
	array('label'=>'Gestionar Normativa', 'url'=>array('admin')),
);
?>

<h1>Normativas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
