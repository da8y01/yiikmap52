<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


/* ARC2 static class inclusion */ 
include_once('../protected/vendors/semsol-arc2-495d10b/ARC2.php');

// parámetros de configuración de la librería semsol-arc2
$ARC2_db_name = 'yiikmap52_arc2';
$ARC2_db_user = 'root';
$ARC2_db_pwd = '';
$ARC2_store_name = 'yiikmap52_store';
$ARC2_endpoint_write_key = 'api_key';

/* MySQL and endpoint configuration */ 
$config = array(
  /* db */
  /*'db_host' => 'localhost',  optional, default is localhost */
  'db_name' => $ARC2_db_name,
  'db_user' => $ARC2_db_user,
  'db_pwd' => $ARC2_db_pwd,
  /* store */
  'store_name' => $ARC2_store_name,

  /* endpoint */
  'endpoint_features' => array(
    'select', 'construct', 'ask', 'describe', 
    'load', 'insert', 'delete', 
    'dump' /* dump is a special command for streaming SPOG export */
  ),
  'endpoint_timeout' => 60, /* not implemented in ARC2 preview */
  'endpoint_read_key' => '', /* optional */
  'endpoint_write_key' => $ARC2_endpoint_write_key, /* optional, but without one, everyone can write! */
  'endpoint_max_limit' => 250, /* optional */
);

/* instantiation */
$ep = ARC2::getStoreEndpoint($config);

if (!$ep->isSetUp()) {
  $ep->setUp(); /* create MySQL tables */
}

/* request handling */
$ep->go();
?>
