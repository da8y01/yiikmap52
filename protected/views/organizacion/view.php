<?php
$this->breadcrumbs=array(
	'Organizaciones'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Organizacion', 'url'=>array('index')),
	array('label'=>'Crear Organizacion', 'url'=>array('create')),
	array('label'=>'Actualizar Organizacion', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar Organizacion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Seguro desea borrar este item?')),
	array('label'=>'Gestionar Organizacion', 'url'=>array('admin')),
);
?>

<h1>Vista Organizacion #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		'contacto',
                array(               // url mostrada como un enlace
                    'label'=>'Url',
                    'type'=>'raw',
                    'value'=>CHtml::link(CHtml::encode($model->url),
                                         $model->url,
                                         array('target'=>'_blank')
                            ),
                ),
                array(               // Sector relacionado mostrado como un enlace
                    'label'=>'Sector',
                    'type'=>'raw',
                    'value'=>CHtml::link(CHtml::encode($model->sector->nombre.' ('.$model->sector->id.')'),
                                         array('Sector/view','id'=>$model->sector->id)
                            ),
                ),
                'descripcion',
		'created_at',
		'updated_at',
	),
)); ?>
