<?php
$this->breadcrumbs=array(
	'Informaciones Secundarias',
);

$this->menu=array(
	array('label'=>'Crear InformacionSecundaria', 'url'=>array('create')),
	array('label'=>'Gestionar InformacionSecundaria', 'url'=>array('admin')),
);
?>

<h1>Informaciones Secundarias</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
