<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo')); ?>:</b>
	<?php echo CHtml::encode(Lookup::item('TipoCapitalEstructural',$data->tipo).' ('.$data->tipo.')'); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('un_capital')); ?>:</b>
        <?php
        $recurso = null;

        switch ($data->tipo) {
            case 1:
                $recurso = Intangible::model()->findByPk($data->un_capital);
                echo CHtml::link(CHtml::encode($recurso->nombre.' ('.$recurso->id.')'), array('Intangible/view', 'id'=>$recurso->id));
                break;

            case 2:
                $recurso = Tangible::model()->findByPk($data->un_capital);
                echo CHtml::link(CHtml::encode($recurso->nombre.' ('.$recurso->id.')'), array('Tangible/view', 'id'=>$recurso->id));
                break;

            default:
                break;
        }
        ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_at')); ?>:</b>
	<?php echo CHtml::encode($data->created_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_at')); ?>:</b>
	<?php echo CHtml::encode($data->updated_at); ?>
	<br />

</div>