<?php
$this->breadcrumbs=array(
	'Capitales Humanos',
);

$this->menu=array(
	array('label'=>'Crear Capital Humano', 'url'=>array('create')),
	array('label'=>'Gestionar Capital Humano', 'url'=>array('admin')),
);
?>

<h1>Capitales Humanos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
