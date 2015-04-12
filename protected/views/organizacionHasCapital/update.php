<?php
$this->breadcrumbs=array(
	'Organizaciones tienen Capitales'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Organización tiene Capital', 'url'=>array('index')),
	array('label'=>'Crear Organización tiene Capital', 'url'=>array('create')),
	array('label'=>'Ver Organización tiene Capital', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gestionar Organización tiene Capital', 'url'=>array('admin')),
);
?>

<h1>Actualizar OrganizacionHasCapital <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>