<?php
$this->breadcrumbs=array(
	'Sistemas',
);

$this->menu=array(
	array('label'=>'Crear Sistema', 'url'=>array('create')),
	array('label'=>'Gestionar Sistema', 'url'=>array('admin')),
);
?>

<h1>Sistemas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
