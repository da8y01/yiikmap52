<b><?php echo CHtml::encode($oProceso->getAttributeLabel('id')); ?>:</b>
<?php echo CHtml::link(CHtml::encode($oProceso->id), array('Proceso/view', 'id' => $oProceso->id)); ?>
<br />

<b><?php echo CHtml::encode($oProceso->getAttributeLabel('version')); ?>:</b>
<?php echo CHtml::encode($oProceso->version); ?>
<br />

<b><?php echo CHtml::encode($oProceso->getAttributeLabel('nombre')); ?>:</b>
<?php echo CHtml::encode($oProceso->nombre); ?>
<br />

<b><?php echo CHtml::encode($oProceso->getAttributeLabel('tipo')); ?>:</b>
<?php echo CHtml::encode(Lookup::item('TipoProceso', $oProceso->tipo) . ' (' . $oProceso->tipo . ')'); ?>
<br />

<b><?php echo CHtml::encode($oProceso->getAttributeLabel('objetivo')); ?>:</b>
<?php echo CHtml::encode($oProceso->objetivo); ?>
<br />

<b><?php echo CHtml::encode($oProceso->getAttributeLabel('organizacion_id')); ?>:</b>
<?php echo CHtml::link(CHtml::encode($oProceso->organizacion->nombre . ' (' . $oProceso->organizacion->id . ')'), array('Organizacion/view', 'id' => $oProceso->organizacion->id)); ?>
<br />

<b><?php echo CHtml::encode($oProceso->getAttributeLabel('capital_humano_id')); ?>:</b>
<?php echo CHtml::link(CHtml::encode($oProceso->capitalHumano->nombre . ' (' . $oProceso->capitalHumano->id . ')'), array('CapitalHumano/view', 'id' => $oProceso->capitalHumano->id)); ?>
<br />

<br/>

<div id="divid_MenuProceso">
    <?php
    $this->widget('zii.widgets.CMenu', array(
        'items' => array(
            array('label' => 'Crear Proceso', 'url' => array('/Proceso/create')),
            array('label' => 'Listar Procesos', 'url' => array('/Proceso/index')),
        ),
    ));
    ?>
</div>
