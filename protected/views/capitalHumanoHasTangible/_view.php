<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

        <b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('capital_humano_id')); ?>:</b>
        <?php echo CHtml::link(CHtml::encode($data->capitalHumano->nombre.' ('.$data->capitalHumano->id.')'), array('CapitalHumano/view', 'id'=>$data->capitalHumano->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tangible_id')); ?>:</b>
        <?php echo CHtml::link(CHtml::encode($data->tangible->nombre.' ('.$data->tangible->id.')'), array('Tangible/view', 'id'=>$data->tangible->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_at')); ?>:</b>
	<?php echo CHtml::encode($data->created_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_at')); ?>:</b>
	<?php echo CHtml::encode($data->updated_at); ?>
	<br />

</div>