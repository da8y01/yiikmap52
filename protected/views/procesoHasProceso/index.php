<?php
$this->breadcrumbs=array(
	'Procesos tienen Procesos',
);

$this->menu=array(
	array('label'=>'Crear ProcesoHasProceso', 'url'=>array('create')),
	array('label'=>'Gestionar ProcesoHasProceso', 'url'=>array('admin')),
);
?>

<h1>Procesos tienen Procesos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
