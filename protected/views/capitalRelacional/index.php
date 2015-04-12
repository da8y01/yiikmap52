<?php
$this->breadcrumbs=array(
	'Capitales Relacionales',
);

$this->menu=array(
	array('label'=>'Crear Capital Relacional', 'url'=>array('create')),
	array('label'=>'Gestionar Capital Relacional', 'url'=>array('admin')),
);
?>

<h1>Capitales Relacionales</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
