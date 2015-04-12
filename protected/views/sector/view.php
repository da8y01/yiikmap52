<?php
$this->breadcrumbs=array(
	'Sectores'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Sector', 'url'=>array('index')),
	array('label'=>'Crear Sector', 'url'=>array('create')),
	array('label'=>'Actualizar Sector', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar Sector', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Seguro desea borrar este item?')),
	array('label'=>'Gestionar Sector', 'url'=>array('admin')),
);
?>

<h1>Vista Sector #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		'descripcion',
		'created_at',
		'updated_at',
	),
)); ?>
