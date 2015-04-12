<b><?php echo CHtml::encode($oCapitalHumano->getAttributeLabel('id')); ?>:</b>
<?php echo CHtml::link(CHtml::encode($oCapitalHumano->id), array('CapitalHumano/view', 'id' => $oCapitalHumano->id)); ?>
<br />

<b><?php echo CHtml::encode($oCapitalHumano->getAttributeLabel('nombre')); ?>:</b>
<?php echo CHtml::encode($oCapitalHumano->nombre); ?>
<br />

<b><?php echo CHtml::encode($oCapitalHumano->getAttributeLabel('tipo')); ?>:</b>
<?php echo CHtml::encode(Lookup::item('TipoCapitalHumano', $oCapitalHumano->tipo) . ' (' . $oCapitalHumano->tipo . ')'); ?>
<br />

<b><?php echo CHtml::encode($oCapitalHumano->getAttributeLabel('contacto')); ?>:</b>
<?php echo CHtml::encode($oCapitalHumano->contacto); ?>
<br />

<b><?php echo CHtml::encode($oCapitalHumano->getAttributeLabel('secundaria')); ?>:</b>
<?php echo CHtml::encode($oCapitalHumano->secundaria); ?>
<br />

<br/>

<div id="divid_MenuCapitalHumano">
    <?php
    $this->widget('zii.widgets.CMenu', array(
        'items' => array(
            array('label' => 'Crear Capital Humano', 'url' => array('/CapitalHumano/create')),
            array('label' => 'Listar Capitales Humanos', 'url' => array('/CapitalHumano/index')),
        ),
    ));
    ?>
</div>
