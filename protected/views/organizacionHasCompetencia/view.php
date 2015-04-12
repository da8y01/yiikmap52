<?php
$this->breadcrumbs=array(
	'Organizaciones tienen Competencias'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Organización tiene Competencia', 'url'=>array('index')),
	array('label'=>'Crear Organización tiene Competencia', 'url'=>array('create')),
	array('label'=>'Actualizar Organización tiene Competencia', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar Organización tiene Competencia', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Seguro desea borrar este item?')),
	array('label'=>'Gestionar Organización tiene Competencia', 'url'=>array('admin')),
);
?>

<h1>Vista OrganizacionHasCompetencia #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'descripcion',
                array(               // Organizacion relacionada mostrada como un enlace
                    'label'=>'Organización',
                    'type'=>'raw',
                    'value'=>CHtml::link(CHtml::encode($model->organizacion->nombre.' ('.$model->organizacion->id.')'),
                                         array('Organizacion/view','id'=>$model->organizacion->id)
                            ),
                ),
                array(               // Competencia relacionada mostrada como un enlace
                    'label'=>'Competencia',
                    'type'=>'raw',
                    'value'=>CHtml::link(CHtml::encode($model->competencia->nombre.' ('.$model->competencia->id.')'),
                                         array('Competencia/view','id'=>$model->competencia->id)
                            ),
                ),
		'created_at',
		'updated_at',
	),
)); ?>
