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
		<?php echo $form->label($model,'p201estimula'); ?>
		<?php echo $form->textField($model,'p201estimula'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p202predisposicion'); ?>
		<?php echo $form->textField($model,'p202predisposicion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p203iniciativa'); ?>
		<?php echo $form->textField($model,'p203iniciativa'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p204dedica'); ?>
		<?php echo $form->textField($model,'p204dedica'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p205relaciona'); ?>
		<?php echo $form->textField($model,'p205relaciona'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p206autonomia'); ?>
		<?php echo $form->textField($model,'p206autonomia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p207responsabilidad'); ?>
		<?php echo $form->textField($model,'p207responsabilidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p208independiente'); ?>
		<?php echo $form->textField($model,'p208independiente'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p209prever'); ?>
		<?php echo $form->textField($model,'p209prever'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p210objetivos'); ?>
		<?php echo $form->textField($model,'p210objetivos'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p211experiencia'); ?>
		<?php echo $form->textField($model,'p211experiencia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p212equipo'); ?>
		<?php echo $form->textField($model,'p212equipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p31explica'); ?>
		<?php echo $form->textField($model,'p31explica'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p32iniciar'); ?>
		<?php echo $form->textField($model,'p32iniciar'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p33oportuno'); ?>
		<?php echo $form->textField($model,'p33oportuno'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p34convencido'); ?>
		<?php echo $form->textField($model,'p34convencido'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p35arranque'); ?>
		<?php echo $form->textField($model,'p35arranque'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p36presupuesto'); ?>
		<?php echo $form->textField($model,'p36presupuesto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p37contacto'); ?>
		<?php echo $form->textField($model,'p37contacto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p38invertiria'); ?>
		<?php echo $form->textField($model,'p38invertiria'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p39conoce'); ?>
		<?php echo $form->textField($model,'p39conoce'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p41empresas'); ?>
		<?php echo $form->textField($model,'p41empresas'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p42actuan'); ?>
		<?php echo $form->textField($model,'p42actuan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p43datos'); ?>
		<?php echo $form->textField($model,'p43datos'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p44convencido'); ?>
		<?php echo $form->textField($model,'p44convencido'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p45vista'); ?>
		<?php echo $form->textField($model,'p45vista'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p46mercado'); ?>
		<?php echo $form->textField($model,'p46mercado'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p47mecanismos'); ?>
		<?php echo $form->textField($model,'p47mecanismos'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p48situacion'); ?>
		<?php echo $form->textField($model,'p48situacion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->