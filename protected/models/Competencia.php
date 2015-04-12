<?php

/**
 * Esta es la clase modelo para la tabla "{{competencia}}".
 *
 * Las siguientes son las columnas de la tabla '{{competencia}}':
 * @property integer $id
 * @property string $nombre
 * @property integer $tipo
 * @property string $modelo
 * @property string $perfil
 * @property integer $area_id
 * @property string $descripcion
 * @property string $created_at
 * @property string $updated_at
 *
 * Las siguientes son las relaciones del modelo:
 * @property Area $area
 * @property CompetenciaHasCapitalHumano[] $competenciaHasCapitalesHumanos
 * @property OrganizacionHasCompetencia[] $organizacionHasCompetencias
 */
class Competencia extends ModelBase
{
        /**
         * @var integer post ID
         * @soap
         */
        public $id_soap;

        /**
         * @var string competencia nombre
         * @soap
         */
        public $nombre_soap;

        /**
         * @var integer competencia tipo
         * @soap
         */
        public $tipo_soap;

        /**
         * @var string competencia modelo
         * @soap
         */
        public $modelo_soap;

        /**
         * @var string competencia perfil
         * @soap
         */
        public $perfil_soap;

        /**
         * @var integer competencia area_id
         * @soap
         */
        public $area_id_soap;

        /**
         * @var string competencia descripcion
         * @soap
         */
        public $descripcion_soap;

        /**
         * @var string competencia created_at
         * @soap
         */
        public $created_at_soap;

        /**
         * @var string competencia updated_at
         * @soap
         */
        public $updated_at_soap;


        private $_compProc;
        private $_compOrg;
        private $_compCapEst;
        private $_compCapHum;
        private $_compCapRel;
        private $_compAll;


        public function __toString()
        {
            return $this->id;
        }

        public function getTipoNombre() {
            return Lookup::item('TipoCompetencia', $this->tipo);
        }


	/**
	 * Returns the static model of the specified AR class.
	 * @return Competencia the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{competencia}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, tipo, modelo', 'required'),
			array('tipo', 'numerical', 'integerOnly'=>true),
			array('nombre, modelo', 'length', 'max'=>32),
			array('perfil', 'length', 'max'=>256),
			array('descripcion', 'length', 'max'=>512),
			array('created_at, updated_at, area_id', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nombre, tipo, modelo, perfil, descripcion, created_at, updated_at, area_id', 'safe', 'on'=>'search'),

                        array('created_at,updated_at','default', 'value'=>new CDbExpression('NOW()'), 'setOnEmpty'=>false,'on'=>'insert'),
                        array('updated_at','default', 'value'=>new CDbExpression('NOW()'), 'setOnEmpty'=>false,'on'=>'update'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'area' => array(self::BELONGS_TO, 'Area', 'area_id'),
			'competenciaHasCapitalesHumanos' => array(self::HAS_MANY, 'CompetenciaHasCapitalHumano', 'competencia_id'),
			'organizacionHasCompetencias' => array(self::HAS_MANY, 'OrganizacionHasCompetencia', 'competencia_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nombre' => 'Nombre',
			'tipo' => 'Tipo',
			'modelo' => 'Modelo',
			'perfil' => 'Perfil',
                        'area_id' => 'Área',
			'descripcion' => 'Descripción',
			'created_at' => 'Creación',
			'updated_at' => 'Actualización',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('tipo',$this->tipo);
		$criteria->compare('modelo',$this->modelo,true);
		$criteria->compare('perfil',$this->perfil,true);
                $criteria->compare('area_id',$this->area_id);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('updated_at',$this->updated_at,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
        
        
        
        
        public function afterSave() {
            $this->isNewRecord=false;
            $this->refresh();
            
            $sQuery = '
                uc_comps:Competencia-'.$this->id.' 
                    a uc_classdefs:ClassCompetencia ; 
                    uc_classdefs:id '.$this->id.' ; 
                    uc_classdefs:nombre "'.$this->nombre.'" ; 
                    uc_classdefs:tipo '.$this->tipo.' ; 
                    uc_classdefs:modelo "'.$this->modelo.'" ; 
                    uc_classdefs:perfil "'.$this->perfil.'" ; 
                    uc_classdefs:area uc_areas:Area-'.$this->area->id.' ; 
                    uc_classdefs:descripcion "'.$this->descripcion.'" ; 
                    uc_classdefs:created_at "'.$this->created_at.'" ; 
                    uc_classdefs:updated_at "'.$this->updated_at.'" .
            ';
            
            $this->StoreNewModelTriples($sQuery);

            return parent::afterSave();
        }
        
        
        public function afterDelete() {
            /*$this->isNewRecord=false;
            $this->refresh();*/
            
            $sQuery = 'uc_comps:Competencia-'.$this->id.' ?p ?o .';
            
            $this->DeleteModelTriples($sQuery);

            return parent::afterDelete();
        }




        public function getCompetenciaProcesos() {
            $aProcesos = array();
            
            foreach (CompetenciaHasCapitalHumano::model()->findAll('competencia_id=:competencia_id', array(':competencia_id'=>$this->id)) as $oCompetenciaHasCapitalHumano) {
                foreach (Proceso::model()->findAll('capital_humano_id=:capital_humano_id', array(':capital_humano_id'=>$oCompetenciaHasCapitalHumano->capitalHumano->id)) as $oProceso) {
                    array_push($aProcesos, $oProceso);
                }
            }
            
            return array_unique($aProcesos);
        }


        public function getCompetenciaOrganizaciones() {
            $aOrganizaciones = array();
            
            foreach (OrganizacionHasCompetencia::model()->findAll('competencia_id=:competencia_id', array(':competencia_id'=>$this->id)) as $oOrganizacionHasCompetencia) {
                array_push($aOrganizaciones, $oOrganizacionHasCompetencia->organizacion);
            }
            
            return array_unique($aOrganizaciones);
        }


        public function getCompetenciaCapitalesEstructurales() {
            $aCapitalesEstructurales = array();

            $criteria = new CDbCriteria;

            $aCapitalesHumanos_id = array();
            foreach ($this->competenciaHasCapitalesHumanos as $oCompetenciaHasCapitalHumano) {
                array_push($aCapitalesHumanos_id, $oCompetenciaHasCapitalHumano->capitalHumano->id);
            }

            $criteria->addInCondition('capital_humano_id', $aCapitalesHumanos_id);

            $aIntangibles = array();
            foreach (CapitalHumanoHasIntangible::model()->findAll($criteria) as $oCapitalHumanoHasIntangible) {
                array_push($aIntangibles, $oCapitalHumanoHasIntangible->intangible);
            }

            $aTangibles = array();
            foreach (CapitalHumanoHasTangible::model()->findAll($criteria) as $oCapitalHumanoHasTangible) {
                array_push($aTangibles, $oCapitalHumanoHasTangible->tangible);
            }

            foreach (CapitalEstructural::model()->findAll() as $oCapitalEstructural) {
                switch ($oCapitalEstructural->tipo) {
                    case 1:
                        foreach ($aIntangibles as $oIntangible) {
                            if ($oIntangible->id == $oCapitalEstructural->un_capital) {
                                array_push($aCapitalesEstructurales, $oCapitalEstructural);
                            }
                        }
                        break;

                    case 2:
                        foreach ($aTangibles as $oTangible) {
                            if ($oTangible->id == $oCapitalEstructural->un_capital) {
                                array_push($aCapitalesEstructurales, $oCapitalEstructural);
                            }
                        }
                        break;

                    default:
                        break;
                }
            }
            
            return array_unique($aCapitalesEstructurales);
        }


        public function getCompetenciaCapitalesHumanos() {
            $aCapitalesHumanos = array();
            
            foreach ($this->competenciaHasCapitalesHumanos as $oCompetenciaHasCapitalHumano) {
                array_push($aCapitalesHumanos, $oCompetenciaHasCapitalHumano->capitalHumano);
            }
            
            return array_unique($aCapitalesHumanos);
        }


        public function getCompetenciaCapitalesRelacionales() {
            $aCapitalesRelacionales = array();

            foreach (OrganizacionHasCompetencia::model()->findAll('competencia_id=:competencia_id', array(':competencia_id'=>$this->id)) as $oOrganizacionHasCompetencia) {
                foreach (CapitalRelacional::model()->findAll() as $oCapitalRelacional) {
                    if ($oCapitalRelacional->organizacion_id == $oOrganizacionHasCompetencia->organizacion->id) {
                        array_push($aCapitalesRelacionales, $oCapitalRelacional);
                    }
                }
            }

            return $aCapitalesRelacionales;
        }
}
