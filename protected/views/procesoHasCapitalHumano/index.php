<?php
$this->breadcrumbs=array(
	'Procesos tienen Capitales Humanos',
);

$this->menu=array(
	array('label'=>'Crear Proceso tiene Capital Humano', 'url'=>array('create')),
	array('label'=>'Gestionar Proceso tiene Capital Humano', 'url'=>array('admin')),
);
?>

<h1>Procesos tienen Capitales Humanos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
