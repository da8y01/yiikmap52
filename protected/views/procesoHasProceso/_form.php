<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'proceso-has-proceso-form',
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
		<?php echo $form->labelEx($model,'tipo'); ?>
		<?php echo $form->textField($model,'tipo'); ?>
		<?php echo $form->error($model,'tipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'proceso_id'); ?>
		<?php echo $form->dropDownList($model, 'proceso_id',
                        CHtml::listData(Proceso::model()->findAll(), 'id', 'nombre', 'tiponombre'),
                        array('prompt'=>'Seleccionar...', 'empty'=>'Sin elementos')
                    );
                ?>
		<?php echo $form->error($model,'proceso_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'proceso_hijo_id'); ?>
		<?php echo $form->dropDownList($model, 'proceso_hijo_id',
                        CHtml::listData(Proceso::model()->findAll(), 'id', 'nombre', 'tiponombre'),
                        array('prompt'=>'Seleccionar...', 'empty'=>'Sin elementos')
                    );
                ?>
		<?php echo $form->error($model,'proceso_hijo_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->