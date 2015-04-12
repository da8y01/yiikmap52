<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'competencia-form',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo'); ?>
                <?php echo $form->dropDownList($model,'tipo',Lookup::items('TipoCompetencia')); ?>
		<?php echo $form->error($model,'tipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'modelo'); ?>
                <?php echo $form->dropDownList($model,'modelo',Lookup::items('ModeloCompetencia')); ?>
		<?php echo $form->error($model,'modelo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'perfil'); ?>
		<?php echo $form->textField($model,'perfil',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'perfil'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'area_id'); ?>
                <?php echo $form->dropDownList($model, 'area_id',
                        CHtml::listData(Area::model()->findAll(), 'id', 'nombre'),
                        array('prompt'=>'Seleccionar...', 'empty'=>'Sin elementos')
                ); ?>
		<?php echo $form->error($model,'area_id'); ?>
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