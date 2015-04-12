<?php
$this->breadcrumbs=array(
	'Capitales Estructurales',
);

$this->menu=array(
	array('label'=>'Crear Capital Estructural', 'url'=>array('create')),
	array('label'=>'Gestionar Capital Estructural', 'url'=>array('admin')),
);
?>

<h1>Capitales Estructurales</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
