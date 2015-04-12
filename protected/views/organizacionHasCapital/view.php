<?php
$this->breadcrumbs=array(
	'Organizaciones tienen Capitales'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Organización tiene Capital', 'url'=>array('index')),
	array('label'=>'Crear Organización tiene Capital', 'url'=>array('create')),
	array('label'=>'Actualizar Organización tiene Capital', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar Organización tiene Capital', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Seguro desea borrar este item?')),
	array('label'=>'Gestionar Organización tiene Capital', 'url'=>array('admin')),
);
?>

<h1>Vista OrganizacionHasCapital #<?php echo $model->id; ?></h1>

<?php
$oUnCapital = null;
$sCapitalValue = '';

switch ($model->capital->tipo) {
    case 1:
        $oUnCapital = CapitalEstructural::model()->findByPk($model->capital->capital);
        $sCapitalValue = CHtml::link(CHtml::encode($oUnCapital->nombre.' ('.$model->capital->id.')'), array('Capital/view', 'id'=>$model->capital->id));
        break;

    case 2:
        $oUnCapital = CapitalHumano::model()->findByPk($model->capital->capital);
        $sCapitalValue = CHtml::link(CHtml::encode($oUnCapital->nombre.' ('.$model->capital->id.')'), array('Capital/view', 'id'=>$model->capital->id));
        break;

    case 3:
        $oUnCapital = CapitalRelacional::model()->findByPk($model->capital->capital);
        $sCapitalValue = CHtml::link(CHtml::encode($oUnCapital->orgnombre.' ('.$model->capital->id.')'), array('Capital/view', 'id'=>$model->capital->id));
        break;

    default:
        break;
}
?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'descripcion',
                array(
                    'label'=>'Organización',
                    'type'=>'raw',
                    'value'=>CHtml::link(CHtml::encode($model->organizacion->nombre.' ('.$model->organizacion->id.')'), array('Organizacion/view', 'id'=>$model->organizacion->id))
                ),
                array(
                    'label'=>'Capital',
                    'type'=>'raw',
                    'value'=>$sCapitalValue
                ),
		'created_at',
		'updated_at',
	),
)); ?>
