<?php
$this->breadcrumbs=array(
	'Procesos',
);

$this->menu=array(
	array('label'=>'Crear Proceso', 'url'=>array('create')),
	array('label'=>'Gestionar Proceso', 'url'=>array('admin')),
);
?>

<h1>Procesos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
