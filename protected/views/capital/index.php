<?php
$this->breadcrumbs=array(
	'Capitales',
);

$this->menu=array(
	array('label'=>'Crear Capital', 'url'=>array('create')),
	array('label'=>'Gestionar Capital', 'url'=>array('admin')),
);
?>

<h1>Capitales</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
