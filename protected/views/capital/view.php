<?php
$this->breadcrumbs=array(
	'Capitales'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Capital', 'url'=>array('index')),
	array('label'=>'Crear Capital', 'url'=>array('create')),
	array('label'=>'Actualizar Capital', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar Capital', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Seguro desea borrar este item?')),
	array('label'=>'Gestionar Capital', 'url'=>array('admin')),
);
?>

<h1>Vista Capital #<?php echo $model->id; ?></h1>

<?php
$sTipoCapital = Lookup::item('TipoCapital', $model->tipo).' ('.$model->tipo.')';
$sTipoValue = '';

$oTheCapital = null;
$sCapitalValue = '';

switch ($model->tipo) {
    case 1:
        $sTipoValue = CHtml::link(CHtml::encode($sTipoCapital), array('CapitalEstructural/index'));

        $oTheCapital = CapitalEstructural::model()->findByPk($model->capital);
        $sCapitalValue = CHtml::link(CHtml::encode($oTheCapital->nombre.' ('.$oTheCapital->id.')'), array('CapitalEstructural/view', 'id'=>$oTheCapital->id));

        break;

    case 2:
        $sTipoValue = CHtml::link(CHtml::encode($sTipoCapital), array('CapitalHumano/index'));

        $oTheCapital = CapitalHumano::model()->findByPk($model->capital);
        $sCapitalValue = CHtml::link(CHtml::encode($oTheCapital->nombre.' ('.$oTheCapital->id.')'), array('CapitalHumano/view', 'id'=>$oTheCapital->id));

        break;

    case 3:
        $sTipoValue = CHtml::link(CHtml::encode($sTipoCapital), array('CapitalRelacional/index'));

        $oTheCapital = CapitalRelacional::model()->findByPk($model->capital);
        $sCapitalValue = CHtml::link(CHtml::encode($oTheCapital->orgnombre.' ('.$oTheCapital->id.')'), array('CapitalRelacional/view', 'id'=>$oTheCapital->id));

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
                array(               // nombre del Tipo de Capital
                    'label'=>'Tipo',
                    'type'=>'raw',
                    'value'=>$sTipoValue,
                ),
                array(               // capital referido
                    'label'=>'Capital',
                    'type'=>'raw',
                    'value'=>$sCapitalValue,
                ),
		'created_at',
		'updated_at',
	),
)); ?>
