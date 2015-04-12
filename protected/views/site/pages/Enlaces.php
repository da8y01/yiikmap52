<?php
$this->pageTitle=Yii::app()->name . ' - Enlaces';
$this->breadcrumbs=array(
	'Enlaces',
);
?>
<h1>ENLACES</h1>

<div>
<?php
    $this->widget('zii.widgets.CMenu',  
            array('encodeLabel'=>false, 
                'items'=>array(
                    array('label'=>'<a href="http://www.yiiframework.com/" target="_blank">http://www.yiiframework.com/</a> P&aacute;gina oficial de Yii Framework.'),
                    array('label'=>'<a href="https://github.com/semsol/arc2" target="_blank">https://github.com/semsol/arc2</a> Repositorio GitHub de la librer&iacute;a semsol-arc2.'),
                    array('label'=>'<a href="http://fancybox.net/" target="_blank">http://fancybox.net/</a> P&aacute;gina oficial de la librer&iacute;a FancyBox.'),
                    array('label'=>'<a href="http://getspringy.com/" target="_blank">http://getspringy.com/</a> P&aacute;gina oficial de la librer&iacute;a Springy.js y <a href="https://github.com/dhotson/springy" target="_blank">https://github.com/dhotson/springy</a> Repositorio GitHub de la librer&iacute;a Springy.js.'),
                    array('label'=>'<a href="mailto:ucaldas.kmap@gmail.com" target="_blank">ucaldas.kmap@gmail.com</a> E-Mail de soporte de la aplicaci&oacute;n KMap.')
                )
            )
    );
?>
</div><!-- mainmenu -->
