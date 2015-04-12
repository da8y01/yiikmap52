<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'capital-estructural-form',
	'enableAjaxValidation'=>true,
)); 

$cs= Yii::app()->getClientScript();
$cs->registerScriptFile(Yii::app()->request->baseUrl.'/js/functions.js',CClientScript::POS_HEAD );

?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>32,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>60,'maxlength'=>512)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo'); ?>
                <?php echo $form->dropDownList($model, 'tipo',
                        Lookup::items('TipoCapitalEstructural'),
                        array('prompt'=>'Seleccionar...', 'empty'=>'Sin elementos', 'onchange'=>'return oculta()','id'=>'tipo'));
                ?>
		<?php echo $form->error($model,'tipo'); ?>
	</div>

        <div class="row" id="dCapEstInt">
		<?php echo CHtml::label('Un Capital Intangible', NULL); ?>
                <?php echo CHtml::dropDownList('ddlCapEstInt', 'un_capital',
                        CHtml::listData(Intangible::model()->findAll(), 'id', 'nombre'),
                        array('prompt'=>'Seleccionar...', 'empty'=>'Sin elementos'))
                ?>
		<?php echo $form->error($model,'un_capital_Int'); ?>
	</div>

        <div class="row" id="dCapEstTan">
		<?php echo CHtml::label('Un Capital Tangible', NULL); ?>
                <?php echo CHtml::dropDownList('ddlCapEstTan', 'un_capital',
                        CHtml::listData(Tangible::model()->findAll(), 'id', 'nombre'),
                        array('prompt'=>'Seleccionar...', 'empty'=>'Sin elementos'))
                ?>
		<?php echo $form->error($model,'un_capital_Tan'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
