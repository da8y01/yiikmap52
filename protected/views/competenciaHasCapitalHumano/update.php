<?php
$this->breadcrumbs=array(
	'Competencias tienen Capitales Humanos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Competencia tiene Capital Humano', 'url'=>array('index')),
	array('label'=>'Crear Competencia tiene Capital Humano', 'url'=>array('create')),
	array('label'=>'Ver Competencia tiene Capital Humano', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gestionar Competencia tiene Capital Humano', 'url'=>array('admin')),
);
?>

<h1>Actualizar CompetenciaHasCapitalHumano <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>