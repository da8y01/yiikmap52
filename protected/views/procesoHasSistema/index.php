<?php
$this->breadcrumbs=array(
	'Procesos tienen Sistemas',
);

$this->menu=array(
	array('label'=>'Crear ProcesoHasSistema', 'url'=>array('create')),
	array('label'=>'Gestionar ProcesoHasSistema', 'url'=>array('admin')),
);
?>

<h1>Procesos tienen Sistemas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
