<b><?php echo CHtml::encode($oCompetencia->getAttributeLabel('id')); ?>:</b>
<?php echo CHtml::link(CHtml::encode($oCompetencia->id), array('Competencia/view', 'id' => $oCompetencia->id)); ?>
<br />

<b><?php echo CHtml::encode($oCompetencia->getAttributeLabel('nombre')); ?>:</b>
<?php echo CHtml::encode($oCompetencia->nombre); ?>
<br />

<b><?php echo CHtml::encode($oCompetencia->getAttributeLabel('tipo')); ?>:</b>
<?php echo CHtml::encode(Lookup::item('TipoCompetencia', $oCompetencia->tipo) . ' (' . $oCompetencia->tipo . ')'); ?>
<br />

<b><?php echo CHtml::encode($oCompetencia->getAttributeLabel('modelo')); ?>:</b>
<?php echo CHtml::encode(Lookup::item('ModeloCompetencia', $oCompetencia->modelo) . ' (' . $oCompetencia->modelo . ')'); ?>
<br />

<b><?php echo CHtml::encode($oCompetencia->getAttributeLabel('perfil')); ?>:</b>
<?php echo CHtml::encode($oCompetencia->perfil); ?>
<br />

<b><?php echo CHtml::encode($oCompetencia->getAttributeLabel('area_id')); ?>:</b>
<?php echo CHtml::link(CHtml::encode($oCompetencia->area->nombre . ' (' . $oCompetencia->area->id . ')'), array('Area/view', 'id' => $oCompetencia->area->id)); ?>
<br />

<b><?php echo CHtml::encode($oCompetencia->getAttributeLabel('descripcion')); ?>:</b>
<?php echo CHtml::encode($oCompetencia->descripcion); ?>
<br />

<br/>

<div id="divid_MenuCompetencia">
    <?php
    $this->widget('zii.widgets.CMenu', array(
        'items' => array(
            array('label' => 'Crear Competencia', 'url' => array('/Competencia/create')),
            array('label' => 'Listar Competencias', 'url' => array('/Competencia/index')),
        ),
    ));
    ?>
</div>
