<?php
$this->breadcrumbs=array(
	'Informaciones Secundarias'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar InformacionSecundaria', 'url'=>array('index')),
	array('label'=>'Gestionar InformacionSecundaria', 'url'=>array('admin')),
);
?>

<h1>Crear InformacionSecundaria</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>