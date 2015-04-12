<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'informacion-primaria-form',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'que'); ?>
		<?php echo $form->textField($model,'que',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'que'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'quien'); ?>
		<?php echo $form->textField($model,'quien',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'quien'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'como'); ?>
		<?php echo $form->textField($model,'como',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'como'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'proceso_id'); ?>
		<?php echo $form->dropDownList($model, 'proceso_id',
                        CHtml::listData(Proceso::model()->findAll(), 'id', 'nombre', 'tiponombre'),
                        array('prompt'=>'Seleccionar...', 'empty'=>'Sin elementos')
                ); ?>
		<?php echo $form->error($model,'proceso_id'); ?>
	</div>

        <div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>60,'maxlength'=>512)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->