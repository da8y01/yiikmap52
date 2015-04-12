<?php
$this->breadcrumbs=array(
	'Documentaciones',
);

$this->menu=array(
	array('label'=>'Crear Documentacion', 'url'=>array('create')),
	array('label'=>'Gestionar Documentacion', 'url'=>array('admin')),
);
?>

<h1>Documentaciones</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
