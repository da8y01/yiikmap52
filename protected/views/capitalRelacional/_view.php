<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('afines')); ?>:</b>
	<?php echo CHtml::encode($data->afines); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('organizacion_id')); ?>:</b>
        <?php echo CHtml::link(CHtml::encode($data->orgnombre.' ('.$data->organizacion_id.')'), array('Organizacion/view', 'id'=>$data->organizacion_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_at')); ?>:</b>
	<?php echo CHtml::encode($data->created_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_at')); ?>:</b>
	<?php echo CHtml::encode($data->updated_at); ?>
	<br />

</div>