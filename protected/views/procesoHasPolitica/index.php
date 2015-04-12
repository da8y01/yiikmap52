<?php
$this->breadcrumbs=array(
	'Procesos tienen Politicas',
);

$this->menu=array(
	array('label'=>'Crear ProcesoHasPolitica', 'url'=>array('create')),
	array('label'=>'Gestionar ProcesoHasPolitica', 'url'=>array('admin')),
);
?>

<h1>Procesos tienen Politicas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
