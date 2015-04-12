<?php
require_once 'Image/GraphViz.php';

$gv = new Image_GraphViz();

$attr = array('label'=>'predicate 2', 'style'=>'solid',);

$gv->addEdge(array('wake up'=>'visit bathroom'));
$gv->addEdge(array('visit bathroom'=>'make coffee'), $attr);
//var_dump($gv->image());
$gv->image();
//$fetched = $gv->fetch();
//var_dump($fetched);
//$gv->fetch();
?>
