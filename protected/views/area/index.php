<?php
$this->breadcrumbs=array(
	'Áreas',
);

$this->menu=array(
	array('label'=>'Crear Area', 'url'=>array('create')),
	array('label'=>'Gestionar Area', 'url'=>array('admin')),
);
?>

<h1>&Aacute;reas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
