<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('capital_humano_id')); ?>:</b>
        <?php $capitalhumano = CapitalHumano::model()->findByPk($data->capital_humano_id); ?>
        <?php echo CHtml::link(CHtml::encode($capitalhumano->nombre), array('capitalhumano/view', 'id'=>$capitalhumano->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p201estimula')); ?>:</b>
	<?php echo CHtml::encode($data->p201estimula); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p202predisposicion')); ?>:</b>
	<?php echo CHtml::encode($data->p202predisposicion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p203iniciativa')); ?>:</b>
	<?php echo CHtml::encode($data->p203iniciativa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p204dedica')); ?>:</b>
	<?php echo CHtml::encode($data->p204dedica); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p205relaciona')); ?>:</b>
	<?php echo CHtml::encode($data->p205relaciona); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('p206autonomia')); ?>:</b>
	<?php echo CHtml::encode($data->p206autonomia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p207responsabilidad')); ?>:</b>
	<?php echo CHtml::encode($data->p207responsabilidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p208independiente')); ?>:</b>
	<?php echo CHtml::encode($data->p208independiente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p209prever')); ?>:</b>
	<?php echo CHtml::encode($data->p209prever); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p210objetivos')); ?>:</b>
	<?php echo CHtml::encode($data->p210objetivos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p211experiencia')); ?>:</b>
	<?php echo CHtml::encode($data->p211experiencia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p212equipo')); ?>:</b>
	<?php echo CHtml::encode($data->p212equipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p31explica')); ?>:</b>
	<?php echo CHtml::encode($data->p31explica); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p32iniciar')); ?>:</b>
	<?php echo CHtml::encode($data->p32iniciar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p33oportuno')); ?>:</b>
	<?php echo CHtml::encode($data->p33oportuno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p34convencido')); ?>:</b>
	<?php echo CHtml::encode($data->p34convencido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p35arranque')); ?>:</b>
	<?php echo CHtml::encode($data->p35arranque); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p36presupuesto')); ?>:</b>
	<?php echo CHtml::encode($data->p36presupuesto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p37contacto')); ?>:</b>
	<?php echo CHtml::encode($data->p37contacto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p38invertiria')); ?>:</b>
	<?php echo CHtml::encode($data->p38invertiria); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p39conoce')); ?>:</b>
	<?php echo CHtml::encode($data->p39conoce); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p41empresas')); ?>:</b>
	<?php echo CHtml::encode($data->p41empresas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p42actuan')); ?>:</b>
	<?php echo CHtml::encode($data->p42actuan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p43datos')); ?>:</b>
	<?php echo CHtml::encode($data->p43datos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p44convencido')); ?>:</b>
	<?php echo CHtml::encode($data->p44convencido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p45vista')); ?>:</b>
	<?php echo CHtml::encode($data->p45vista); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p46mercado')); ?>:</b>
	<?php echo CHtml::encode($data->p46mercado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p47mecanismos')); ?>:</b>
	<?php echo CHtml::encode($data->p47mecanismos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p48situacion')); ?>:</b>
	<?php echo CHtml::encode($data->p48situacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_at')); ?>:</b>
	<?php echo CHtml::encode($data->created_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_at')); ?>:</b>
	<?php echo CHtml::encode($data->updated_at); ?>
	<br />

	*/ ?>

        <b><?php echo CHtml::encode($data->getAttributeLabel('created_at')); ?>:</b>
	<?php echo CHtml::encode($data->created_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_at')); ?>:</b>
	<?php echo CHtml::encode($data->updated_at); ?>
	<br />

</div>