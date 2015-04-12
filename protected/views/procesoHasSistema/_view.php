<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('proceso_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->proceso->nombre.' ('.$data->proceso->id.')'), array('Proceso/view', 'id'=>$data->proceso->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sistema_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->sistema->nombre.' ('.$data->sistema->id.')'), array('Sistema/view', 'id'=>$data->sistema->id)); ?>
	<br />

        <b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_at')); ?>:</b>
	<?php echo CHtml::encode($data->created_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_at')); ?>:</b>
	<?php echo CHtml::encode($data->updated_at); ?>
	<br />

</div>