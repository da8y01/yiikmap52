<?php
$this->breadcrumbs=array(
	'Políticas',
);

$this->menu=array(
	array('label'=>'Crear Politica', 'url'=>array('create')),
	array('label'=>'Gestionar Politica', 'url'=>array('admin')),
);
?>

<h1>Pol&iacute;ticas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
