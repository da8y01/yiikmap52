<?php
$this->breadcrumbs=array(
	'Tests Emprendimiento',
);

$this->menu=array(
	array('label'=>'Crear TestEmprendimiento', 'url'=>array('create')),
	array('label'=>'Gestionar TestEmprendimiento', 'url'=>array('admin')),
);
?>

<h1>Tests Emprendimiento</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
