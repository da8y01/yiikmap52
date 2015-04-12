<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'capital-humano-form',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo'); ?>
                <?php echo $form->dropDownList($model,'tipo',Lookup::items('TipoCapitalHumano'), array('prompt'=>'Seleccionar...')); ?>
		<?php echo $form->error($model,'tipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contacto'); ?>
		<?php echo $form->textField($model,'contacto',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'contacto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'secundaria'); ?>
		<?php echo $form->textField($model,'secundaria',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'secundaria'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
