<?php
$this->breadcrumbs=array(
	'Procesos tienen Capitales Estructurales',
);

$this->menu=array(
	array('label'=>'Crear Proceso tiene Capital Estructural', 'url'=>array('create')),
	array('label'=>'Gestionar Proceso tiene Capital Estructural', 'url'=>array('admin')),
);
?>

<h1>Procesos tienen Capitales Estructurales</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
