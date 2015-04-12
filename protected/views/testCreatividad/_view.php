<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('capital_humano_id')); ?>:</b>
        <?php $capitalhumano = CapitalHumano::model()->findByPk($data->capital_humano_id); ?>
        <?php echo CHtml::link(CHtml::encode($capitalhumano->nombre), array('capitalhumano/view', 'id'=>$capitalhumano->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p01productividad')); ?>:</b>
	<?php echo CHtml::encode($data->p01productividad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p02agilidad')); ?>:</b>
	<?php echo CHtml::encode($data->p02agilidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p03originalidad')); ?>:</b>
	<?php echo CHtml::encode($data->p03originalidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p04diversion')); ?>:</b>
	<?php echo CHtml::encode($data->p04diversion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p05automotivacion')); ?>:</b>
	<?php echo CHtml::encode($data->p05automotivacion); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('p06persistencia')); ?>:</b>
	<?php echo CHtml::encode($data->p06persistencia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p07lenguajes')); ?>:</b>
	<?php echo CHtml::encode($data->p07lenguajes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p08variedad')); ?>:</b>
	<?php echo CHtml::encode($data->p08variedad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p09fluencia')); ?>:</b>
	<?php echo CHtml::encode($data->p09fluencia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p10visualizacion')); ?>:</b>
	<?php echo CHtml::encode($data->p10visualizacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p11analogia')); ?>:</b>
	<?php echo CHtml::encode($data->p11analogia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p12problemas')); ?>:</b>
	<?php echo CHtml::encode($data->p12problemas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p13experimentos')); ?>:</b>
	<?php echo CHtml::encode($data->p13experimentos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p14innovacion')); ?>:</b>
	<?php echo CHtml::encode($data->p14innovacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p15inventiva')); ?>:</b>
	<?php echo CHtml::encode($data->p15inventiva); ?>
	<br />

	*/ ?>

        <b><?php echo CHtml::encode($data->getAttributeLabel('created_at')); ?>:</b>
	<?php echo CHtml::encode($data->created_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_at')); ?>:</b>
	<?php echo CHtml::encode($data->updated_at); ?>
	<br />

</div>