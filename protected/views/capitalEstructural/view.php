<?php
$this->breadcrumbs=array(
	'Capitales Estructurales'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Capital Estructural', 'url'=>array('index')),
	array('label'=>'Crear Capital Estructural', 'url'=>array('create')),
	array('label'=>'Actualizar Capital Estructural', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar Capital Estructural', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Seguro desea borrar este item?')),
	array('label'=>'Gestionar Capital Estructural', 'url'=>array('admin')),
);
?>

<h1>Vista CapitalEstructural #<?php echo $model->id; ?></h1>

<?php
$recurso = null;
$sUnCapital = '';

switch ($model->tipo) {
    case 1:
        $recurso = Intangible::model()->findByPk($model->un_capital);
        $sUnCapital = CHtml::link(CHtml::encode($recurso->nombre.' ('.$recurso->id.')'), array('Intangible/view', 'id'=>$recurso->id));
        break;

    case 2:
        $recurso = Tangible::model()->findByPk($model->un_capital);
        $sUnCapital = CHtml::link(CHtml::encode($recurso->nombre.' ('.$recurso->id.')'), array('Tangible/view', 'id'=>$recurso->id));
        break;

    default:
        break;
}
?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		'descripcion',
                array(               // nombre del Tipo de CapitalEstructural
                    'label'=>'Tipo',
                    'type'=>'raw',
                    'value'=>CHtml::encode(Lookup::item('TipoCapitalEstructural',$model->tipo).' ('.$model->tipo.')'),
                ),
		array(               // nombre del Tipo de CapitalEstructural
                    'label'=>'Un Capital',
                    'type'=>'raw',
                    'value'=>$sUnCapital,
                ),
		'created_at',
		'updated_at',
	),
)); ?>
