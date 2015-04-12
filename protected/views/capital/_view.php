<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

        <b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />


        <?php
        $sTipoCapital = Lookup::item('TipoCapital', $data->tipo).' ('.$data->tipo.')';
        $sTipoValue = '';

        $oTheCapital = null;
        $sCapitalValue = '';

        switch ($data->tipo) {
            case 1:
                $sTipoValue = CHtml::link(CHtml::encode($sTipoCapital), array('CapitalEstructural/index'));

                $oTheCapital = CapitalEstructural::model()->findByPk($data->capital);
                $sCapitalValue = CHtml::link(CHtml::encode($oTheCapital->nombre.' ('.$oTheCapital->id.')'), array('CapitalEstructural/view', 'id'=>$oTheCapital->id));

                break;

            case 2:
                $sTipoValue = CHtml::link(CHtml::encode($sTipoCapital), array('CapitalHumano/index'));

                $oTheCapital = CapitalHumano::model()->findByPk($data->capital);
                $sCapitalValue = CHtml::link(CHtml::encode($oTheCapital->nombre.' ('.$oTheCapital->id.')'), array('CapitalHumano/view', 'id'=>$oTheCapital->id));

                break;

            case 3:
                $sTipoValue = CHtml::link(CHtml::encode($sTipoCapital), array('CapitalRelacional/index'));

                $oTheCapital = CapitalRelacional::model()->findByPk($data->capital);
                $sCapitalValue = CHtml::link(CHtml::encode($oTheCapital->orgnombre.' ('.$oTheCapital->id.')'), array('CapitalRelacional/view', 'id'=>$oTheCapital->id));

                break;

            default:
                break;
        }
        ?>


	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo')); ?>:</b>
        <?php echo $sTipoValue; ?>
	<br />

        <b><?php echo CHtml::encode($data->getAttributeLabel('capital')); ?>:</b>
        <?php echo $sCapitalValue; ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_at')); ?>:</b>
	<?php echo CHtml::encode($data->created_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_at')); ?>:</b>
	<?php echo CHtml::encode($data->updated_at); ?>
	<br />

</div>