<?php

Yii::import('application.vendors.*');
require_once('semsol-arc2-495d10b/ARC2.php');

class SiteController extends Controller {

    /**
     * Declares class-based actions.
     */
    public function actions() {
        return array(
            // captcha action renders the CAPTCHA image displayed on the contact page
            'captcha' => array(
                'class' => 'CCaptchaAction',
                'backColor' => 0xFFFFFF,
            ),
            // page action renders "static" pages stored under 'protected/views/site/pages'
            // They can be accessed via: index.php?r=site/page&view=FileName
            'page' => array(
                'class' => 'CViewAction',
            ),
        );
    }

    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionIndex() {
        // renders the view file 'protected/views/site/index.php'
        // using the default layout 'protected/views/layouts/main.php'
        $this->render('index');
    }

    /**
     * Esta es la acción 'dynamicproc' con el contenido para el contenedor AJAX.
     * @param integer $field el ID del modelo a cargar
     */
    public function actionDynamicProc($field) {
        if ($_POST[$field] != null) {
            $oProceso = Proceso::model()->findByPk($_POST[$field]);
            $this->renderPartial('_dynamicProc', array('oProceso' => $oProceso));
        }
    }

    /**
     * Esta es la acción 'dynamicorg' con el contenido para el contenedor AJAX.
     * @param integer $field el ID del modelo a cargar
     */
    public function actionDynamicOrg($field) {
        if ($_POST[$field] != null) {
            $oOrganizacion = Organizacion::model()->findByPk($_POST[$field]);
            $this->renderPartial('_dynamicOrg', array('oOrganizacion' => $oOrganizacion));
        }
    }

    /**
     * Esta es la acción 'dynamiccomp' con el contenido para el contenedor AJAX.
     * @param integer $field el ID del modelo a cargar
     */
    public function actionDynamicComp($field) {
        if ($_POST[$field] != null) {
            $oCompetencia = Competencia::model()->findByPk($_POST[$field]);
            $this->renderPartial('_dynamicComp', array('oCompetencia' => $oCompetencia));
        }
    }

    /**
     * Esta es la acción 'dynamiccapest' con el contenido para el contenedor AJAX.
     * @param integer $field el ID del modelo a cargar
     */
    public function actionDynamicCapEst($field) {
        if ($_POST[$field] != null) {
            $oCapitalEstructural = CapitalEstructural::model()->findByPk($_POST[$field]);
            $this->renderPartial('_dynamicCapEst', array('oCapitalEstructural' => $oCapitalEstructural));
        }
    }

    /**
     * Esta es la acción 'dynamiccaphum' con el contenido para el contenedor AJAX.
     * @param integer $field el ID del modelo a cargar
     */
    public function actionDynamicCapHum($field) {
        if ($_POST[$field] != null) {
            $oCapitalHumano = CapitalHumano::model()->findByPk($_POST[$field]);
            $this->renderPartial('_dynamicCapHum', array('oCapitalHumano' => $oCapitalHumano));
        }
    }

    /**
     * Esta es la acción 'dynamiccaprel' con el contenido para el contenedor AJAX.
     * @param integer $field el ID del modelo a cargar
     */
    public function actionDynamicCapRel($field) {
        if ($_POST[$field] != null) {
            $oCapitalRelacional = CapitalRelacional::model()->findByPk($_POST[$field]);
            $this->renderPartial('_dynamicCapRel', array('oCapitalRelacional' => $oCapitalRelacional));
        }
    }

    
    /**
     * Esta es la acción 'TriplesProceso' con el contenido para el contenedor AJAX.
     * @param integer $id el ID del modelo a cargar
     */
    public function actionTriplesProceso($id) {
        $rows_Subject = $this->getTripleRowsProcesoAsSubject($id);
        $rows_Predicate = $this->getTripleRowsProcesoAsPredicate($id);
        $rows_Object = $this->getTripleRowsProcesoAsObject($id);
        
        $this->renderPartial('_showTriples', array('rows_Subject'=>$rows_Subject, 'rows_Predicate'=>$rows_Predicate, 'rows_Object'=>$rows_Object));
    }
    
    /**
     * Esta es la acción 'TriplesOrganizacion' con el contenido para el contenedor AJAX.
     * @param integer $id el ID del modelo a cargar
     */
    public function actionTriplesOrganizacion($id) {
        $rows_Subject = $this->getTripleRowsOrganizacionAsSubject($id);
        $rows_Predicate = $this->getTripleRowsOrganizacionAsPredicate($id);
        $rows_Object = $this->getTripleRowsOrganizacionAsObject($id);
        
        $this->renderPartial('_showTriples', array('rows_Subject'=>$rows_Subject, 'rows_Predicate'=>$rows_Predicate, 'rows_Object'=>$rows_Object));
    }
    
    /**
     * Esta es la acción 'TriplesCompetencia' con el contenido para el contenedor AJAX.
     * @param integer $id el ID del modelo a cargar
     */
    public function actionTriplesCompetencia($id) {
        $rows_Subject = $this->getTripleRowsCompetenciaAsSubject($id);
        $rows_Predicate = $this->getTripleRowsCompetenciaAsPredicate($id);
        $rows_Object = $this->getTripleRowsCompetenciaAsObject($id);
        
        $this->renderPartial('_showTriples', array('rows_Subject'=>$rows_Subject, 'rows_Predicate'=>$rows_Predicate, 'rows_Object'=>$rows_Object));
    }
    
    /**
     * Esta es la acción 'TriplesCapitalEstructural' con el contenido para el contenedor AJAX.
     * @param integer $id el ID del modelo a cargar
     */
    public function actionTriplesCapitalEstructural($id) {
        $rows_Subject = $this->getTripleRowsCapitalEstructuralAsSubject($id);
        $rows_Predicate = $this->getTripleRowsCapitalEstructuralAsPredicate($id);
        $rows_Object = $this->getTripleRowsCapitalEstructuralAsObject($id);
        
        $this->renderPartial('_showTriples', array('rows_Subject'=>$rows_Subject, 'rows_Predicate'=>$rows_Predicate, 'rows_Object'=>$rows_Object));
    }
    
    /**
     * Esta es la acción 'TriplesCapitalHumano' con el contenido para el contenedor AJAX.
     * @param integer $id el ID del modelo a cargar
     */
    public function actionTriplesCapitalHumano($id) {
        $rows_Subject = $this->getTripleRowsCapitalHumanoAsSubject($id);
        $rows_Predicate = $this->getTripleRowsCapitalHumanoAsPredicate($id);
        $rows_Object = $this->getTripleRowsCapitalHumanoAsObject($id);
        
        $this->renderPartial('_showTriples', array('rows_Subject'=>$rows_Subject, 'rows_Predicate'=>$rows_Predicate, 'rows_Object'=>$rows_Object));
    }
    
    /**
     * Esta es la acción 'TriplesCapitalRelacional' con el contenido para el contenedor AJAX.
     * @param integer $id el ID del modelo a cargar
     */
    public function actionTriplesCapitalRelacional($id) {
        $rows_Subject = $this->getTripleRowsCapitalRelacionalAsSubject($id);
        $rows_Predicate = $this->getTripleRowsCapitalRelacionalAsPredicate($id);
        $rows_Object = $this->getTripleRowsCapitalRelacionalAsObject($id);
        
        $this->renderPartial('_showTriples', array('rows_Subject'=>$rows_Subject, 'rows_Predicate'=>$rows_Predicate, 'rows_Object'=>$rows_Object));
    }

    
    /**
     * Esta es la acción 'grafoprocesosubject' con las tripletas en forma de grafo para el {@link Proceso} como <i>sujeto</i>.
     * @param integer $id el ID del modelo a cargar
     */
    public function actionGrafoProcesoSubject($id) {
        $this->renderPartial('_grafoSubject', array('aRowsSubject' => $this->getTripleRowsProcesoAsSubject($id)));
    }
    
    /**
     * Esta es la acción 'grafoprocesopredicate' con las tripletas en forma de grafo para el {@link Proceso} como <i>predicado</i>.
     * @param integer $id el ID del modelo a cargar
     */
    public function actionGrafoProcesoPredicate($id) {
        $this->renderPartial('_grafoPredicate', array('aRowsPredicate' => $this->getTripleRowsProcesoAsPredicate($id)));
    }
    
    /**
     * Esta es la acción 'grafoprocesoobject' con las tripletas en forma de grafo para el {@link Proceso} como <i>objeto</i>.
     * @param integer $id el ID del modelo a cargar
     */
    public function actionGrafoProcesoObject($id) {
        $this->renderPartial('_grafoObject', array('aRowsObject' => $this->getTripleRowsProcesoAsObject($id)));
    }
    
    
    /**
     * Esta es la acción 'grafoorganizacionsubject' con las tripletas en forma de grafo para la {@link Organizacion} como <i>sujeto</i>.
     * @param integer $id el ID del modelo a cargar
     */
    public function actionGrafoOrganizacionSubject($id) {
        $this->renderPartial('_grafoSubject', array('aRowsSubject' => $this->getTripleRowsOrganizacionAsSubject($id)));
    }
    
    /**
     * Esta es la acción 'grafoorganizacionpredicate' con las tripletas en forma de grafo para la {@link Organizacion} como <i>predicado</i>.
     * @param integer $id el ID del modelo a cargar
     */
    public function actionGrafoOrganizacionPredicate($id) {
        $this->renderPartial('_grafoPredicate', array('aRowsPredicate' => $this->getTripleRowsOrganizacionAsPredicate($id)));
    }
    
    /**
     * Esta es la acción 'grafoorganizacionobject' con las tripletas en forma de grafo para la {@link Organizacion} como <i>objeto</i>.
     * @param integer $id el ID del modelo a cargar
     */
    public function actionGrafoOrganizacionObject($id) {
        $this->renderPartial('_grafoObject', array('aRowsObject' => $this->getTripleRowsOrganizacionAsObject($id)));
    }
    
    
    /**
     * Esta es la acción 'grafocompetenciasubject' con las tripletas en forma de grafo para la {@link Competencia} como <i>sujeto</i>.
     * @param integer $id el ID del modelo a cargar
     */
    public function actionGrafoCompetenciaSubject($id) {
        $this->renderPartial('_grafoSubject', array('aRowsSubject' => $this->getTripleRowsCompetenciaAsSubject($id)));
    }
    
    /**
     * Esta es la acción 'grafocompetenciapredicate' con las tripletas en forma de grafo para la {@link Competencia} como <i>predicado</i>.
     * @param integer $id el ID del modelo a cargar
     */
    public function actionGrafoCompetenciaPredicate($id) {
        $this->renderPartial('_grafoPredicate', array('aRowsPredicate' => $this->getTripleRowsCompetenciaAsPredicate($id)));
    }
    
    /**
     * Esta es la acción 'grafocompetenciaobject' con las tripletas en forma de grafo para la {@link Competencia} como <i>objeto</i>.
     * @param integer $id el ID del modelo a cargar
     */
    public function actionGrafoCompetenciaObject($id) {
        $this->renderPartial('_grafoObject', array('aRowsObject' => $this->getTripleRowsCompetenciaAsObject($id)));
    }
    
    
    /**
     * Esta es la acción 'grafocapitalestructuralsubject' con las tripletas en forma de grafo para el {@link CapitalEstructural} como <i>sujeto</i>.
     * @param integer $id el ID del modelo a cargar
     */
    public function actionGrafoCapitalEstructuralSubject($id) {
        $this->renderPartial('_grafoSubject', array('aRowsSubject' => $this->getTripleRowsCapitalEstructuralAsSubject($id)));
    }
    
    /**
     * Esta es la acción 'grafocapitalestructuralpredicate' con las tripletas en forma de grafo para el {@link CapitalEstructural} como <i>predicado</i>.
     * @param integer $id el ID del modelo a cargar
     */
    public function actionGrafoCapitalEstructuralPredicate($id) {
        $this->renderPartial('_grafoPredicate', array('aRowsPredicate' => $this->getTripleRowsCapitalEstructuralAsPredicate($id)));
    }
    
    /**
     * Esta es la acción 'grafocapitalestructuralobject' con las tripletas en forma de grafo para el {@link CapitalEstructural} como <i>objeto</i>.
     * @param integer $id el ID del modelo a cargar
     */
    public function actionGrafoCapitalEstructuralObject($id) {
        $this->renderPartial('_grafoObject', array('aRowsObject' => $this->getTripleRowsCapitalEstructuralAsObject($id)));
    }
    
    
    /**
     * Esta es la acción 'grafocapitalhumanosubject' con las tripletas en forma de grafo para el {@link CapitalHumano} como <i>sujeto</i>.
     * @param integer $id el ID del modelo a cargar
     */
    public function actionGrafoCapitalHumanoSubject($id) {
        $this->renderPartial('_grafoSubject', array('aRowsSubject' => $this->getTripleRowsCapitalHumanoAsSubject($id)));
    }
    
    /**
     * Esta es la acción 'grafocapitalhumanopredicate' con las tripletas en forma de grafo para el {@link CapitalHumano} como <i>predicado</i>.
     * @param integer $id el ID del modelo a cargar
     */
    public function actionGrafoCapitalHumanoPredicate($id) {
        $this->renderPartial('_grafoPredicate', array('aRowsPredicate' => $this->getTripleRowsCapitalHumanoAsPredicate($id)));
    }
    
    /**
     * Esta es la acción 'grafocapitalhumanoobject' con las tripletas en forma de grafo para el {@link CapitalHumano} como <i>objeto</i>.
     * @param integer $id el ID del modelo a cargar
     */
    public function actionGrafoCapitalHumanoObject($id) {
        $this->renderPartial('_grafoObject', array('aRowsObject' => $this->getTripleRowsCapitalHumanoAsObject($id)));
    }
    
    
    /**
     * Esta es la acción 'grafocapitalrelacionalsubject' con las tripletas en forma de grafo para el {@link CapitalHumano} como <i>sujeto</i>.
     * @param integer $id el ID del modelo a cargar
     */
    public function actionGrafoCapitalRelacionalSubject($id) {
        $this->renderPartial('_grafoSubject', array('aRowsSubject' => $this->getTripleRowsCapitalRelacionalAsSubject($id)));
    }
    
    /**
     * Esta es la acción 'grafocapitalrelacionalpredicate' con las tripletas en forma de grafo para el {@link CapitalHumano} como <i>predicado</i>.
     * @param integer $id el ID del modelo a cargar
     */
    public function actionGrafoCapitalRelacionalPredicate($id) {
        $this->renderPartial('_grafoPredicate', array('aRowsPredicate' => $this->getTripleRowsCapitalRelacionalAsPredicate($id)));
    }
    
    /**
     * Esta es la acción 'grafocapitalrelacionalobject' con las tripletas en forma de grafo para el {@link CapitalHumano} como <i>objeto</i>.
     * @param integer $id el ID del modelo a cargar
     */
    public function actionGrafoCapitalRelacionalObject($id) {
        $this->renderPartial('_grafoObject', array('aRowsObject' => $this->getTripleRowsCapitalRelacionalAsObject($id)));
    }

    
    /**
     * Esta es la acción 'getTripleRowsProcesoAsSubject' 
     * que devuelve las filas de la consulta al "triple store" 
     * en el caso de usar el {@link Proceso} como <i>sujeto</i>.
     * @param integer $ProcesoId el ID del modelo {@link Proceso} a cargar
     */
    public function getTripleRowsProcesoAsSubject($ProcesoId) {
        $sQuerySubject = '
            SELECT ?subject ?predicate ?object {
                ?subject ?predicate ?object . 
                FILTER (?subject=uc_procs:Proceso-' . $ProcesoId . ') .
            }';

        return $this->QueryTripleStore($sQuerySubject);
    }

    /**
     * Esta es la acción 'getTripleRowsProcesoAsPredicate' 
     * que devuelve las filas de la consulta al "triple store" 
     * en el caso de usar el {@link Proceso} como <i>predicado</i>.
     * @param integer $ProcesoId el ID del modelo {@link Proceso} a cargar
     */
    public function getTripleRowsProcesoAsPredicate($ProcesoId) {
        $sQueryPredicate = '
            SELECT ?subject ?predicate ?object {
                ?subject ?predicate ?object . 
                FILTER (?predicate=uc_procs:Proceso-' . $ProcesoId . ') .
            }';

        return $this->QueryTripleStore($sQueryPredicate);
    }

    /**
     * Esta es la acción 'getTripleRowsProcesoAsObject' 
     * que devuelve las filas de la consulta al "triple store" 
     * en el caso de usar el {@link Proceso} como <i>objeto</i>.
     * @param integer $ProcesoId el ID del modelo {@link Proceso} a cargar
     */
    public function getTripleRowsProcesoAsObject($ProcesoId) {
        $sQueryObject = '
            SELECT ?subject ?predicate ?object {
                ?subject ?predicate ?object . 
                FILTER (?object=uc_procs:Proceso-' . $ProcesoId . ') .
            }';

        return $this->QueryTripleStore($sQueryObject);
    }
    
    
    /**
     * Esta es la acción 'getTripleRowsOrganizacionAsSubject' 
     * que devuelve las filas de la consulta al "triple store" 
     * en el caso de usar la {@link Organizacion} como <i>sujeto</i>.
     * @param integer $OrganizacionId el ID del modelo {@link Organizacion} a cargar
     */
    public function getTripleRowsOrganizacionAsSubject($OrganizacionId) {
        $sQuerySubject = '
            SELECT ?subject ?predicate ?object {
                ?subject ?predicate ?object . 
                FILTER (?subject=uc_orgs:Organizacion-' . $OrganizacionId . ') .
            }';

        return $this->QueryTripleStore($sQuerySubject);
    }

    /**
     * Esta es la acción 'getTripleRowsOrganizacionAsPredicate' 
     * que devuelve las filas de la consulta al "triple store" 
     * en el caso de usar la {@link Organizacion} como <i>predicado</i>.
     * @param integer $OrganizacionId el ID del modelo {@link Organizacion} a cargar
     */
    public function getTripleRowsOrganizacionAsPredicate($OrganizacionId) {
        $sQueryPredicate = '
            SELECT ?subject ?predicate ?object {
                ?subject ?predicate ?object . 
                FILTER (?predicate=uc_orgs:Organizacion-' . $OrganizacionId . ') .
            }';

        return $this->QueryTripleStore($sQueryPredicate);
    }

    /**
     * Esta es la acción 'getTripleRowsOrganizacionAsObject' 
     * que devuelve las filas de la consulta al "triple store" 
     * en el caso de usar la {@link Organizacion} como <i>objeto</i>.
     * @param integer $OrganizacionId el ID del modelo {@link Organizacion} a cargar
     */
    public function getTripleRowsOrganizacionAsObject($OrganizacionId) {
        $sQueryObject = '
            SELECT ?subject ?predicate ?object {
                ?subject ?predicate ?object . 
                FILTER (?object=uc_orgs:Organizacion-' . $OrganizacionId . ') .
            }';

        return $this->QueryTripleStore($sQueryObject);
    }
    
    
    /**
     * Esta es la acción 'getTripleRowsCompetenciaAsSubject' 
     * que devuelve las filas de la consulta al "triple store" 
     * en el caso de usar la {@link Competencia} como <i>sujeto</i>.
     * @param integer $CompetenciaId el ID del modelo {@link Competencia} a cargar
     */
    public function getTripleRowsCompetenciaAsSubject($CompetenciaId) {
        $sQuerySubject = '
            SELECT ?subject ?predicate ?object {
                ?subject ?predicate ?object . 
                FILTER (?subject=uc_comps:Competencia-' . $CompetenciaId . ') .
            }';

        return $this->QueryTripleStore($sQuerySubject);
    }

    /**
     * Esta es la acción 'getTripleRowsCompetenciaAsPredicate' 
     * que devuelve las filas de la consulta al "triple store" 
     * en el caso de usar la {@link Competencia} como <i>predicado</i>.
     * @param integer $CompetenciaId el ID del modelo {@link Competencia} a cargar
     */
    public function getTripleRowsCompetenciaAsPredicate($CompetenciaId) {
        $sQueryPredicate = '
            SELECT ?subject ?predicate ?object {
                ?subject ?predicate ?object . 
                FILTER (?predicate=uc_comps:Competencia-' . $CompetenciaId . ') .
            }';

        return $this->QueryTripleStore($sQueryPredicate);
    }

    /**
     * Esta es la acción 'getTripleRowsCompetenciaAsObject' 
     * que devuelve las filas de la consulta al "triple store" 
     * en el caso de usar la {@link Competencia} como <i>objeto</i>.
     * @param integer $CompetenciaId el ID del modelo {@link Competencia} a cargar
     */
    public function getTripleRowsCompetenciaAsObject($CompetenciaId) {
        $sQueryObject = '
            SELECT ?subject ?predicate ?object {
                ?subject ?predicate ?object . 
                FILTER (?object=uc_comps:Competencia-' . $CompetenciaId . ') .
            }';

        return $this->QueryTripleStore($sQueryObject);
    }
    
    
    /**
     * Esta es la acción 'getTripleRowsCapitalEstructuralAsSubject' 
     * que devuelve las filas de la consulta al "triple store" 
     * en el caso de usar el {@link CapitalEstructural} como <i>sujeto</i>.
     * @param integer $CapitalEstructuralId el ID del modelo {@link CapitalEstructural} a cargar
     */
    public function getTripleRowsCapitalEstructuralAsSubject($CapitalEstructuralId) {
        $sQuerySubject = '
            SELECT ?subject ?predicate ?object {
                ?subject ?predicate ?object . 
                FILTER (?subject=uc_capsests:CapitalEstructural-' . $CapitalEstructuralId . ') .
            }';

        return $this->QueryTripleStore($sQuerySubject);
    }

    /**
     * Esta es la acción 'getTripleRowsCapitalEstructuralAsPredicate' 
     * que devuelve las filas de la consulta al "triple store" 
     * en el caso de usar el {@link CapitalEstructural} como <i>predicado</i>.
     * @param integer $CapitalEstructuralId el ID del modelo {@link CapitalEstructural} a cargar
     */
    public function getTripleRowsCapitalEstructuralAsPredicate($CapitalEstructuralId) {
        $sQueryPredicate = '
            SELECT ?subject ?predicate ?object {
                ?subject ?predicate ?object . 
                FILTER (?predicate=uc_capsests:CapitalEstructural-' . $CapitalEstructuralId . ') .
            }';

        return $this->QueryTripleStore($sQueryPredicate);
    }

    /**
     * Esta es la acción 'getTripleRowsCapitalEstructuralAsObject' 
     * que devuelve las filas de la consulta al "triple store" 
     * en el caso de usar el {@link CapitalEstructural} como <i>objeto</i>.
     * @param integer $CapitalEstructuralId el ID del modelo {@link CapitalEstructural} a cargar
     */
    public function getTripleRowsCapitalEstructuralAsObject($CapitalEstructuralId) {
        $sQueryObject = '
            SELECT ?subject ?predicate ?object {
                ?subject ?predicate ?object . 
                FILTER (?object=uc_capsests:CapitalEstructural-' . $CapitalEstructuralId . ') .
            }';

        return $this->QueryTripleStore($sQueryObject);
    }
    
    
    /**
     * Esta es la acción 'getTripleRowsCapitalHumanoAsSubject' 
     * que devuelve las filas de la consulta al "triple store" 
     * en el caso de usar el {@link CapitalHumano} como <i>sujeto</i>.
     * @param integer $CapitalHumanoId el ID del modelo {@link CapitalHumano} a cargar
     */
    public function getTripleRowsCapitalHumanoAsSubject($CapitalHumanoId) {
        $sQuerySubject = '
            SELECT ?subject ?predicate ?object {
                ?subject ?predicate ?object . 
                FILTER (?subject=uc_capshums:CapitalHumano-' . $CapitalHumanoId . ') .
            }';

        return $this->QueryTripleStore($sQuerySubject);
    }

    /**
     * Esta es la acción 'getTripleRowsCapitalHumanoAsPredicate' 
     * que devuelve las filas de la consulta al "triple store" 
     * en el caso de usar el {@link CapitalHumano} como <i>predicado</i>.
     * @param integer $CapitalHumanoId el ID del modelo {@link CapitalHumano} a cargar
     */
    public function getTripleRowsCapitalHumanoAsPredicate($CapitalHumanoId) {
        $sQueryPredicate = '
            SELECT ?subject ?predicate ?object {
                ?subject ?predicate ?object . 
                FILTER (?predicate=uc_capshums:CapitalHumano-' . $CapitalHumanoId . ') .
            }';

        return $this->QueryTripleStore($sQueryPredicate);
    }

    /**
     * Esta es la acción 'getTripleRowsCapitalHumanoAsObject' 
     * que devuelve las filas de la consulta al "triple store" 
     * en el caso de usar el {@link CapitalHumano} como <i>objeto</i>.
     * @param integer $CapitalHumanoId el ID del modelo {@link CapitalHumano} a cargar
     */
    public function getTripleRowsCapitalHumanoAsObject($CapitalHumanoId) {
        $sQueryObject = '
            SELECT ?subject ?predicate ?object {
                ?subject ?predicate ?object . 
                FILTER (?object=uc_capshums:CapitalHumano-' . $CapitalHumanoId . ') .
            }';

        return $this->QueryTripleStore($sQueryObject);
    }
    
    
    /**
     * Esta es la acción 'getTripleRowsCapitalRelacionalAsSubject' 
     * que devuelve las filas de la consulta al "triple store" 
     * en el caso de usar el {@link CapitalRelacional} como <i>sujeto</i>.
     * @param integer $CapitalRelacionalId el ID del modelo {@link CapitalRelacional} a cargar
     */
    public function getTripleRowsCapitalRelacionalAsSubject($CapitalRelacionalId) {
        $sQuerySubject = '
            SELECT ?subject ?predicate ?object {
                ?subject ?predicate ?object . 
                FILTER (?subject=uc_capsrels:CapitalRelacional-' . $CapitalRelacionalId . ') .
            }';

        return $this->QueryTripleStore($sQuerySubject);
    }

    /**
     * Esta es la acción 'getTripleRowsCapitalRelacionalAsPredicate' 
     * que devuelve las filas de la consulta al "triple store" 
     * en el caso de usar el {@link CapitalRelacional} como <i>predicado</i>.
     * @param integer $CapitalRelacionalId el ID del modelo {@link CapitalRelacional} a cargar
     */
    public function getTripleRowsCapitalRelacionalAsPredicate($CapitalRelacionalId) {
        $sQueryPredicate = '
            SELECT ?subject ?predicate ?object {
                ?subject ?predicate ?object . 
                FILTER (?predicate=uc_capsrels:CapitalRelacional-' . $CapitalRelacionalId . ') .
            }';

        return $this->QueryTripleStore($sQueryPredicate);
    }

    /**
     * Esta es la acción 'getTripleRowsCapitalRelacionalAsObject' 
     * que devuelve las filas de la consulta al "triple store" 
     * en el caso de usar el {@link CapitalRelacional} como <i>objeto</i>.
     * @param integer $CapitalRelacionalId el ID del modelo {@link CapitalRelacional} a cargar
     */
    public function getTripleRowsCapitalRelacionalAsObject($CapitalRelacionalId) {
        $sQueryObject = '
            SELECT ?subject ?predicate ?object {
                ?subject ?predicate ?object . 
                FILTER (?object=uc_capsrels:CapitalRelacional-' . $CapitalRelacionalId . ') .
            }';

        return $this->QueryTripleStore($sQueryObject);
    }

    
    /**
     * Esta es la acción 'QueryTripleStore' para consultar el triple store.
     * @param string $paramQuery el query a ejecutar en el triple store.
     */
    public function QueryTripleStore($paramQuery) {
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
            
            ';

        return $store->query($sQuery . $paramQuery, 'rows');
    }

    /**
     * This is the action to handle external exceptions.
     */
    public function actionError() {
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }

    /**
     * Displays the contact page
     */
    public function actionContact() {
        $model = new ContactForm;
        if (isset($_POST['ContactForm'])) {
            $model->attributes = $_POST['ContactForm'];
            if ($model->validate()) {
                $headers = "From: {$model->email}\r\nReply-To: {$model->email}";
                mail(Yii::app()->params['adminEmail'], $model->subject, $model->body, $headers);
                Yii::app()->user->setFlash('contact', 'Thank you for contacting us. We will respond to you as soon as possible.');
                $this->refresh();
            }
        }
        $this->render('contact', array('model' => $model));
    }

    /**
     * Displays the login page
     */
    public function actionLogin() {
        $model = new LoginForm;

        // if it is ajax validation request
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'login-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        // collect user input data
        if (isset($_POST['LoginForm'])) {
            $model->attributes = $_POST['LoginForm'];
            // validate user input and redirect to the previous page if valid
            if ($model->validate() && $model->login())
                $this->redirect(Yii::app()->user->returnUrl);
        }
        // display the login form
        $this->render('login', array('model' => $model));
    }

    /**
     * Logs out the current user and redirect to homepage.
     */
    public function actionLogout() {
            Yii::app()->user->logout();
            $this->redirect(Yii::app()->homeUrl);
    }

}
