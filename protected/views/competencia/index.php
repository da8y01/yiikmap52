<?php
$this->breadcrumbs=array(
	'Competencias',
);

$this->menu=array(
	array('label'=>'Crear Competencia', 'url'=>array('create')),
	array('label'=>'Gestionar Competencia', 'url'=>array('admin')),
);
?>

<h1>Competencias</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
