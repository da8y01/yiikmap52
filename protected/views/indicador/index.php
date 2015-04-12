<?php
$this->breadcrumbs=array(
	'Indicadores',
);

$this->menu=array(
	array('label'=>'Crear Indicador', 'url'=>array('create')),
	array('label'=>'Gestionar Indicador', 'url'=>array('admin')),
);
?>

<h1>Indicadores</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
