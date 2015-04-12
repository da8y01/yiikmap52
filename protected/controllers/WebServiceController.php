<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Descripción del controlador WebService.
 *
 * @author Admin
 */
class WebServiceController extends CController
{
    public function actions()
    {
        return array(
            'quote'=>array(
                'class'=>'CWebServiceAction',
            ),
        );
    }




    /**
     * @return Area[] una lista de áreas
     * @soap
     */
    public function getAreas()
    {
        $aAreas = Area::model()->findAll();
        foreach ($aAreas as $area) {
            $area->id_soap = $area->id;
            $area->nombre_soap = $area->nombre;
            $area->descripcion_soap = $area->descripcion;
            $area->created_at_soap = $area->created_at;
            $area->updated_at_soap = $area->updated_at;
        }
        return $aAreas;
    }

    /**
     * @return Capital[] una lista de capitales
     * @soap
     */
    public function getCapitales()
    {
        $aCapitales = Capital::model()->findAll();
        foreach ($aCapitales as $capital) {
            $capital->id_soap = $capital->id;
            $capital->tipo_soap = $capital->tipo;
            $capital->descripcion_soap = $capital->descripcion;
            $capital->capital_soap = $capital->capital;
            $capital->created_at_soap = $capital->created_at;
            $capital->updated_at_soap = $capital->updated_at;
        }
        return $aCapitales;
    }

    /**
     * @return CapitalEstructural[] una lista de capitales estructurales
     * @soap
     */
    public function getCapitalesEstructurales()
    {
        $aCapitalesEstructurales = CapitalEstructural::model()->findAll();
        foreach ($aCapitalesEstructurales as $capitalestructural) {
            $capitalestructural->id_soap = $capitalestructural->id;
            $capitalestructural->nombre_soap = $capitalestructural->nombre;
            $capitalestructural->descripcion_soap = $capitalestructural->descripcion;
            $capitalestructural->tipo_soap = $capitalestructural->tipo;
            $capitalestructural->un_capital_soap = $capitalestructural->un_capital;
            $capitalestructural->created_at_soap = $capitalestructural->created_at;
            $capitalestructural->updated_at_soap = $capitalestructural->updated_at;
        }
        return $aCapitalesEstructurales;
    }

    /**
     * @return CapitalHumano[] una lista de capitales humanos
     * @soap
     */
    public function getCapitalesHumanos()
    {
        $aCapitalesHumanos = CapitalHumano::model()->findAll();
        foreach ($aCapitalesHumanos as $capitalhumano) {
            $capitalhumano->id_soap = $capitalhumano->id;
            $capitalhumano->nombre_soap = $capitalhumano->nombre;
            $capitalhumano->tipo_soap = $capitalhumano->tipo;
            $capitalhumano->contacto_soap = $capitalhumano->contacto;
            $capitalhumano->secundaria_soap = $capitalhumano->secundaria;
            $capitalhumano->created_at_soap = $capitalhumano->created_at;
            $capitalhumano->updated_at_soap = $capitalhumano->updated_at;
        }
        return $aCapitalesHumanos;
    }

    /**
     * @return CapitalRelacional[] una lista de capitales relacionales
     * @soap
     */
    public function getCapitalesRelacionales()
    {
        $aCapitalesRelacionales = CapitalRelacional::model()->findAll();
        foreach ($aCapitalesRelacionales as $capitalrelacional) {
            $capitalrelacional->id_soap = $capitalrelacional->id;
            $capitalrelacional->afines_soap = $capitalrelacional->afines;
            $capitalrelacional->organizacion_id_soap = $capitalrelacional->organizacion_id;
            $capitalrelacional->created_at_soap = $capitalrelacional->created_at;
            $capitalrelacional->updated_at_soap = $capitalrelacional->updated_at;
        }
        return $aCapitalesRelacionales;
    }

    /**
     * @return Competencia[] una lista de competencias
     * @soap
     */
    public function getCompetencias()
    {
        $aCompetencias = Competencia::model()->findAll();
        foreach ($aCompetencias as $competencia) {
            $competencia->id_soap = $competencia->id;
            $competencia->nombre_soap = $competencia->nombre;
            $competencia->tipo_soap = $competencia->tipo;
            $competencia->modelo_soap = $competencia->modelo;
            $competencia->perfil_soap = $competencia->perfil;
            $competencia->area_id_soap = $competencia->area_id;
            $competencia->descripcion_soap = $competencia->descripcion;
            $competencia->created_at_soap = $competencia->created_at;
            $competencia->updated_at_soap = $competencia->updated_at;
        }
        return $aCompetencias;
    }

    /**
     * @return Control[] una lista de controles
     * @soap
     */
    public function getControles()
    {
        $aControles = Control::model()->findAll();
        foreach ($aControles as $control) {
            $control->id_soap = $control->id;
            $control->nombre_soap = $control->nombre;
            $control->tipo_soap = $control->tipo;
            $control->locacion_soap = $control->locacion;
            $control->descripcion_soap = $control->descripcion;
            $control->proceso_id_soap = $control->proceso_id;
            $control->created_at_soap = $control->created_at;
            $control->updated_at_soap = $control->updated_at;
        }
        return $aControles;
    }

    /**
     * @return Documentacion[] una lista de documentaciones
     * @soap
     */
    public function getDocumentaciones()
    {
        $aDocumentaciones = Documentacion::model()->findAll();
        foreach ($aDocumentaciones as $documentacion) {
            $documentacion->id_soap = $documentacion->id;
            $documentacion->nombre_soap = $documentacion->nombre;
            $documentacion->descripcion_soap = $documentacion->descripcion;
            $documentacion->locacion_soap = $documentacion->locacion;
            $documentacion->proceso_id_soap = $documentacion->proceso_id;
            $documentacion->created_at_soap = $documentacion->created_at;
            $documentacion->updated_at_soap = $documentacion->updated_at;
        }
        return $aDocumentaciones;
    }

    /**
     * @return Indicador[] una lista de indicadores
     * @soap
     */
    public function getIndicadores()
    {
        $aIndicadores = Indicador::model()->findAll();
        foreach ($aIndicadores as $indicador) {
            $indicador->id_soap = $indicador->id;
            $indicador->nombre_soap = $indicador->nombre;
            $indicador->descripcion_soap = $indicador->descripcion;
            $indicador->locacion_soap = $indicador->locacion;
            $indicador->proceso_id_soap = $indicador->proceso_id;
            $indicador->created_at_soap = $indicador->created_at;
            $indicador->updated_at_soap = $indicador->updated_at;
        }
        return $aIndicadores;
    }

    /**
     * @return InformacionPrimaria[] una lista de informaciones primarias
     * @soap
     */
    public function getInformacionesPrimarias()
    {
        $aInformacionesPrimarias = InformacionPrimaria::model()->findAll();
        foreach ($aInformacionesPrimarias as $informacionprimaria) {
            $informacionprimaria->id_soap = $informacionprimaria->id;
            $informacionprimaria->que_soap = $informacionprimaria->que;
            $informacionprimaria->quien_soap = $informacionprimaria->quien;
            $informacionprimaria->como_soap = $informacionprimaria->como;
            $informacionprimaria->descripcion_soap = $informacionprimaria->descripcion;
            $informacionprimaria->proceso_id_soap = $informacionprimaria->proceso_id;
            $informacionprimaria->created_at_soap = $informacionprimaria->created_at;
            $informacionprimaria->updated_at_soap = $informacionprimaria->updated_at;
        }
        return $aInformacionesPrimarias;
    }

    /**
     * @return InformacionSecundaria[] una lista de informaciones secundarias
     * @soap
     */
    public function getInformacionesSecundarias()
    {
        $aInformacionesSecundarias = InformacionSecundaria::model()->findAll();
        foreach ($aInformacionesSecundarias as $informacionsecundaria) {
            $informacionsecundaria->id_soap = $informacionsecundaria->id;
            $informacionsecundaria->que_soap = $informacionsecundaria->que;
            $informacionsecundaria->a_quien_soap = $informacionsecundaria->a_quien;
            $informacionsecundaria->como_soap = $informacionsecundaria->como;
            $informacionsecundaria->descripcion_soap = $informacionsecundaria->descripcion;
            $informacionsecundaria->proceso_id_soap = $informacionsecundaria->proceso_id;
            $informacionsecundaria->created_at_soap = $informacionsecundaria->created_at;
            $informacionsecundaria->updated_at_soap = $informacionsecundaria->updated_at;
        }
        return $aInformacionesSecundarias;
    }

    /**
     * @return Intangible[] una lista de intangibles
     * @soap
     */
    public function getIntangibles()
    {
        $aIntangibles = Intangible::model()->findAll();
        foreach ($aIntangibles as $intangible) {
            $intangible->id_soap = $intangible->id;
            $intangible->nombre_soap = $intangible->nombre;
            $intangible->descripcion_soap = $intangible->descripcion;
            $intangible->tipo_soap = $intangible->tipo;
            $intangible->created_at_soap = $intangible->created_at;
            $intangible->updated_at_soap = $intangible->updated_at;
        }
        return $aIntangibles;
    }

    /**
     * @return Normativa[] una lista de normativas
     * @soap
     */
    public function getNormativas()
    {
        $aNormativas = Normativa::model()->findAll();
        foreach ($aNormativas as $normativa) {
            $normativa->id_soap = $normativa->id;
            $normativa->nombre_soap = $normativa->nombre;
            $normativa->descripcion_soap = $normativa->descripcion;
            $normativa->locacion_soap = $normativa->locacion;
            $normativa->created_at_soap = $normativa->created_at;
            $normativa->updated_at_soap = $normativa->updated_at;
        }
        return $aNormativas;
    }

    /**
     * @return Organizacion[] una lista de organizaciones
     * @soap
     */
    public function getOrganizaciones()
    {
        $aOrganizaciones = Organizacion::model()->findAll();
        foreach ($aOrganizaciones as $organizacion) {
            $organizacion->id_soap = $organizacion->id;
            $organizacion->nombre_soap = $organizacion->nombre;
            $organizacion->contacto_soap = $organizacion->contacto;
            $organizacion->url_soap = $organizacion->url;
            $organizacion->sector_id_soap = $organizacion->sector_id;
            $organizacion->descripcion_soap = $organizacion->descripcion;
            $organizacion->created_at_soap = $organizacion->created_at;
            $organizacion->updated_at_soap = $organizacion->updated_at;
        }
        return $aOrganizaciones;
    }

    /**
     * @return Politica[] una lista de politicas
     * @soap
     */
    public function getPoliticas()
    {
        $aPoliticas = Politica::model()->findAll();
        foreach ($aPoliticas as $politica) {
            $politica->id_soap = $politica->id;
            $politica->nombre_soap = $politica->nombre;
            $politica->descripcion_soap = $politica->descripcion;
            $politica->locacion_soap = $politica->locacion;
            $politica->created_at_soap = $politica->created_at;
            $politica->updated_at_soap = $politica->updated_at;
        }
        return $aPoliticas;
    }

    /**
     * @return Proceso[] una lista de procesos
     * @soap
     */
    public function getProcesos()
    {
        $aProcesos = Proceso::model()->findAll();
        foreach ($aProcesos as $proceso) {
            $proceso->id_soap = $proceso->id;
            $proceso->version_soap = $proceso->version;
            $proceso->nombre_soap = $proceso->nombre;
            $proceso->tipo_soap = $proceso->tipo;
            $proceso->objetivo_soap = $proceso->objetivo;
            $proceso->organizacion_id_soap = $proceso->organizacion_id;
            $proceso->capital_humano_id_soap = $proceso->capital_humano_id;
            $proceso->created_at_soap = $proceso->created_at;
            $proceso->updated_at_soap = $proceso->updated_at;
        }
        return $aProcesos;
    }

    /**
     * @return Sector[] una lista de sectores
     * @soap
     */
    public function getSectores()
    {
        $aSectores = Sector::model()->findAll();
        foreach ($aSectores as $sector) {
            $sector->id_soap = $sector->id;
            $sector->nombre_soap = $sector->nombre;
            $sector->descripcion_soap = $sector->descripcion;
            $sector->created_at_soap = $sector->created_at;
            $sector->updated_at_soap = $sector->updated_at;
        }
        return $aSectores;
    }

    /**
     * @return Sistema[] una lista de sistemas
     * @soap
     */
    public function getSistemas()
    {
        $aSistemas = Sistema::model()->findAll();
        foreach ($aSistemas as $sistema) {
            $sistema->id_soap = $sistema->id;
            $sistema->nombre_soap = $sistema->nombre;
            $sistema->descripcion_soap = $sistema->descripcion;
            $sistema->locacion_soap = $sistema->locacion;
            $sistema->created_at_soap = $sistema->created_at;
            $sistema->updated_at_soap = $sistema->updated_at;
        }
        return $aSistemas;
    }

    /**
     * @return Tangible[] una lista de tangibles
     * @soap
     */
    public function getTangibles()
    {
        $aTangibles = Tangible::model()->findAll();
        foreach ($aTangibles as $tangible) {
            $tangible->id_soap = $tangible->id;
            $tangible->nombre_soap = $tangible->nombre;
            $tangible->tipo_soap = $tangible->tipo;
            $tangible->locacion_soap = $tangible->locacion;
            $tangible->descripcion_soap = $tangible->descripcion;
            $tangible->created_at_soap = $tangible->created_at;
            $tangible->updated_at_soap = $tangible->updated_at;
        }
        return $aTangibles;
    }

    /**
     * @return TestCreatividad[] una lista de tests de creatividad
     * @soap
     */
    public function getTestsCreatividad()
    {
        $aTestsCreatividad = TestCreatividad::model()->findAll();
        foreach ($aTestsCreatividad as $testcreatividad) {
            $testcreatividad->id_soap = $testcreatividad->id;
            $testcreatividad->capital_humano_id_soap = $testcreatividad->capital_humano_id;
            $testcreatividad->created_at_soap = $testcreatividad->created_at;
            $testcreatividad->updated_at_soap = $testcreatividad->updated_at;
        }
        return $aTestsCreatividad;
    }

    /**
     * @return TestEmprendimiento[] una lista de tests de emprendimiento
     * @soap
     */
    public function getTestsEmprendimiento()
    {
        $aTestsEmprendimiento = TestEmprendimiento::model()->findAll();
        foreach ($aTestsEmprendimiento as $testemprendimiento) {
            $testemprendimiento->id_soap = $testemprendimiento->id;
            $testemprendimiento->capital_humano_id_soap = $testemprendimiento->capital_humano_id;
            $testemprendimiento->created_at_soap = $testemprendimiento->created_at;
            $testemprendimiento->updated_at_soap = $testemprendimiento->updated_at;
        }
        return $aTestsEmprendimiento;
    }

    /**
     * @return TestLiderazgoTransformacional[] una lista de tests de liderazgo transformacional
     * @soap
     */
    public function getTestsLiderazgoTransformacional()
    {
        $aTestsLiderazgoTransformacional = TestLiderazgoTransformacional::model()->findAll();
        foreach ($aTestsLiderazgoTransformacional as $testliderazgotransformacional) {
            $testliderazgotransformacional->id_soap = $testliderazgotransformacional->id;
            $testliderazgotransformacional->capital_humano_id_soap = $testliderazgotransformacional->capital_humano_id;
            $testliderazgotransformacional->created_at_soap = $testliderazgotransformacional->created_at;
            $testliderazgotransformacional->updated_at_soap = $testliderazgotransformacional->updated_at;
        }
        return $aTestsLiderazgoTransformacional;
    }




    /**
     * @param integer $id ID del {@link Area}
     * @return Area con el id dado
     * @soap
     */
    public function getAreaById($id)
    {
        $area = Area::model()->findByPk($id);

        $area->id_soap = $area->id;
        $area->nombre_soap = $area->nombre;
        $area->descripcion_soap = $area->descripcion;
        $area->created_at_soap = $area->created_at;
        $area->updated_at_soap = $area->updated_at;

        return $area;
    }

    /**
     * @param integer $id ID del {@link Capital}
     * @return Capital con el id dado
     * @soap
     */
    public function getCapitalById($id)
    {
        $capital = Capital::model()->findByPk($id);

        $capital->id_soap = $capital->id;
        $capital->tipo_soap = $capital->tipo;
        $capital->descripcion_soap = $capital->descripcion;
        $capital->capital_soap = $capital->capital;
        $capital->created_at_soap = $capital->created_at;
        $capital->updated_at_soap = $capital->updated_at;

        return $capital;
    }

    /**
     * @param integer $id ID del {@link CapitalEstructural}
     * @return CapitalEstructural con el id dado
     * @soap
     */
    public function getCapitalEstructuralById($id)
    {
        $capitalestructural = CapitalEstructural::model()->findByPk($id);

        $capitalestructural->id_soap = $capitalestructural->id;
        $capitalestructural->nombre_soap = $capitalestructural->nombre;
        $capitalestructural->descripcion_soap = $capitalestructural->descripcion;
        $capitalestructural->tipo_soap = $capitalestructural->tipo;
        $capitalestructural->un_capital_soap = $capitalestructural->un_capital;
        $capitalestructural->created_at_soap = $capitalestructural->created_at;
        $capitalestructural->updated_at_soap = $capitalestructural->updated_at;

        return $capitalestructural;
    }

    /**
     * @param integer $id ID del {@link CapitalHumano}
     * @return CapitalHumano con el id dado
     * @soap
     */
    public function getCapitalHumanoById($id)
    {
        $capitalhumano = CapitalHumano::model()->findByPk($id);

        $capitalhumano->id_soap = $capitalhumano->id;
        $capitalhumano->nombre_soap = $capitalhumano->nombre;
        $capitalhumano->tipo_soap = $capitalhumano->tipo;
        $capitalhumano->contacto_soap = $capitalhumano->contacto;
        $capitalhumano->secundaria_soap = $capitalhumano->secundaria;
        $capitalhumano->created_at_soap = $capitalhumano->created_at;
        $capitalhumano->updated_at_soap = $capitalhumano->updated_at;

        return $capitalhumano;
    }

    /**
     * @param integer $id ID del {@link CapitalRelacional}
     * @return CapitalRelacional con el id dado
     * @soap
     */
    public function getCapitalRelacionalById($id)
    {
        $capitalrelacional = CapitalRelacional::model()->findByPk($id);

        $capitalrelacional->id_soap = $capitalrelacional->id;
        $capitalrelacional->afines_soap = $capitalrelacional->afines;
        $capitalrelacional->organizacion_id_soap = $capitalrelacional->organizacion_id;
        $capitalrelacional->created_at_soap = $capitalrelacional->created_at;
        $capitalrelacional->updated_at_soap = $capitalrelacional->updated_at;

        return $capitalrelacional;
    }

    /**
     * @param integer $id ID de la {@link Competencia}
     * @return Competencia con el id dado
     * @soap
     */
    public function getCompetenciaById($id)
    {
        $competencia = Competencia::model()->findByPk($id);

        $competencia->id_soap = $competencia->id;
        $competencia->nombre_soap = $competencia->nombre;
        $competencia->tipo_soap = $competencia->tipo;
        $competencia->modelo_soap = $competencia->modelo;
        $competencia->perfil_soap = $competencia->perfil;
        $competencia->area_id_soap = $competencia->area_id;
        $competencia->descripcion_soap = $competencia->descripcion;
        $competencia->created_at_soap = $competencia->created_at;
        $competencia->updated_at_soap = $competencia->updated_at;

        return $competencia;
    }

    /**
     * @param integer $id ID del {@link Control}
     * @return Control con el id dado
     * @soap
     */
    public function getControlById($id)
    {
        $control = Control::model()->findByPk($id);

        $control->id_soap = $control->id;
        $control->nombre_soap = $control->nombre;
        $control->tipo_soap = $control->tipo;
        $control->locacion_soap = $control->locacion;
        $control->descripcion_soap = $control->descripcion;
        $control->proceso_id_soap = $control->proceso_id;
        $control->created_at_soap = $control->created_at;
        $control->updated_at_soap = $control->updated_at;

        return $control;
    }

    /**
     * @param integer $id ID de la {@link Documentacion}
     * @return Documentacion con el id dado
     * @soap
     */
    public function getDocumentacionById($id)
    {
        $documentacion = Documentacion::model()->findByPk($id);

        $documentacion->id_soap = $documentacion->id;
        $documentacion->nombre_soap = $documentacion->nombre;
        $documentacion->descripcion_soap = $documentacion->descripcion;
        $documentacion->locacion_soap = $documentacion->locacion;
        $documentacion->proceso_id_soap = $documentacion->proceso_id;
        $documentacion->created_at_soap = $documentacion->created_at;
        $documentacion->updated_at_soap = $documentacion->updated_at;

        return $documentacion;
    }

    /**
     * @param integer $id ID del {@link Indicador}
     * @return Indicador con el id dado
     * @soap
     */
    public function getIndicadorById($id)
    {
        $indicador = Indicador::model()->findByPk($id);

        $indicador->id_soap = $indicador->id;
        $indicador->nombre_soap = $indicador->nombre;
        $indicador->descripcion_soap = $indicador->descripcion;
        $indicador->locacion_soap = $indicador->locacion;
        $indicador->proceso_id_soap = $indicador->proceso_id;
        $indicador->created_at_soap = $indicador->created_at;
        $indicador->updated_at_soap = $indicador->updated_at;

        return $indicador;
    }

    /**
     * @param integer $id ID de la {@link InformacionPrimaria}
     * @return InformacionPrimaria con el id dado
     * @soap
     */
    public function getInformacionPrimariaById($id)
    {
        $informacionprimaria = InformacionPrimaria::model()->findByPk($id);

        $informacionprimaria->id_soap = $informacionprimaria->id;
        $informacionprimaria->que_soap = $informacionprimaria->que;
        $informacionprimaria->quien_soap = $informacionprimaria->quien;
        $informacionprimaria->como_soap = $informacionprimaria->como;
        $informacionprimaria->descripcion_soap = $informacionprimaria->descripcion;
        $informacionprimaria->proceso_id_soap = $informacionprimaria->proceso_id;
        $informacionprimaria->created_at_soap = $informacionprimaria->created_at;
        $informacionprimaria->updated_at_soap = $informacionprimaria->updated_at;

        return $informacionprimaria;
    }

    /**
     * @param integer $id ID de la {@link InformacionSecundaria}
     * @return InformacionSecundaria con el id dado
     * @soap
     */
    public function getInformacionSecundariaById($id)
    {
        $informacionsecundaria = InformacionSecundaria::model()->findByPk($id);

        $informacionsecundaria->id_soap = $informacionsecundaria->id;
        $informacionsecundaria->que_soap = $informacionsecundaria->que;
        $informacionsecundaria->a_quien_soap = $informacionsecundaria->a_quien;
        $informacionsecundaria->como_soap = $informacionsecundaria->como;
        $informacionsecundaria->descripcion_soap = $informacionsecundaria->descripcion;
        $informacionsecundaria->proceso_id_soap = $informacionsecundaria->proceso_id;
        $informacionsecundaria->created_at_soap = $informacionsecundaria->created_at;
        $informacionsecundaria->updated_at_soap = $informacionsecundaria->updated_at;

        return $informacionsecundaria;
    }

    /**
     * @param integer $id ID del {@link Intangible}
     * @return Intangible con el id dado
     * @soap
     */
    public function getIntangibleById($id)
    {
        $intangible = Intangible::model()->findByPk($id);

        $intangible->id_soap = $intangible->id;
        $intangible->nombre_soap = $intangible->nombre;
        $intangible->descripcion_soap = $intangible->descripcion;
        $intangible->tipo_soap = $intangible->tipo;
        $intangible->created_at_soap = $intangible->created_at;
        $intangible->updated_at_soap = $intangible->updated_at;

        return $intangible;
    }

    /**
     * @param integer $id ID de la {@link Normativa}
     * @return Normativa con el id dado
     * @soap
     */
    public function getNormativaById($id)
    {
        $normativa = Normativa::model()->findByPk($id);

        $normativa->id_soap = $normativa->id;
        $normativa->nombre_soap = $normativa->nombre;
        $normativa->descripcion_soap = $normativa->descripcion;
        $normativa->locacion_soap = $normativa->locacion;
        $normativa->created_at_soap = $normativa->created_at;
        $normativa->updated_at_soap = $normativa->updated_at;

        return $normativa;
    }

    /**
     * @param integer $id ID de la {@link Organizacion}
     * @return Organizacion con el id dado
     * @soap
     */
    public function getOrganizacionById($id)
    {
        $organizacion = Organizacion::model()->findByPk($id);

        $organizacion->id_soap = $organizacion->id;
        $organizacion->nombre_soap = $organizacion->nombre;
        $organizacion->contacto_soap = $organizacion->contacto;
        $organizacion->url_soap = $organizacion->url;
        $organizacion->sector_id_soap = $organizacion->sector_id;
        $organizacion->descripcion_soap = $organizacion->descripcion;
        $organizacion->created_at_soap = $organizacion->created_at;
        $organizacion->updated_at_soap = $organizacion->updated_at;

        return $organizacion;
    }

    /**
     * @param integer $id ID de la {@link Politica}
     * @return Politica con el id dado
     * @soap
     */
    public function getPoliticaById($id)
    {
        $politica = Politica::model()->findByPk($id);

        $politica->id_soap = $politica->id;
        $politica->nombre_soap = $politica->nombre;
        $politica->descripcion_soap = $politica->descripcion;
        $politica->locacion_soap = $politica->locacion;
        $politica->created_at_soap = $politica->created_at;
        $politica->updated_at_soap = $politica->updated_at;

        return $politica;
    }

    /**
     * @param integer $id ID del {@link Proceso}
     * @return Proceso con el id dado
     * @soap
     */
    public function getProcesoById($id)
    {
        $proceso = Proceso::model()->findByPk($id);

        $proceso->id_soap = $proceso->id;
        $proceso->version_soap = $proceso->version;
        $proceso->nombre_soap = $proceso->nombre;
        $proceso->tipo_soap = $proceso->tipo;
        $proceso->objetivo_soap = $proceso->objetivo;
        $proceso->organizacion_id_soap = $proceso->organizacion_id;
        $proceso->capital_humano_id_soap = $proceso->capital_humano_id;
        $proceso->created_at_soap = $proceso->created_at;
        $proceso->updated_at_soap = $proceso->updated_at;

        return $proceso;
    }

    /**
     * @param integer $id ID del {@link Sector}
     * @return Sector con el id dado
     * @soap
     */
    public function getSectorById($id)
    {
        $sector = Sector::model()->findByPk($id);

        $sector->id_soap = $sector->id;
        $sector->nombre_soap = $sector->nombre;
        $sector->descripcion_soap = $sector->descripcion;
        $sector->created_at_soap = $sector->created_at;
        $sector->updated_at_soap = $sector->updated_at;

        return $sector;
    }

    /**
     * @param integer $id ID del {@link Sistema}
     * @return Sistema con el id dado
     * @soap
     */
    public function getSistemaById($id)
    {
        $sistema = Sistema::model()->findByPk($id);

        $sistema->id_soap = $sistema->id;
        $sistema->nombre_soap = $sistema->nombre;
        $sistema->descripcion_soap = $sistema->descripcion;
        $sistema->locacion_soap = $sistema->locacion;
        $sistema->created_at_soap = $sistema->created_at;
        $sistema->updated_at_soap = $sistema->updated_at;

        return $sistema;
    }

    /**
     * @param integer $id ID del {@link Tangible}
     * @return Tangible con el id dado
     * @soap
     */
    public function getTangibleById($id)
    {
        $tangible = Tangible::model()->findByPk($id);

        $tangible->id_soap = $tangible->id;
        $tangible->nombre_soap = $tangible->nombre;
        $tangible->tipo_soap = $tangible->tipo;
        $tangible->locacion_soap = $tangible->locacion;
        $tangible->descripcion_soap = $tangible->descripcion;
        $tangible->created_at_soap = $tangible->created_at;
        $tangible->updated_at_soap = $tangible->updated_at;

        return $tangible;
    }

    /**
     * @param integer $id ID del {@link TestCreatividad}
     * @return TestCreatividad con el id dado
     * @soap
     */
    public function getTestCreatividadById($id)
    {
        $testcreatividad = TestCreatividad::model()->findByPk($id);

        $testcreatividad->id_soap = $testcreatividad->id;
        $testcreatividad->capital_humano_id_soap = $testcreatividad->capital_humano_id;
        $testcreatividad->created_at_soap = $testcreatividad->created_at;
        $testcreatividad->updated_at_soap = $testcreatividad->updated_at;

        return $testcreatividad;
    }

    /**
     * @param integer $id ID del {@link TestEmprendimiento}
     * @return TestEmprendimiento con el id dado
     * @soap
     */
    public function getTestEmprendimientoById($id)
    {
        $testemprendimiento = TestEmprendimiento::model()->findByPk($id);

        $testemprendimiento->id_soap = $testemprendimiento->id;
        $testemprendimiento->capital_humano_id_soap = $testemprendimiento->capital_humano_id;
        $testemprendimiento->created_at_soap = $testemprendimiento->created_at;
        $testemprendimiento->updated_at_soap = $testemprendimiento->updated_at;

        return $testemprendimiento;
    }

    /**
     * @param integer $id ID del {@link TestLiderazgoTransformacional}
     * @return TestLiderazgoTransformacional con el id dado
     * @soap
     */
    public function getTestLiderazgoTransformacionalById($id)
    {
        $testliderazgotransformacional = TestLiderazgoTransformacional::model()->findByPk($id);

        $testliderazgotransformacional->id_soap = $testliderazgotransformacional->id;
        $testliderazgotransformacional->capital_humano_id_soap = $testliderazgotransformacional->capital_humano_id;
        $testliderazgotransformacional->created_at_soap = $testliderazgotransformacional->created_at;
        $testliderazgotransformacional->updated_at_soap = $testliderazgotransformacional->updated_at;

        return $testliderazgotransformacional;
    }




    /**
     * @param integer $id ID del {@link Proceso}
     * @return Organizacion[] con las organizaciones vinculadas al Proceso dado
     * @soap
     */
    public function getProcesoOrganizaciones($id) {
            $aProcesoOrganizaciones = Proceso::model()->findByPk($id)->getProcesoOrganizaciones();

            foreach ($aProcesoOrganizaciones as $organizacion) {
                $organizacion->id_soap = $organizacion->id;
                $organizacion->nombre_soap = $organizacion->nombre;
                $organizacion->contacto_soap = $organizacion->contacto;
                $organizacion->url_soap = $organizacion->url;
                $organizacion->sector_id_soap = $organizacion->sector_id;
                $organizacion->descripcion_soap = $organizacion->descripcion;
                $organizacion->created_at_soap = $organizacion->created_at;
                $organizacion->updated_at_soap = $organizacion->updated_at;
            }

            return $aProcesoOrganizaciones;
    }

    /**
     * @param integer $id ID del {@link Proceso}
     * @return Competencia[] con las competencias vinculadas al Proceso dado
     * @soap
     */
    public function getProcesoCompetencias($id) {
            $aProcesoCompetencias = Proceso::model()->findByPk($id)->getProcesoCompetencias();

            foreach ($aProcesoCompetencias as $competencia) {
                $competencia->id_soap = $competencia->id;
                $competencia->nombre_soap = $competencia->nombre;
                $competencia->tipo_soap = $competencia->tipo;
                $competencia->modelo_soap = $competencia->modelo;
                $competencia->perfil_soap = $competencia->perfil;
                $competencia->area_id_soap = $competencia->area_id;
                $competencia->descripcion_soap = $competencia->descripcion;
                $competencia->created_at_soap = $competencia->created_at;
                $competencia->updated_at_soap = $competencia->updated_at;
            }

            return $aProcesoCompetencias;
    }

    /**
     * @param integer $id ID del {@link Proceso}
     * @return CapitalEstructural[] con los capitales estructurales vinculados al Proceso dado
     * @soap
     */
    public function getProcesoCapitalesEstructurales($id) {
            $aProcesoCapitalesEstructurales = Proceso::model()->findByPk($id)->getProcesoCapitalesEstructurales();

            foreach ($aProcesoCapitalesEstructurales as $capitalestructural) {
                $capitalestructural->id_soap = $capitalestructural->id;
                $capitalestructural->nombre_soap = $capitalestructural->nombre;
                $capitalestructural->descripcion_soap = $capitalestructural->descripcion;
                $capitalestructural->tipo_soap = $capitalestructural->tipo;
                $capitalestructural->un_capital_soap = $capitalestructural->un_capital;
                $capitalestructural->created_at_soap = $capitalestructural->created_at;
                $capitalestructural->updated_at_soap = $capitalestructural->updated_at;
            }

            return $aProcesoCapitalesEstructurales;
    }

    /**
     * @param integer $id ID del {@link Proceso}
     * @return CapitalHumano[] con los capitales humanos vinculados al Proceso dado
     * @soap
     */
    public function getProcesoCapitalesHumanos($id) {
            $aProcesoCapitalesHumanos = Proceso::model()->findByPk($id)->getProcesoCapitalesHumanos();

            foreach ($aProcesoCapitalesHumanos as $capitalhumano) {
                $capitalhumano->id_soap = $capitalhumano->id;
                $capitalhumano->nombre_soap = $capitalhumano->nombre;
                $capitalhumano->tipo_soap = $capitalhumano->tipo;
                $capitalhumano->contacto_soap = $capitalhumano->contacto;
                $capitalhumano->secundaria_soap = $capitalhumano->secundaria;
                $capitalhumano->created_at_soap = $capitalhumano->created_at;
                $capitalhumano->updated_at_soap = $capitalhumano->updated_at;
            }

            return $aProcesoCapitalesHumanos;
    }

    /**
     * @param integer $id ID del {@link Proceso}
     * @return CapitalRelacional[] con los capitales relacionales vinculados al Proceso dado
     * @soap
     */
    public function getProcesoCapitalesRelacionales($id) {
            $aProcesoCapitalesRelacionales = Proceso::model()->findByPk($id)->getProcesoCapitalesRelacionales();

            foreach ($aProcesoCapitalesRelacionales as $capitalrelacional) {
                $capitalrelacional->id_soap = $capitalrelacional->id;
                $capitalrelacional->afines_soap = $capitalrelacional->afines;
                $capitalrelacional->organizacion_id_soap = $capitalrelacional->organizacion_id;
                $capitalrelacional->created_at_soap = $capitalrelacional->created_at;
                $capitalrelacional->updated_at_soap = $capitalrelacional->updated_at;
            }

            return $aProcesoCapitalesRelacionales;
    }


    /**
     * @param integer $id ID de la {@link Organizacion}
     * @return Proceso[] con los procesos vinculados a la Organizacion dada
     * @soap
     */
    public function getOrganizacionProcesos($id) {
            $aOrganizacionProcesos = Organizacion::model()->findByPk($id)->getOrganizacionProcesos();

            foreach ($aOrganizacionProcesos as $proceso) {
                $proceso->id_soap = $proceso->id;
                $proceso->version_soap = $proceso->version;
                $proceso->nombre_soap = $proceso->nombre;
                $proceso->tipo_soap = $proceso->tipo;
                $proceso->objetivo_soap = $proceso->objetivo;
                $proceso->organizacion_id_soap = $proceso->organizacion_id;
                $proceso->capital_humano_id_soap = $proceso->capital_humano_id;
                $proceso->created_at_soap = $proceso->created_at;
                $proceso->updated_at_soap = $proceso->updated_at;
            }

            return $aOrganizacionProcesos;
    }

    /**
     * @param integer $id ID de la {@link Organizacion}
     * @return Competencia[] con las competencias vinculadas a la Organizacion dada
     * @soap
     */
    public function getOrganizacionCompetencias($id) {
            $aOrganizacionCompetencias = Organizacion::model()->findByPk($id)->getOrganizacionCompetencias();

            foreach ($aOrganizacionCompetencias as $competencia) {
                $competencia->id_soap = $competencia->id;
                $competencia->nombre_soap = $competencia->nombre;
                $competencia->tipo_soap = $competencia->tipo;
                $competencia->modelo_soap = $competencia->modelo;
                $competencia->perfil_soap = $competencia->perfil;
                $competencia->area_id_soap = $competencia->area_id;
                $competencia->descripcion_soap = $competencia->descripcion;
                $competencia->created_at_soap = $competencia->created_at;
                $competencia->updated_at_soap = $competencia->updated_at;
            }

            return $aOrganizacionCompetencias;
    }

    /**
     * @param integer $id ID de la {@link Organizacion}
     * @return CapitalEstructural[] con los capitales estructurales vinculados a la Organizacion dada
     * @soap
     */
    public function getOrganizacionCapitalesEstructurales($id) {
            $aOrganizacionCapitalesEstructurales = Organizacion::model()->findByPk($id)->getOrganizacionCapitalesEstructurales();

            foreach ($aOrganizacionCapitalesEstructurales as $capitalestructural) {
                $capitalestructural->id_soap = $capitalestructural->id;
                $capitalestructural->nombre_soap = $capitalestructural->nombre;
                $capitalestructural->descripcion_soap = $capitalestructural->descripcion;
                $capitalestructural->tipo_soap = $capitalestructural->tipo;
                $capitalestructural->un_capital_soap = $capitalestructural->un_capital;
                $capitalestructural->created_at_soap = $capitalestructural->created_at;
                $capitalestructural->updated_at_soap = $capitalestructural->updated_at;
            }

            return $aOrganizacionCapitalesEstructurales;
    }

    /**
     * @param integer $id ID de la {@link Organizacion}
     * @return CapitalHumano[] con los capitales humanos vinculados a la Organizacion dada
     * @soap
     */
    public function getOrganizacionCapitalesHumanos($id) {
            $aOrganizacionCapitalesHumanos = Organizacion::model()->findByPk($id)->getOrganizacionCapitalesHumanos();

            foreach ($aOrganizacionCapitalesHumanos as $capitalhumano) {
                $capitalhumano->id_soap = $capitalhumano->id;
                $capitalhumano->nombre_soap = $capitalhumano->nombre;
                $capitalhumano->tipo_soap = $capitalhumano->tipo;
                $capitalhumano->contacto_soap = $capitalhumano->contacto;
                $capitalhumano->secundaria_soap = $capitalhumano->secundaria;
                $capitalhumano->created_at_soap = $capitalhumano->created_at;
                $capitalhumano->updated_at_soap = $capitalhumano->updated_at;
            }

            return $aOrganizacionCapitalesHumanos;
    }

    /**
     * @param integer $id ID de la {@link Organizacion}
     * @return CapitalRelacional[] con los capitales relacionales vinculados a la Organizacion dada
     * @soap
     */
    public function getOrganizacionCapitalesRelacionales($id) {
            $aOrganizacionCapitalesRelacionales = Organizacion::model()->findByPk($id)->getOrganizacionCapitalesRelacionales();

            foreach ($aOrganizacionCapitalesRelacionales as $capitalrelacional) {
                $capitalrelacional->id_soap = $capitalrelacional->id;
                $capitalrelacional->afines_soap = $capitalrelacional->afines;
                $capitalrelacional->organizacion_id_soap = $capitalrelacional->organizacion_id;
                $capitalrelacional->created_at_soap = $capitalrelacional->created_at;
                $capitalrelacional->updated_at_soap = $capitalrelacional->updated_at;
            }

            return $aOrganizacionCapitalesRelacionales;
    }


    /**
     * @param integer $id ID de la {@link Competencia}
     * @return Proceso[] con los procesos vinculados a la Competencia dada
     * @soap
     */
    public function getCompetenciaProcesos($id) {
            $aCompetenciaProcesos = Competencia::model()->findByPk($id)->getCompetenciaProcesos();

            foreach ($aCompetenciaProcesos as $proceso) {
                $proceso->id_soap = $proceso->id;
                $proceso->version_soap = $proceso->version;
                $proceso->nombre_soap = $proceso->nombre;
                $proceso->tipo_soap = $proceso->tipo;
                $proceso->objetivo_soap = $proceso->objetivo;
                $proceso->organizacion_id_soap = $proceso->organizacion_id;
                $proceso->capital_humano_id_soap = $proceso->capital_humano_id;
                $proceso->created_at_soap = $proceso->created_at;
                $proceso->updated_at_soap = $proceso->updated_at;
            }

            return $aCompetenciaProcesos;
    }

    /**
     * @param integer $id ID de la {@link Competencia}
     * @return Organizacion[] con las organizaciones vinculadas a la Competencia dada
     * @soap
     */
    public function getCompetenciaOrganizaciones($id) {
            // Encontrar todas las Org que tienen esa Comp.
            $aCompetenciaOrganizaciones = Competencia::model()->findByPk($id)->getCompetenciaOrganizaciones();

            foreach ($aCompetenciaOrganizaciones as $organizacion) {
                $organizacion->id_soap = $organizacion->id;
                $organizacion->nombre_soap = $organizacion->nombre;
                $organizacion->contacto_soap = $organizacion->contacto;
                $organizacion->url_soap = $organizacion->url;
                $organizacion->sector_id_soap = $organizacion->sector_id;
                $organizacion->descripcion_soap = $organizacion->descripcion;
                $organizacion->created_at_soap = $organizacion->created_at;
                $organizacion->updated_at_soap = $organizacion->updated_at;
            }

            return $aCompetenciaOrganizaciones;
    }

    /**
     * @param integer $id ID de la {@link Competencia}
     * @return CapitalEstructural[] con los capitales estructurales vinculados a la Competencia dada
     * @soap
     */
    public function getCompetenciaCapitalesEstructurales($id) {
            $aCompetenciaCapitalesEstructurales = Competencia::model()->findByPk($id)->getCompetenciaCapitalesEstructurales();

            foreach ($aCompetenciaCapitalesEstructurales as $capitalestructural) {
                $capitalestructural->id_soap = $capitalestructural->id;
                $capitalestructural->nombre_soap = $capitalestructural->nombre;
                $capitalestructural->descripcion_soap = $capitalestructural->descripcion;
                $capitalestructural->tipo_soap = $capitalestructural->tipo;
                $capitalestructural->un_capital_soap = $capitalestructural->un_capital;
                $capitalestructural->created_at_soap = $capitalestructural->created_at;
                $capitalestructural->updated_at_soap = $capitalestructural->updated_at;
            }

            return $aCompetenciaCapitalesEstructurales;
    }

    /**
     * @param integer $id ID de la {@link Competencia}
     * @return CapitalHumano[] con los capitales humanos vinculados a la Competencia dada
     * @soap
     */
    public function getCompetenciaCapitalesHumanos($id) {
            $aCompetenciaCapitalesHumanos = Competencia::model()->findByPk($id)->getCompetenciaCapitalesHumanos();

            foreach ($aCompetenciaCapitalesHumanos as $capitalhumano) {
                $capitalhumano->id_soap = $capitalhumano->id;
                $capitalhumano->nombre_soap = $capitalhumano->nombre;
                $capitalhumano->tipo_soap = $capitalhumano->tipo;
                $capitalhumano->contacto_soap = $capitalhumano->contacto;
                $capitalhumano->secundaria_soap = $capitalhumano->secundaria;
                $capitalhumano->created_at_soap = $capitalhumano->created_at;
                $capitalhumano->updated_at_soap = $capitalhumano->updated_at;
            }
            
            return $aCompetenciaCapitalesHumanos;
    }

    /**
     * @param integer $id ID de la {@link Competencia}
     * @return CapitalRelacional[] con los capitales relacionales vinculados a la Competencia dada
     * @soap
     */
    public function getCompetenciaCapitalesRelacionales($id) {
            $aCompetenciaCapitalesRelacionales = Competencia::model()->findByPk($id)->getCompetenciaCapitalesRelacionales();

            foreach ($aCompetenciaCapitalesRelacionales as $capitalrelacional) {
                $capitalrelacional->id_soap = $capitalrelacional->id;
                $capitalrelacional->afines_soap = $capitalrelacional->afines;
                $capitalrelacional->organizacion_id_soap = $capitalrelacional->organizacion_id;
                $capitalrelacional->created_at_soap = $capitalrelacional->created_at;
                $capitalrelacional->updated_at_soap = $capitalrelacional->updated_at;
            }
            
            return $aCompetenciaCapitalesRelacionales;
    }


    /**
     * @param integer $id ID del {@link CapitalEstructural}
     * @return Proceso[] con los procesos vinculados al Capital Estructural
     * @soap
     */
    public function getCapitalEstructuralProcesos($id) {
            $aCapitalEstructuralProcesos = CapitalEstructural::model()->findByPk($id)->getCapitalEstructuralProcesos();

            foreach ($aCapitalEstructuralProcesos as $proceso) {
                $proceso->id_soap = $proceso->id;
                $proceso->version_soap = $proceso->version;
                $proceso->nombre_soap = $proceso->nombre;
                $proceso->tipo_soap = $proceso->tipo;
                $proceso->objetivo_soap = $proceso->objetivo;
                $proceso->organizacion_id_soap = $proceso->organizacion_id;
                $proceso->capital_humano_id_soap = $proceso->capital_humano_id;
                $proceso->created_at_soap = $proceso->created_at;
                $proceso->updated_at_soap = $proceso->updated_at;
            }

            return $aCapitalEstructuralProcesos;
    }

    /**
     * @param integer $id ID del {@link CapitalEstructural}
     * @return Organizacion[] con las organizaciones vinculadas al Capital Estructural
     * @soap
     */
    public function getCapitalEstructuralOrganizaciones($id) {
            $aCapitalEstructuralOrganizaciones = CapitalEstructural::model()->findByPk($id)->getCapitalEstructuralOrganizaciones();

            foreach ($aCapitalEstructuralOrganizaciones as $organizacion) {
                $organizacion->id_soap = $organizacion->id;
                $organizacion->nombre_soap = $organizacion->nombre;
                $organizacion->contacto_soap = $organizacion->contacto;
                $organizacion->url_soap = $organizacion->url;
                $organizacion->sector_id_soap = $organizacion->sector_id;
                $organizacion->descripcion_soap = $organizacion->descripcion;
                $organizacion->created_at_soap = $organizacion->created_at;
                $organizacion->updated_at_soap = $organizacion->updated_at;
            }
            
            return $aCapitalEstructuralOrganizaciones;
    }

    /**
     * @param integer $id ID del {@link CapitalEstructural}
     * @return Competencia[] con las competencias vinculadas al Capital Estructural
     * @soap
     */
    public function getCapitalEstructuralCompetencias($id) {
            $aCapitalEstructuralCompetencias = CapitalEstructural::model()->findByPk($id)->getCapitalEstructuralCompetencias();

            foreach ($aCapitalEstructuralCompetencias as $competencia) {
                $competencia->id_soap = $competencia->id;
                $competencia->nombre_soap = $competencia->nombre;
                $competencia->tipo_soap = $competencia->tipo;
                $competencia->modelo_soap = $competencia->modelo;
                $competencia->perfil_soap = $competencia->perfil;
                $competencia->area_id_soap = $competencia->area_id;
                $competencia->descripcion_soap = $competencia->descripcion;
                $competencia->created_at_soap = $competencia->created_at;
                $competencia->updated_at_soap = $competencia->updated_at;
            }

            return $aCapitalEstructuralCompetencias;
    }

    /**
     * @param integer $id ID del {@link CapitalEstructural}
     * @return CapitalHumano[] con los capitales humanos vinculados al Capital Estructural
     * @soap
     */
    public function getCapitalEstructuralCapitalesHumanos($id) {
            $aCapitalEstructuralCapitalesHumanos = CapitalEstructural::model()->findByPk($id)->getCapitalEstructuralCapitalesHumanos();

            foreach ($aCapitalEstructuralCapitalesHumanos as $capitalhumano) {
                $capitalhumano->id_soap = $capitalhumano->id;
                $capitalhumano->nombre_soap = $capitalhumano->nombre;
                $capitalhumano->tipo_soap = $capitalhumano->tipo;
                $capitalhumano->contacto_soap = $capitalhumano->contacto;
                $capitalhumano->secundaria_soap = $capitalhumano->secundaria;
                $capitalhumano->created_at_soap = $capitalhumano->created_at;
                $capitalhumano->updated_at_soap = $capitalhumano->updated_at;
            }

            return $aCapitalEstructuralCapitalesHumanos;
    }

    /**
     * @param integer $id ID del {@link CapitalEstructural}
     * @return CapitalRelacional[] con los capitales relacionales vinculados al Capital Estructural
     * @soap
     */
    public function getCapitalEstructuralCapitalesRelacionales($id) {
            $aCapitalEstructuralCapitalesRelacionales = CapitalEstructural::model()->findByPk($id)->getCapitalEstructuralCapitalesRelacionales();

            foreach ($aCapitalEstructuralCapitalesRelacionales as $capitalrelacional) {
                $capitalrelacional->id_soap = $capitalrelacional->id;
                $capitalrelacional->afines_soap = $capitalrelacional->afines;
                $capitalrelacional->organizacion_id_soap = $capitalrelacional->organizacion_id;
                $capitalrelacional->created_at_soap = $capitalrelacional->created_at;
                $capitalrelacional->updated_at_soap = $capitalrelacional->updated_at;
            }

            return $aCapitalEstructuralCapitalesRelacionales;
    }


    /**
     * @param integer $id ID del {@link CapitalHumano}
     * @return Proceso[] con los procesos vinculados al Capital Humano
     * @soap
     */
    public function getCapitalHumanoProcesos($id) {
            $aCapitalHumanoProcesos = CapitalHumano::model()->findByPk($id)->getCapitalHumanoProcesos();

            foreach ($aCapitalHumanoProcesos as $proceso) {
                $proceso->id_soap = $proceso->id;
                $proceso->version_soap = $proceso->version;
                $proceso->nombre_soap = $proceso->nombre;
                $proceso->tipo_soap = $proceso->tipo;
                $proceso->objetivo_soap = $proceso->objetivo;
                $proceso->organizacion_id_soap = $proceso->organizacion_id;
                $proceso->capital_humano_id_soap = $proceso->capital_humano_id;
                $proceso->created_at_soap = $proceso->created_at;
                $proceso->updated_at_soap = $proceso->updated_at;
            }

            return $aCapitalHumanoProcesos;
    }

    /**
     * @param integer $id ID del {@link CapitalHumano}
     * @return Organizacion[] con las organizaciones vinculadas al Capital Humano
     * @soap
     */
    public function getCapitalHumanoOrganizaciones($id) {
            $aCapitalHumanoOrganizaciones = CapitalHumano::model()->findByPk($id)->getCapitalHumanoOrganizaciones();

            foreach ($aCapitalHumanoOrganizaciones as $organizacion) {
                $organizacion->id_soap = $organizacion->id;
                $organizacion->nombre_soap = $organizacion->nombre;
                $organizacion->contacto_soap = $organizacion->contacto;
                $organizacion->url_soap = $organizacion->url;
                $organizacion->sector_id_soap = $organizacion->sector_id;
                $organizacion->descripcion_soap = $organizacion->descripcion;
                $organizacion->created_at_soap = $organizacion->created_at;
                $organizacion->updated_at_soap = $organizacion->updated_at;
            }

            return $aCapitalHumanoOrganizaciones;
    }

    /**
     * @param integer $id ID del {@link CapitalHumano}
     * @return Competencia[] con las competencias vinculadas al Capital Humano
     * @soap
     */
    public function getCapitalHumanoCompetencias($id) {
            $aCapitalHumanoCompetencias = CapitalHumano::model()->findByPk($id)->getCapitalHumanoCompetencias();

            foreach ($aCapitalHumanoCompetencias as $competencia) {
                $competencia->id_soap = $competencia->id;
                $competencia->nombre_soap = $competencia->nombre;
                $competencia->tipo_soap = $competencia->tipo;
                $competencia->modelo_soap = $competencia->modelo;
                $competencia->perfil_soap = $competencia->perfil;
                $competencia->area_id_soap = $competencia->area_id;
                $competencia->descripcion_soap = $competencia->descripcion;
                $competencia->created_at_soap = $competencia->created_at;
                $competencia->updated_at_soap = $competencia->updated_at;
            }

            return $aCapitalHumanoCompetencias;
    }

    /**
     * @param integer $id ID del {@link CapitalHumano}
     * @return CapitalEstructural[] con los capitales humanos vinculados al Capital Humano
     * @soap
     */
    public function getCapitalHumanoCapitalesEstructurales($id) {
            $aCapitalHumanoCapitalesEstructurales = CapitalHumano::model()->findByPk($id)->getCapitalHumanoCapitalesEstructurales();

            foreach ($aCapitalHumanoCapitalesEstructurales as $capitalestructural) {
                $capitalestructural->id_soap = $capitalestructural->id;
                $capitalestructural->nombre_soap = $capitalestructural->nombre;
                $capitalestructural->descripcion_soap = $capitalestructural->descripcion;
                $capitalestructural->tipo_soap = $capitalestructural->tipo;
                $capitalestructural->un_capital_soap = $capitalestructural->un_capital;
                $capitalestructural->created_at_soap = $capitalestructural->created_at;
                $capitalestructural->updated_at_soap = $capitalestructural->updated_at;
            }

            return $aCapitalHumanoCapitalesEstructurales;
    }

    /**
     * @param integer $id ID del {@link CapitalHumano}
     * @return CapitalRelacional[] con los capitales relacionales vinculados al Capital Humano
     * @soap
     */
    public function getCapitalHumanoCapitalesRelacionales($id) {
            $aCapitalHumanoCapitalesRelacionales = CapitalHumano::model()->findByPk($id)->getCapitalHumanoCapitalesRelacionales();

            foreach ($aCapitalHumanoCapitalesRelacionales as $capitalrelacional) {
                $capitalrelacional->id_soap = $capitalrelacional->id;
                $capitalrelacional->afines_soap = $capitalrelacional->afines;
                $capitalrelacional->organizacion_id_soap = $capitalrelacional->organizacion_id;
                $capitalrelacional->created_at_soap = $capitalrelacional->created_at;
                $capitalrelacional->updated_at_soap = $capitalrelacional->updated_at;
            }

            return $aCapitalHumanoCapitalesRelacionales;
    }


    /**
     * @param integer $id ID del {@link CapitalRelacional}
     * @return Proceso[] con los procesos vinculados al Capital Relacional
     * @soap
     */
    public function getCapitalRelacionalProcesos($id) {
            $aCapitalRelacionalProcesos = CapitalRelacional::model()->findByPk($id)->getCapitalRelacionalProcesos();

            foreach ($aCapitalRelacionalProcesos as $proceso) {
                $proceso->id_soap = $proceso->id;
                $proceso->version_soap = $proceso->version;
                $proceso->nombre_soap = $proceso->nombre;
                $proceso->tipo_soap = $proceso->tipo;
                $proceso->objetivo_soap = $proceso->objetivo;
                $proceso->organizacion_id_soap = $proceso->organizacion_id;
                $proceso->capital_humano_id_soap = $proceso->capital_humano_id;
                $proceso->created_at_soap = $proceso->created_at;
                $proceso->updated_at_soap = $proceso->updated_at;
            }

            return $aCapitalRelacionalProcesos;
    }

    /**
     * @param integer $id ID del {@link CapitalRelacional}
     * @return Organizacion[] con las organizaciones vinculadas al Capital Relacional
     * @soap
     */
    public function getCapitalRelacionalOrganizaciones($id) {
            $aCapitalRelacionalOrganizaciones = CapitalRelacional::model()->findByPk($id)->getCapitalRelacionalOrganizaciones();

            foreach ($aCapitalRelacionalOrganizaciones as $organizacion) {
                $organizacion->id_soap = $organizacion->id;
                $organizacion->nombre_soap = $organizacion->nombre;
                $organizacion->contacto_soap = $organizacion->contacto;
                $organizacion->url_soap = $organizacion->url;
                $organizacion->sector_id_soap = $organizacion->sector_id;
                $organizacion->descripcion_soap = $organizacion->descripcion;
                $organizacion->created_at_soap = $organizacion->created_at;
                $organizacion->updated_at_soap = $organizacion->updated_at;
            }

            return $aCapitalRelacionalOrganizaciones;
    }

    /**
     * @param integer $id ID del {@link CapitalRelacional}
     * @return Competencia[] con las competencias vinculadas al Capital Relacional
     * @soap
     */
    public function getCapitalRelacionalCompetencias($id) {
            $aCapitalRelacionalCompetencias = CapitalRelacional::model()->findByPk($id)->getCapitalRelacionalCompetencias();

            foreach ($aCapitalRelacionalCompetencias as $competencia) {
                $competencia->id_soap = $competencia->id;
                $competencia->nombre_soap = $competencia->nombre;
                $competencia->tipo_soap = $competencia->tipo;
                $competencia->modelo_soap = $competencia->modelo;
                $competencia->perfil_soap = $competencia->perfil;
                $competencia->area_id_soap = $competencia->area_id;
                $competencia->descripcion_soap = $competencia->descripcion;
                $competencia->created_at_soap = $competencia->created_at;
                $competencia->updated_at_soap = $competencia->updated_at;
            }

            return $aCapitalRelacionalCompetencias;
    }

    /**
     * @param integer $id ID del {@link CapitalRelacional}
     * @return CapitalEstructural[] con los capitales humanos vinculados al Capital Relacional
     * @soap
     */
    public function getCapitalRelacionalCapitalesEstructurales($id) {
            $aCapitalRelacionalCapitalesEstructurales = CapitalRelacional::model()->findByPk($id)->getCapitalRelacionalCapitalesEstructurales();

            foreach ($aCapitalRelacionalCapitalesEstructurales as $capitalestructural) {
                $capitalestructural->id_soap = $capitalestructural->id;
                $capitalestructural->nombre_soap = $capitalestructural->nombre;
                $capitalestructural->descripcion_soap = $capitalestructural->descripcion;
                $capitalestructural->tipo_soap = $capitalestructural->tipo;
                $capitalestructural->un_capital_soap = $capitalestructural->un_capital;
                $capitalestructural->created_at_soap = $capitalestructural->created_at;
                $capitalestructural->updated_at_soap = $capitalestructural->updated_at;
            }

            return $aCapitalRelacionalCapitalesEstructurales;
    }

    /**
     * @param integer $id ID del {@link CapitalRelacional}
     * @return CapitalHumano[] con los capitales humanos vinculados al Capital Relacional
     * @soap
     */
    public function getCapitalRelacionalCapitalesHumanos($id) {
            $aCapitalRelacionalCapitalesHumanos = CapitalRelacional::model()->findByPk($id)->getCapitalRelacionalCapitalesHumanos();

            foreach ($aCapitalRelacionalCapitalesHumanos as $capitalhumano) {
                $capitalhumano->id_soap = $capitalhumano->id;
                $capitalhumano->nombre_soap = $capitalhumano->nombre;
                $capitalhumano->tipo_soap = $capitalhumano->tipo;
                $capitalhumano->contacto_soap = $capitalhumano->contacto;
                $capitalhumano->secundaria_soap = $capitalhumano->secundaria;
                $capitalhumano->created_at_soap = $capitalhumano->created_at;
                $capitalhumano->updated_at_soap = $capitalhumano->updated_at;
            }

            return $aCapitalRelacionalCapitalesHumanos;
    }

}
?>
