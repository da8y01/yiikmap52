<b><?php echo CHtml::encode($oOrganizacion->getAttributeLabel('id')); ?>:</b>
<?php echo CHtml::link(CHtml::encode($oOrganizacion->id), array('Organizacion/view', 'id' => $oOrganizacion->id)); ?>
<br />

<b><?php echo CHtml::encode($oOrganizacion->getAttributeLabel('nombre')); ?>:</b>
<?php echo CHtml::encode($oOrganizacion->nombre); ?>
<br />

<b><?php echo CHtml::encode($oOrganizacion->getAttributeLabel('contacto')); ?>:</b>
<?php echo CHtml::encode($oOrganizacion->contacto); ?>
<br />

<b><?php echo CHtml::encode($oOrganizacion->getAttributeLabel('url')); ?>:</b>
<?php echo CHtml::link(CHtml::encode($oOrganizacion->url), $oOrganizacion->url, array('target' => '_blank')); ?>
<br />

<b><?php echo CHtml::encode($oOrganizacion->getAttributeLabel('sector_id')); ?>:</b>
<?php echo CHtml::link(CHtml::encode($oOrganizacion->sector->nombre . ' (' . $oOrganizacion->sector->id . ')'), array('Sector/view', 'id' => $oOrganizacion->sector->id)); ?>
<br />

<b><?php echo CHtml::encode($oOrganizacion->getAttributeLabel('descripcion')); ?>:</b>
<?php echo CHtml::encode($oOrganizacion->descripcion); ?>
<br />

<br/>

<div id="divid_MenuOrganizacion">
    <?php
    $this->widget('zii.widgets.CMenu', array(
        'items' => array(
            array('label' => 'Crear Organización', 'url' => array('/Organizacion/create')),
            array('label' => 'Listar Organizaciones', 'url' => array('/Organizacion/index')),
        ),
    ));
    ?>
</div>
