<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'capital_humano_id'); ?>
		<?php echo $form->textField($model,'capital_humano_id'); ?>
	</div>

        <div class="row">
		<?php echo $form->label($model,'created_at'); ?>
		<?php echo $form->textField($model,'created_at'); ?>
	</div>

        <div class="row">
		<?php echo $form->label($model,'updated_at'); ?>
		<?php echo $form->textField($model,'updated_at'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p01productividad'); ?>
		<?php echo $form->textField($model,'p01productividad'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p02agilidad'); ?>
		<?php echo $form->textField($model,'p02agilidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p03originalidad'); ?>
		<?php echo $form->textField($model,'p03originalidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p04diversion'); ?>
		<?php echo $form->textField($model,'p04diversion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p05automotivacion'); ?>
		<?php echo $form->textField($model,'p05automotivacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p06persistencia'); ?>
		<?php echo $form->textField($model,'p06persistencia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p07lenguajes'); ?>
		<?php echo $form->textField($model,'p07lenguajes'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p08variedad'); ?>
		<?php echo $form->textField($model,'p08variedad'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p09fluencia'); ?>
		<?php echo $form->textField($model,'p09fluencia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p10visualizacion'); ?>
		<?php echo $form->textField($model,'p10visualizacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p11analogia'); ?>
		<?php echo $form->textField($model,'p11analogia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p12problemas'); ?>
		<?php echo $form->textField($model,'p12problemas'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p13experimentos'); ?>
		<?php echo $form->textField($model,'p13experimentos'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p14innovacion'); ?>
		<?php echo $form->textField($model,'p14innovacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p15inventiva'); ?>
		<?php echo $form->textField($model,'p15inventiva'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->