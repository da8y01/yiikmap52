<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('version')); ?>:</b>
	<?php echo CHtml::encode($data->version); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo')); ?>:</b>
	<?php echo CHtml::encode(Lookup::item('TipoProceso',$data->tipo).' ('.$data->tipo.')'); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('objetivo')); ?>:</b>
	<?php echo CHtml::encode($data->objetivo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('organizacion_id')); ?>:</b>
        <?php echo CHtml::link(CHtml::encode($data->organizacion->nombre.' ('.$data->organizacion->id.')'), array('organizacion/view', 'id'=>$data->organizacion->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('capital_humano_id')); ?>:</b>
        <?php echo CHtml::link(CHtml::encode($data->capitalHumano->nombre.' ('.$data->capitalHumano->id.')'), array('capitalhumano/view', 'id'=>$data->capitalHumano->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_at')); ?>:</b>
	<?php echo CHtml::encode($data->created_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_at')); ?>:</b>
	<?php echo CHtml::encode($data->updated_at); ?>
	<br />

</div>