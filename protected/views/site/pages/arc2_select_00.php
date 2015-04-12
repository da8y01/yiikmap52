<?php
$this->pageTitle=Yii::app()->name . ' - ARC2';
$this->breadcrumbs=array(
	'ARC2',
);
?>
<h1>ARC2 00</h1>

<?php 
include_once("../../semsol-arc2/ARC2.php");

$config = array(
  /* db */
  'db_name' => 'sparql_ep00',
  'db_user' => 'root',
  'db_pwd' => '',
  /* store */
  'store_name' => 'arc_tests',
  /* stop after 100 errors */
  'max_errors' => 100,
);
$store = ARC2::getStore($config);
if (!$store->isSetUp()) {
  $store->setUp();
}

/* LOAD will call the Web reader, which will call the
format detector, which in turn triggers the inclusion of an
appropriate parser, etc. until the triples end up in the store. */
$store->query('LOAD <http://example.com/home.html>');

/* list names */
$q = '
  PREFIX foaf: <http://xmlns.com/foaf/0.1/> .
  SELECT ?s ?p ?o WHERE {
    ?s ?p ?o .
  }
';
$r = '';
$r = $r.'<table>';
if ($rows = $store->query($q, 'rows')) {
  foreach ($rows as $row) {
    $r = $r.'<tr>';
    $r .= '<td>' . $row['s'] . '</td>';
    $r .= '<td>' . $row['p'] . '</td>';
    $r .= '<td>' . $row['o'] . '</td>';
    $r = $r.'</tr>';
  }
}
$r = $r.'</table>';

echo $r ? '<ul>' . $r . '</ul>' : 'no named persons found';
?>
