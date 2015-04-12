<b><?php echo CHtml::encode($oCapitalRelacional->getAttributeLabel('id')); ?>:</b>
<?php echo CHtml::link(CHtml::encode($oCapitalRelacional->id), array('CapitalRelacional/view', 'id' => $oCapitalRelacional->id)); ?>
<br />

<b><?php echo CHtml::encode($oCapitalRelacional->getAttributeLabel('afines')); ?>:</b>
<?php echo CHtml::encode($oCapitalRelacional->afines); ?>
<br />

<b><?php echo CHtml::encode($oCapitalRelacional->getAttributeLabel('organizacion_id')); ?>:</b>
<?php echo CHtml::link(CHtml::encode($oCapitalRelacional->orgnombre . ' (' . $oCapitalRelacional->organizacion_id . ')'), array('Organizacion/view', 'id' => $oCapitalRelacional->organizacion_id)); ?>
<br />

<br />

<div id="divid_MenuCapitalRelacional">
    <?php
    $this->widget('zii.widgets.CMenu', array(
        'items' => array(
            array('label' => 'Crear Capital Relacional', 'url' => array('/CapitalRelacional/create')),
            array('label' => 'Listar Capitales Relacionales', 'url' => array('/CapitalRelacional/index')),
        ),
    ));
    ?>
</div>
