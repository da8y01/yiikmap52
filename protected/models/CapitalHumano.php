<?php

/**
 * Esta es la clase modelo para la tabla "{{capital_humano}}".
 *
 * Las siguientes son las columnas de la tabla '{{capital_humano}}':
 * @property integer $id
 * @property string $nombre
 * @property integer $tipo
 * @property string $contacto
 * @property string $secundaria
 * @property string $created_at
 * @property string $updated_at
 *
 * Las siguientes son las relaciones del modelo:
 * @property CapitalHumanoHasIntangible[] $capitalHumanoHasIntangibles
 * @property CapitalHumanoHasTangible[] $capitalHumanoHasTangibles
 * @property CompetenciaHasCapitalHumano[] $competenciaHasCapitalesHumanos
 * @property Proceso[] $procesos
 * @property ProcesoHasCapitalHumano[] $procesoHasCapitalesHumanos
 */
class CapitalHumano extends ModelBase
{
        /**
         * @var integer capital humano ID
         * @soap
         */
        public $id_soap;

        /**
         * @var string capital humano nombre
         * @soap
         */
        public $nombre_soap;

        /**
         * @var integer capital humano tipo
         * @soap
         */
        public $tipo_soap;

        /**
         * @var string capital humano contacto
         * @soap
         */
        public $contacto_soap;

        /**
         * @var string capital humano secundaria
         * @soap
         */
        public $secundaria_soap;

        /**
         * @var string capital humano created_at
         * @soap
         */
        public $created_at_soap;

        /**
         * @var string capital humano updated_at
         * @soap
         */
        public $updated_at_soap;


        private $_caphumProc;
        private $_caphumOrg;
        private $_caphumComp;
        private $_caphumCapEst;
        private $_caphumCapRel;
        private $_caphumAll;


        public function __toString()
        {
            return $this->id;
        }

        public function getTipoNombre() {
            return Lookup::item('TipoCapitalHumano', $this->tipo);
        }


	/**
	 * Returns the static model of the specified AR class.
	 * @return CapitalHumano the static model class
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
		return '{{capital_humano}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, tipo, contacto', 'required'),
			array('tipo', 'numerical', 'integerOnly'=>true),
			array('nombre', 'length', 'max'=>64),
			array('contacto', 'length', 'max'=>256),
			array('secundaria', 'length', 'max'=>128),
			array('created_at, updated_at', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nombre, tipo, contacto, secundaria, created_at, updated_at', 'safe', 'on'=>'search'),

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
			'capitalHumanoHasIntangibles' => array(self::HAS_MANY, 'CapitalHumanoHasIntangible', 'capital_humano_id'),
			'capitalHumanoHasTangibles' => array(self::HAS_MANY, 'CapitalHumanoHasTangible', 'capital_humano_id'),
			'competenciaHasCapitalesHumanos' => array(self::HAS_MANY, 'CompetenciaHasCapitalHumano', 'capital_humano_id'),
			'procesos' => array(self::HAS_MANY, 'Proceso', 'capital_humano_id'),
			'procesoHasCapitalesHumanos' => array(self::HAS_MANY, 'ProcesoHasCapitalHumano', 'capital_humano_id'),
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
			'contacto' => 'Contacto',
			'secundaria' => 'Secundaria',
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
		$criteria->compare('contacto',$this->contacto,true);
		$criteria->compare('secundaria',$this->secundaria,true);
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
                uc_capshums:CapitalHumano-'.$this->id.' 
                    a uc_classdefs:ClassCapitalHumano ; 
                    uc_classdefs:id '.$this->id.' ; 
                    uc_classdefs:nombre "'.$this->nombre.'" ; 
                    uc_classdefs:tipo '.$this->tipo.' ; 
                    uc_classdefs:contacto "'.$this->contacto.'" ; 
                    uc_classdefs:secundaria "'.$this->secundaria.'" ; 
                    uc_classdefs:created_at "'.$this->created_at.'" ; 
                    uc_classdefs:updated_at "'.$this->updated_at.'" .
            ';
            
            $this->StoreNewModelTriples($sQuery);

            return parent::afterSave();
        }
        
        
        public function afterDelete() {
            /*$this->isNewRecord=false;
            $this->refresh();*/
            
            $sQuery = 'uc_capshums:CapitalHumano-'.$this->id.' ?p ?o .';
            
            $this->DeleteModelTriples($sQuery);

            return parent::afterDelete();
        }




        public function getCapitalHumanoProcesos() {
            $aProcesos = array();
            
            foreach ($this->procesoHasCapitalesHumanos as $oProcesoHasCapitalesHumanos) {
                array_push($aProcesos, $oProcesoHasCapitalesHumanos->proceso);
            }
            
            return array_unique($aProcesos);
        }


        public function getCapitalHumanoOrganizaciones() {
            $aOrganizaciones = array();
            
            foreach (Capital::model()->findAll('tipo=2 AND capital=:capital', array(':capital'=>$this->id)) as $oCapital) {
                foreach (OrganizacionHasCapital::model()->findAll('capital_id=:capital_id', array(':capital_id'=>$oCapital->id)) as $oOrganizacionHasCapital) {
                    array_push($aOrganizaciones, $oOrganizacionHasCapital->organizacion);
                }
            }
            
            return array_unique($aOrganizaciones);
        }


        public function getCapitalHumanoCompetencias() {
            $aCompetencias = array();
            
            foreach ($this->competenciaHasCapitalesHumanos as $oCompetenciaHasCapitalesHumanos) {
                array_push($aCompetencias, $oCompetenciaHasCapitalesHumanos->competencia);
            }
            
            return array_unique($aCompetencias);
        }


        public function getCapitalHumanoCapitalesEstructurales() {
            $aCapitalesEstructurales = array();
            
            $aCapitalesEstructuralesIntangibles = array();
            foreach (CapitalHumanoHasIntangible::model()->findAll('capital_humano_id=:capital_humano_id', array(':capital_humano_id'=>$this->id)) as $oCapitalHumanoHasIntangible) {
                foreach (CapitalEstructural::model()->findAll('tipo=1 AND un_capital=:un_capital', array(':un_capital'=>$oCapitalHumanoHasIntangible->intangible->id)) as $oCapitalEstructuralIntangible) {
                    array_push($aCapitalesEstructuralesIntangibles, $oCapitalEstructuralIntangible);
                }
            }

            $aCapitalesEstructuralesTangibles = array();
            foreach (CapitalHumanoHasTangible::model()->findAll('capital_humano_id=:capital_humano_id', array(':capital_humano_id'=>$this->id)) as $oCapitalHumanoHasTangible) {
                foreach (CapitalEstructural::model()->findAll('tipo=2 AND un_capital=:un_capital', array(':un_capital'=>$oCapitalHumanoHasTangible->tangible->id)) as $oCapitalEstructuralTangible) {
                    array_push($aCapitalesEstructuralesTangibles, $oCapitalEstructuralTangible);
                }
            }


            foreach ($aCapitalesEstructuralesIntangibles as $oCapitalEstructuralIntangible) {
                array_push($aCapitalesEstructurales, $oCapitalEstructuralIntangible);
            }

            foreach ($aCapitalesEstructuralesTangibles as $oCapitalEstructuralTangible) {
                array_push($aCapitalesEstructurales, $oCapitalEstructuralTangible);
            }
            
            return array_unique($aCapitalesEstructurales);
        }


        public function getCapitalHumanoCapitalesRelacionales() {
            $aCapitalesRelacionales = array();
            
            foreach (Capital::model()->findAll('tipo=3') as $oCapitalTipoRelacional) {
                foreach (OrganizacionHasCapital::model()->findAll('capital_id=:capital_id', array(':capital_id'=>$oCapitalTipoRelacional->id)) as $oOrganizacionHasCapitalTipoRelacional) {
                    foreach (Capital::model()->findAll('tipo=2 AND capital=:capital', array(':capital'=>$this->id)) as $oCapitalTipoHumano) {
                        foreach (OrganizacionHasCapital::model()->findAll('capital_id=:capital_id', array(':capital_id'=>$oCapitalTipoHumano->id)) as $oOrganizacionHasCapitalTipoHumano) {
                            if ($oOrganizacionHasCapitalTipoRelacional->organizacion->id == $oOrganizacionHasCapitalTipoHumano->organizacion->id) {
                                array_push($aCapitalesRelacionales, CapitalRelacional::model()->findByPk($oCapitalTipoRelacional->capital));
                            }
                        }
                    }
                }
            }
            
            return array_unique($aCapitalesRelacionales);
        }
}
