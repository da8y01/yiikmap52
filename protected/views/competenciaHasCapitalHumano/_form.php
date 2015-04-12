<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'competencia-has-capital-humano-form',
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
		<?php echo $form->labelEx($model,'competencia_id'); ?>
                <?php echo $form->dropDownList($model, 'competencia_id',
                        CHtml::listData(Competencia::model()->findAll(), 'id', 'nombre', 'area.nombre'),
                        array('prompt'=>'Seleccionar...', 'empty'=>'Sin elementos')
                ); ?>
		<?php echo $form->error($model,'competencia_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'capital_humano_id'); ?>
                <?php echo $form->dropDownList($model, 'capital_humano_id',
                        CHtml::listData(CapitalHumano::model()->findAll(), 'id', 'nombre', 'tiponombre'),
                        array('prompt'=>'Seleccionar...', 'empty'=>'Sin elementos')
                ); ?>
		<?php echo $form->error($model,'capital_humano_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
