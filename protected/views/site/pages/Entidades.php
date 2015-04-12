<?php
$this->pageTitle=Yii::app()->name . ' - Entidades';
$this->breadcrumbs=array(
	'Entidades',
);
?>
<h1>ENTIDADES</h1>

<?php
$aMenu = array();
$aFiles = CFileHelper::findFiles(YiiBase::getPathOfAlias('application.models'), array('level'=>0));
foreach ($aFiles as $file) {
    $sSlice = '';
    if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
        $sSlice = substr($file, strripos($file, '\\'));
    }
    if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') {
        $sSlice = substr($file, strripos($file, '/'));
    }
    $sLabel = substr($sSlice, 1, strripos($sSlice, '.')-1);
    $aMenuItem = array('label'=>$sLabel, 'url'=>array('/'.$sLabel));
    array_push($aMenu, $aMenuItem);
}
?>

<div id="dMenuModels">
    <?php $this->widget('zii.widgets.CMenu',array(
            'items'=>$aMenu,
    )); ?>
</div><!-- mainmenu -->
