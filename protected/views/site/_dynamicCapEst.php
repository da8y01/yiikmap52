<b><?php echo CHtml::encode($oCapitalEstructural->getAttributeLabel('id')); ?>:</b>
<?php echo CHtml::link(CHtml::encode($oCapitalEstructural->id), array('CapitalEstructural/view', 'id' => $oCapitalEstructural->id)); ?>
<br />

<b><?php echo CHtml::encode($oCapitalEstructural->getAttributeLabel('nombre')); ?>:</b>
<?php echo CHtml::encode($oCapitalEstructural->nombre); ?>
<br />

<b><?php echo CHtml::encode($oCapitalEstructural->getAttributeLabel('descripcion')); ?>:</b>
<?php echo CHtml::encode($oCapitalEstructural->descripcion); ?>
<br />

<b><?php echo CHtml::encode($oCapitalEstructural->getAttributeLabel('tipo')); ?>:</b>
<?php echo CHtml::encode(Lookup::item('TipoCapitalEstructural', $oCapitalEstructural->tipo) . ' (' . $oCapitalEstructural->tipo . ')'); ?>
<br />

<b><?php echo CHtml::encode($oCapitalEstructural->getAttributeLabel('un_capital')); ?>:</b>
<?php
$recurso = null;
switch ($oCapitalEstructural->tipo) {
    case 1:
        $recurso = Intangible::model()->findByPk($oCapitalEstructural->un_capital);
        echo CHtml::link(CHtml::encode($recurso->nombre . ' (' . $recurso->id . ')'), array('Intangible/view', 'id' => $recurso->id));
        break;

    case 2:
        $recurso = Tangible::model()->findByPk($oCapitalEstructural->un_capital);
        echo CHtml::link(CHtml::encode($recurso->nombre . ' (' . $recurso->id . ')'), array('Tangible/view', 'id' => $recurso->id));
        break;

    default:
        break;
}
?>
<br />

<br/>

<div id="divid_MenuCapitalEstructural">
    <?php
    $this->widget('zii.widgets.CMenu', array(
        'items' => array(
            array('label' => 'Crear Capital Estructural', 'url' => array('/CapitalEstructural/create')),
            array('label' => 'Listar Capitales Estructurales', 'url' => array('/CapitalEstructural/index')),
        ),
    ));
    ?>
</div>
