<?php
$this->breadcrumbs=array(
	'Procesos tienen Capitales Relacionales',
);

$this->menu=array(
	array('label'=>'Crear Proceso tiene Capital Relacional', 'url'=>array('create')),
	array('label'=>'Gestionar Proceso tiene Capital Relacional', 'url'=>array('admin')),
);
?>

<h1>Procesos tienen Capitales Relacionales</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
