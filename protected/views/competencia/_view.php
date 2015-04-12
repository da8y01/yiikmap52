<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo')); ?>:</b>
        <?php echo CHtml::encode(Lookup::item('TipoCompetencia',$data->tipo).' ('.$data->tipo.')'); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modelo')); ?>:</b>
        <?php echo CHtml::encode(Lookup::item('ModeloCompetencia',$data->modelo).' ('.$data->modelo.')'); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('perfil')); ?>:</b>
	<?php echo CHtml::encode($data->perfil); ?>
	<br />

        <b><?php echo CHtml::encode($data->getAttributeLabel('area_id')); ?>:</b>
        <?php echo CHtml::link(CHtml::encode($data->area->nombre.' ('.$data->area->id.')'), array('Area/view', 'id'=>$data->area->id)); ?>
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