<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo')); ?>:</b>
        <?php echo CHtml::encode(Lookup::item('TipoCapitalHumano',$data->tipo).' ('.$data->tipo.')'); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contacto')); ?>:</b>
	<?php echo CHtml::encode($data->contacto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('secundaria')); ?>:</b>
	<?php echo CHtml::encode($data->secundaria); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_at')); ?>:</b>
	<?php echo CHtml::encode($data->created_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_at')); ?>:</b>
	<?php echo CHtml::encode($data->updated_at); ?>
	<br />

</div>