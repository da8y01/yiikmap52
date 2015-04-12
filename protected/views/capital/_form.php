<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'capital-form',
	'enableAjaxValidation'=>true,
));

$cs= Yii::app()->getClientScript();
$cs->registerScriptFile(Yii::app()->request->baseUrl.'/js/functionsCapital.js',CClientScript::POS_HEAD );

?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>60,'maxlength'=>512)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

        <div class="row">
		<?php echo $form->labelEx($model,'tipo'); ?>
                <?php echo $form->dropDownList($model, 'tipo', Lookup::items('TipoCapital'), array('prompt'=>'Seleccionar...', 'empty'=>'Sin elementos', 'onchange'=>'return ocultaTipoCapital()', 'id'=>'tipo')); ?>
		<?php echo $form->error($model,'tipo'); ?>
	</div>

        <div class="row" id="dCapEst">
		<?php echo CHtml::label('Capital Estructural', 'ddlCapEst'); ?>
                <?php echo CHtml::dropDownList('ddlCapEst', 'capital',
                        CHtml::listData(CapitalEstructural::model()->findAll(), 'id', 'nombre', 'tiponombre'),
                        array('prompt'=>'Seleccionar...', 'empty' => 'Sin elementos')
                    );
                ?>
		<?php echo $form->error($model,'capital'); ?>
	</div>
        <div class="row" id="dCapHum">
		<?php echo CHtml::label('Capital Humano', 'ddlCapHum'); ?>
                <?php echo CHtml::dropDownList('ddlCapHum', 'capital',
                        CHtml::listData(CapitalHumano::model()->findAll(), 'id', 'nombre', 'tiponombre'),
                        array('prompt'=>'Seleccionar...', 'empty' => 'Sin elementos')
                    );
                ?>
		<?php echo $form->error($model,'capital'); ?>
	</div>
        <div class="row" id="dCapRel">
		<?php echo CHtml::label('Capital Relacional', 'ddlCapRel'); ?>
                <?php echo CHtml::dropDownList('ddlCapRel', 'capital',
                        CHtml::listData(CapitalRelacional::model()->findAll(), 'id', 'orgnombre', 'orgsector'),
                        array('prompt'=>'Seleccionar...', 'empty' => 'Sin elementos')
                    );
                ?>
		<?php echo $form->error($model,'capital'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->