<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

Yii::import('application.vendors.*');
require_once('semsol-arc2-495d10b/ARC2.php');

/**
 * Description of ModelBase
 *
 * @author gothmog
 */
class ModelBase extends CActiveRecord {
    
    /**
     * Método que usando la librería "semsol-arc2" inserta nuevas tripletas en el "triple store".
     * 
     * @param string $ModelQuery cadena con las tripletas del modelo a insertar.
     */
    public function StoreNewModelTriples($ModelQuery) {
        $config = array(
          /* db */
          'db_name' => Yii::app()->params['ARC2_db_name'],
          'db_user' => Yii::app()->params['ARC2_db_user'],
          'db_pwd' => Yii::app()->params['ARC2_db_pwd'],
          /* store */
          'store_name' => Yii::app()->params['ARC2_store_name'],
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

        $sQuery = '
        PREFIX rdf: <http://www.w3.org/1999/02/22-rdf-syntax-ns#> .
        PREFIX rdfs: <http://www.w3.org/2000/01/rdf-schema#> .
        PREFIX dc: <http://purl.org/dc/elements/1.1/> .
        PREFIX owl: <http://www.w3.org/2002/07/owl#> .
        PREFIX ex: <http://www.example.org/> .
        PREFIX xsd: <http://www.w3.org/2001/XMLSchema#> .
        PREFIX uc_mco: <http://universidad.edu/ontologias/ModeloConocimientoOrganizacional#> .
        PREFIX uc_classdefs: <http://universidad.edu/ontologias/ClassDefinitions#> .
        PREFIX uc_orgs: <http://universidad.edu/ontologias/OrganizacionInstances#> .
        PREFIX uc_procs: <http://universidad.edu/ontologias/ProcesoInstances#> .
        PREFIX uc_areas: <http://universidad.edu/ontologias/AreaInstances#> .
        PREFIX uc_secs: <http://universidad.edu/ontologias/SectorInstances#> .
        PREFIX uc_comps: <http://universidad.edu/ontologias/CompetenciaInstances#> .
        PREFIX uc_caps: <http://universidad.edu/ontologias/CapitalInstances#> .
        PREFIX uc_capsests: <http://universidad.edu/ontologias/CapitalEstructuralInstances#> .
        PREFIX uc_capshums: <http://universidad.edu/ontologias/CapitalHumanoInstances#> .
        PREFIX uc_capsrels: <http://universidad.edu/ontologias/CapitalRelacionalInstances#> .
        PREFIX uc_intans: <http://universidad.edu/ontologias/IntangibleInstances#> .
        PREFIX uc_tans: <http://universidad.edu/ontologias/TangibleInstances#> .

        INSERT INTO <http://universidad.edu/ontologias/TheInstances> {'.
                $ModelQuery
        .'}';

        $QueryResult = $store->query($sQuery);
    }
    
    
    /**
     * Método que usando la librería "semsol-arc2" borra nuevas tripletas en el "triple store".
     * 
     * @param string $ModelQuery cadena con las tripletas del modelo a borrar.
     */
    public function DeleteModelTriples($ModelQuery) {
        $config = array(
          /* db */
          'db_name' => Yii::app()->params['ARC2_db_name'],
          'db_user' => Yii::app()->params['ARC2_db_user'],
          'db_pwd' => Yii::app()->params['ARC2_db_pwd'],
          /* store */
          'store_name' => Yii::app()->params['ARC2_store_name'],
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

        $sQuery = '
        PREFIX rdf: <http://www.w3.org/1999/02/22-rdf-syntax-ns#> .
        PREFIX rdfs: <http://www.w3.org/2000/01/rdf-schema#> .
        PREFIX dc: <http://purl.org/dc/elements/1.1/> .
        PREFIX owl: <http://www.w3.org/2002/07/owl#> .
        PREFIX ex: <http://www.example.org/> .
        PREFIX xsd: <http://www.w3.org/2001/XMLSchema#> .
        PREFIX uc_mco: <http://universidad.edu/ontologias/ModeloConocimientoOrganizacional#> .
        PREFIX uc_classdefs: <http://universidad.edu/ontologias/ClassDefinitions#> .
        PREFIX uc_orgs: <http://universidad.edu/ontologias/OrganizacionInstances#> .
        PREFIX uc_procs: <http://universidad.edu/ontologias/ProcesoInstances#> .
        PREFIX uc_areas: <http://universidad.edu/ontologias/AreaInstances#> .
        PREFIX uc_secs: <http://universidad.edu/ontologias/SectorInstances#> .
        PREFIX uc_comps: <http://universidad.edu/ontologias/CompetenciaInstances#> .
        PREFIX uc_caps: <http://universidad.edu/ontologias/CapitalInstances#> .
        PREFIX uc_capsests: <http://universidad.edu/ontologias/CapitalEstructuralInstances#> .
        PREFIX uc_capshums: <http://universidad.edu/ontologias/CapitalHumanoInstances#> .
        PREFIX uc_capsrels: <http://universidad.edu/ontologias/CapitalRelacionalInstances#> .
        PREFIX uc_intans: <http://universidad.edu/ontologias/IntangibleInstances#> .
        PREFIX uc_tans: <http://universidad.edu/ontologias/TangibleInstances#> .

        DELETE FROM <http://universidad.edu/ontologias/TheInstances> {'.
                $ModelQuery
        .'}';

        $QueryResult = $store->query($sQuery);
    }
    
    
    /**
     * Método que usando la librería "semsol-arc2" inserta el MCO en el "triple-store".
     * 
     * @param string $ParamQuery cadena con las tripletas a insertar.
     */
    public static function StoreMCOTriples($ParamQuery) {
        $config = array(
          /* db */
          'db_name' => Yii::app()->params['ARC2_db_name'],
          'db_user' => Yii::app()->params['ARC2_db_user'],
          'db_pwd' => Yii::app()->params['ARC2_db_pwd'],
          /* store */
          'store_name' => Yii::app()->params['ARC2_store_name'],
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

        $sQuery = '
        PREFIX rdf: <http://www.w3.org/1999/02/22-rdf-syntax-ns#> .
        PREFIX rdfs: <http://www.w3.org/2000/01/rdf-schema#> .
        PREFIX dc: <http://purl.org/dc/elements/1.1/> .
        PREFIX owl: <http://www.w3.org/2002/07/owl#> .
        PREFIX ex: <http://www.example.org/> .
        PREFIX xsd: <http://www.w3.org/2001/XMLSchema#> .
        PREFIX uc_mco: <http://universidad.edu/ontologias/ModeloConocimientoOrganizacional#> .
        PREFIX uc_classdefs: <http://universidad.edu/ontologias/ClassDefinitions#> .
        PREFIX uc_orgs: <http://universidad.edu/ontologias/OrganizacionInstances#> .
        PREFIX uc_procs: <http://universidad.edu/ontologias/ProcesoInstances#> .
        PREFIX uc_areas: <http://universidad.edu/ontologias/AreaInstances#> .
        PREFIX uc_secs: <http://universidad.edu/ontologias/SectorInstances#> .
        PREFIX uc_comps: <http://universidad.edu/ontologias/CompetenciaInstances#> .
        PREFIX uc_caps: <http://universidad.edu/ontologias/CapitalInstances#> .
        PREFIX uc_capsests: <http://universidad.edu/ontologias/CapitalEstructuralInstances#> .
        PREFIX uc_capshums: <http://universidad.edu/ontologias/CapitalHumanoInstances#> .
        PREFIX uc_capsrels: <http://universidad.edu/ontologias/CapitalRelacionalInstances#> .
        PREFIX uc_intans: <http://universidad.edu/ontologias/IntangibleInstances#> .
        PREFIX uc_tans: <http://universidad.edu/ontologias/TangibleInstances#> .

        '.$ParamQuery;

        $QueryResult = $store->query($sQuery);
    }
}

?>
