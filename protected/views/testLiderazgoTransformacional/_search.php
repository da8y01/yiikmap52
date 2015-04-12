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
		<?php echo $form->label($model,'p01proporciono'); ?>
		<?php echo $form->textField($model,'p01proporciono'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p02reexamino'); ?>
		<?php echo $form->textField($model,'p02reexamino'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p03interfiero'); ?>
		<?php echo $form->textField($model,'p03interfiero'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p04enfoco'); ?>
		<?php echo $form->textField($model,'p04enfoco'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p05evito'); ?>
		<?php echo $form->textField($model,'p05evito'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p06hablo'); ?>
		<?php echo $form->textField($model,'p06hablo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p07ausento'); ?>
		<?php echo $form->textField($model,'p07ausento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p08perspectivas'); ?>
		<?php echo $form->textField($model,'p08perspectivas'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p09optimismo'); ?>
		<?php echo $form->textField($model,'p09optimismo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p10infundo'); ?>
		<?php echo $form->textField($model,'p10infundo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p11refiero'); ?>
		<?php echo $form->textField($model,'p11refiero'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p12espero'); ?>
		<?php echo $form->textField($model,'p12espero'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p13hablo'); ?>
		<?php echo $form->textField($model,'p13hablo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p14especifico'); ?>
		<?php echo $form->textField($model,'p14especifico'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p15dedico'); ?>
		<?php echo $form->textField($model,'p15dedico'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p16dejo'); ?>
		<?php echo $form->textField($model,'p16dejo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p17demuestro'); ?>
		<?php echo $form->textField($model,'p17demuestro'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p18abandono'); ?>
		<?php echo $form->textField($model,'p18abandono'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p19trato'); ?>
		<?php echo $form->textField($model,'p19trato'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p20demuestro'); ?>
		<?php echo $form->textField($model,'p20demuestro'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p21actuo'); ?>
		<?php echo $form->textField($model,'p21actuo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p22concentro'); ?>
		<?php echo $form->textField($model,'p22concentro'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p23considero'); ?>
		<?php echo $form->textField($model,'p23considero'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p24llevo'); ?>
		<?php echo $form->textField($model,'p24llevo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p25demuestro'); ?>
		<?php echo $form->textField($model,'p25demuestro'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p26expreso'); ?>
		<?php echo $form->textField($model,'p26expreso'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p27dirijo'); ?>
		<?php echo $form->textField($model,'p27dirijo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p28evito'); ?>
		<?php echo $form->textField($model,'p28evito'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p29considero'); ?>
		<?php echo $form->textField($model,'p29considero'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p30hago'); ?>
		<?php echo $form->textField($model,'p30hago'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p31ayudo'); ?>
		<?php echo $form->textField($model,'p31ayudo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p32sugiero'); ?>
		<?php echo $form->textField($model,'p32sugiero'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p33tardo'); ?>
		<?php echo $form->textField($model,'p33tardo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p34enfatizo'); ?>
		<?php echo $form->textField($model,'p34enfatizo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p35expreso'); ?>
		<?php echo $form->textField($model,'p35expreso'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p36expreso'); ?>
		<?php echo $form->textField($model,'p36expreso'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p37eficaz'); ?>
		<?php echo $form->textField($model,'p37eficaz'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p38utilizo'); ?>
		<?php echo $form->textField($model,'p38utilizo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p39hago'); ?>
		<?php echo $form->textField($model,'p39hago'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p40eficiente'); ?>
		<?php echo $form->textField($model,'p40eficiente'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p41trabajo'); ?>
		<?php echo $form->textField($model,'p41trabajo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p42elevo'); ?>
		<?php echo $form->textField($model,'p42elevo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p43eficiente'); ?>
		<?php echo $form->textField($model,'p43eficiente'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p44motivo'); ?>
		<?php echo $form->textField($model,'p44motivo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p45encabezo'); ?>
		<?php echo $form->textField($model,'p45encabezo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->