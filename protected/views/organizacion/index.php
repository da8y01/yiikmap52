<?php
$this->breadcrumbs=array(
	'Organizaciones',
);

$this->menu=array(
	array('label'=>'Crear Organizacion', 'url'=>array('create')),
	array('label'=>'Gestionar Organizacion', 'url'=>array('admin')),
);
?>

<h1>Organizaciones</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
