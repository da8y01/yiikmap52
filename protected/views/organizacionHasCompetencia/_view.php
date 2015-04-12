<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('organizacion_id')); ?>:</b>
        <?php echo CHtml::link(CHtml::encode($data->organizacion->nombre.' ('.$data->organizacion->id.')'), array('Organizacion/view', 'id'=>$data->organizacion->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('competencia_id')); ?>:</b>
        <?php echo CHtml::link(CHtml::encode($data->competencia->nombre.' ('.$data->competencia->id.')'), array('Competencia/view', 'id'=>$data->competencia->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_at')); ?>:</b>
	<?php echo CHtml::encode($data->created_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_at')); ?>:</b>
	<?php echo CHtml::encode($data->updated_at); ?>
	<br />

</div>