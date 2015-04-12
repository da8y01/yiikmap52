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

	<b><?php echo CHtml::encode($data->getAttributeLabel('capital_id')); ?>:</b>
        <?php
        $oUnCapital = null;

        switch ($data->capital->tipo) {
            case 1:
                $oUnCapital = CapitalEstructural::model()->findByPk($data->capital->capital);
                echo CHtml::link(CHtml::encode($oUnCapital->nombre.' ('.$data->capital->id.')'), array('Capital/view', 'id'=>$data->capital->id));
                break;

            case 2:
                $oUnCapital = CapitalHumano::model()->findByPk($data->capital->capital);
                echo CHtml::link(CHtml::encode($oUnCapital->nombre.' ('.$data->capital->id.')'), array('Capital/view', 'id'=>$data->capital->id));
                break;

            case 3:
                $oUnCapital = CapitalRelacional::model()->findByPk($data->capital->capital);
                echo CHtml::link(CHtml::encode($oUnCapital->orgnombre.' ('.$data->capital->id.')'), array('Capital/view', 'id'=>$data->capital->id));
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