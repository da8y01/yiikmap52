<?php
$this->breadcrumbs=array(
	'Organizaciones tienen Competencias'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Organización tiene Competencia', 'url'=>array('index')),
	array('label'=>'Crear Organización tiene Competencia', 'url'=>array('create')),
	array('label'=>'Ver Organización tiene Competencia', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gestionar Organización tiene Competencia', 'url'=>array('admin')),
);
?>

<h1>Actualizar OrganizacionHasCompetencia <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>