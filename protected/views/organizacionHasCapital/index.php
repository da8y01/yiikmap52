<?php
$this->breadcrumbs=array(
	'Organizaciones tienen Capitales',
);

$this->menu=array(
	array('label'=>'Crear Organización tiene Capital', 'url'=>array('create')),
	array('label'=>'Gestionar Organización tiene Capital', 'url'=>array('admin')),
);
?>

<h1>Organizaciones tienen Capitales</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
