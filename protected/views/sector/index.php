<?php
$this->breadcrumbs=array(
	'Sectores',
);

$this->menu=array(
	array('label'=>'Crear Sector', 'url'=>array('create')),
	array('label'=>'Gestionar Sector', 'url'=>array('admin')),
);
?>

<h1>Sectores</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
