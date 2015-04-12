<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'organizacion-has-capital-form',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>60,'maxlength'=>512)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'organizacion_id'); ?>
                <?php echo $form->dropDownList($model,'organizacion_id',
                        CHtml::listData(Organizacion::model()->findAll(), 'id', 'nombre', 'sector.nombre'),
                        array('prompt'=>'Seleccionar...', 'empty'=>'Sin elementos')
                    );
                ?>
		<?php echo $form->error($model,'organizacion_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'capital_id'); ?>
                <?php echo $form->dropDownList($model,'capital_id',
                        CHtml::listData(Capital::model()->findAll(), 'id', 'capitalnombre', 'tiponombre'),
                        array('prompt'=>'Seleccionar...', 'empty'=>'Sin elementos')
                    );
                ?>
		<?php echo $form->error($model,'capital_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
