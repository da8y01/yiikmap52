<?php
$this->breadcrumbs=array(
	'Competencias tienen Capitales Humanos',
);

$this->menu=array(
	array('label'=>'Crear Competencia tiene Capital Humano', 'url'=>array('create')),
	array('label'=>'Gestionar Competencia tiene Capital Humano', 'url'=>array('admin')),
);
?>

<h1>Competencias tienen Capitales Humanos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
