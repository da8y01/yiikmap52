<?php
$this->breadcrumbs=array(
	'Procesos tienen Normativas',
);

$this->menu=array(
	array('label'=>'Crear ProcesoHasNormativa', 'url'=>array('create')),
	array('label'=>'Gestionar ProcesoHasNormativa', 'url'=>array('admin')),
);
?>

<h1>Procesos tienen Normativas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
