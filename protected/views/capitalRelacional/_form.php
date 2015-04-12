<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'capital-relacional-form',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'afines'); ?>
		<?php echo $form->textField($model,'afines',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'afines'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'organizacion_id'); ?>
                <?php echo $form->dropDownList($model,'organizacion_id',
                        CHtml::listData(Organizacion::model()->findAll(), 'id', 'nombre', 'sector.nombre'),
                        array('prompt'=>'Seleccionar...', 'empty'=>'Sin elementos')
                ); ?>
		<?php echo $form->error($model,'organizacion_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->