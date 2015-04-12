<?php
$this->breadcrumbs=array(
	'Organizaciones tienen Competencias',
);

$this->menu=array(
	array('label'=>'Crear Organización tiene Competencia', 'url'=>array('create')),
	array('label'=>'Gestionar Organización tiene Competencia', 'url'=>array('admin')),
);
?>

<h1>Organizaciones tienen Competencias</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
