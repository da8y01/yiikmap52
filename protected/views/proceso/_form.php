<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'proceso-form',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'version'); ?>
		<?php echo $form->textField($model,'version',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'version'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>32,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo'); ?>
                <?php echo $form->dropDownList($model,'tipo',Lookup::items('TipoProceso'), array('prompt'=>'Seleccionar...', 'empty'=>'Sin elementos')); ?>
		<?php echo $form->error($model,'tipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'objetivo'); ?>
		<?php echo $form->textField($model,'objetivo',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'objetivo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'organizacion_id'); ?>
                <?php echo $form->dropDownList($model, 'organizacion_id',
                        CHtml::listData(Organizacion::model()->findAll(), 'id', 'nombre', 'sector.nombre'),
                        array('prompt'=>'Seleccionar...', 'empty'=>'Sin elementos')
                ); ?>
		<?php echo $form->error($model,'organizacion_id'); ?>
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