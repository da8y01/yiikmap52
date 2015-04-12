<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('capital_humano_id')); ?>:</b>
        <?php echo CHtml::link(CHtml::encode($data->capitalHumano->nombre), array('CapitalHumano/view', 'id'=>$data->capitalHumano->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p01proporciono')); ?>:</b>
	<?php echo CHtml::encode($data->p01proporciono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p02reexamino')); ?>:</b>
	<?php echo CHtml::encode($data->p02reexamino); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p03interfiero')); ?>:</b>
	<?php echo CHtml::encode($data->p03interfiero); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p04enfoco')); ?>:</b>
	<?php echo CHtml::encode($data->p04enfoco); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p05evito')); ?>:</b>
	<?php echo CHtml::encode($data->p05evito); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('p06hablo')); ?>:</b>
	<?php echo CHtml::encode($data->p06hablo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p07ausento')); ?>:</b>
	<?php echo CHtml::encode($data->p07ausento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p08perspectivas')); ?>:</b>
	<?php echo CHtml::encode($data->p08perspectivas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p09optimismo')); ?>:</b>
	<?php echo CHtml::encode($data->p09optimismo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p10infundo')); ?>:</b>
	<?php echo CHtml::encode($data->p10infundo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p11refiero')); ?>:</b>
	<?php echo CHtml::encode($data->p11refiero); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p12espero')); ?>:</b>
	<?php echo CHtml::encode($data->p12espero); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p13hablo')); ?>:</b>
	<?php echo CHtml::encode($data->p13hablo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p14especifico')); ?>:</b>
	<?php echo CHtml::encode($data->p14especifico); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p15dedico')); ?>:</b>
	<?php echo CHtml::encode($data->p15dedico); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p16dejo')); ?>:</b>
	<?php echo CHtml::encode($data->p16dejo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p17demuestro')); ?>:</b>
	<?php echo CHtml::encode($data->p17demuestro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p18abandono')); ?>:</b>
	<?php echo CHtml::encode($data->p18abandono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p19trato')); ?>:</b>
	<?php echo CHtml::encode($data->p19trato); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p20demuestro')); ?>:</b>
	<?php echo CHtml::encode($data->p20demuestro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p21actuo')); ?>:</b>
	<?php echo CHtml::encode($data->p21actuo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p22concentro')); ?>:</b>
	<?php echo CHtml::encode($data->p22concentro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p23considero')); ?>:</b>
	<?php echo CHtml::encode($data->p23considero); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p24llevo')); ?>:</b>
	<?php echo CHtml::encode($data->p24llevo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p25demuestro')); ?>:</b>
	<?php echo CHtml::encode($data->p25demuestro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p26expreso')); ?>:</b>
	<?php echo CHtml::encode($data->p26expreso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p27dirijo')); ?>:</b>
	<?php echo CHtml::encode($data->p27dirijo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p28evito')); ?>:</b>
	<?php echo CHtml::encode($data->p28evito); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p29considero')); ?>:</b>
	<?php echo CHtml::encode($data->p29considero); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p30hago')); ?>:</b>
	<?php echo CHtml::encode($data->p30hago); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p31ayudo')); ?>:</b>
	<?php echo CHtml::encode($data->p31ayudo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p32sugiero')); ?>:</b>
	<?php echo CHtml::encode($data->p32sugiero); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p33tardo')); ?>:</b>
	<?php echo CHtml::encode($data->p33tardo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p34enfatizo')); ?>:</b>
	<?php echo CHtml::encode($data->p34enfatizo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p35expreso')); ?>:</b>
	<?php echo CHtml::encode($data->p35expreso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p36expreso')); ?>:</b>
	<?php echo CHtml::encode($data->p36expreso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p37eficaz')); ?>:</b>
	<?php echo CHtml::encode($data->p37eficaz); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p38utilizo')); ?>:</b>
	<?php echo CHtml::encode($data->p38utilizo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p39hago')); ?>:</b>
	<?php echo CHtml::encode($data->p39hago); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p40eficiente')); ?>:</b>
	<?php echo CHtml::encode($data->p40eficiente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p41trabajo')); ?>:</b>
	<?php echo CHtml::encode($data->p41trabajo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p42elevo')); ?>:</b>
	<?php echo CHtml::encode($data->p42elevo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p43eficiente')); ?>:</b>
	<?php echo CHtml::encode($data->p43eficiente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p44motivo')); ?>:</b>
	<?php echo CHtml::encode($data->p44motivo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p45encabezo')); ?>:</b>
	<?php echo CHtml::encode($data->p45encabezo); ?>
	<br />

	*/ ?>

        <b><?php echo CHtml::encode($data->getAttributeLabel('created_at')); ?>:</b>
	<?php echo CHtml::encode($data->created_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_at')); ?>:</b>
	<?php echo CHtml::encode($data->updated_at); ?>
	<br />

</div>