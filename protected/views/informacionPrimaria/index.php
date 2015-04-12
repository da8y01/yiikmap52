<?php
$this->breadcrumbs=array(
	'Informaciones Primarias',
);

$this->menu=array(
	array('label'=>'Crear InformacionPrimaria', 'url'=>array('create')),
	array('label'=>'Gestionar InformacionPrimaria', 'url'=>array('admin')),
);
?>

<h1>Informaciones Primarias</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
