<?php

/**
 * Esta es la clase modelo para la tabla "{{capital_relacional}}".
 *
 * Las siguientes son las columnas de la tabla '{{capital_relacional}}':
 * @property integer $id
 * @property string $afines
 * @property integer $organizacion_id
 * @property string $created_at
 * @property string $updated_at
 *
 * Las siguientes son las relaciones del modelo:
 * @property ProcesoHasCapitalRelacional[] $procesoHasCapitalesRelacionales
 */
class CapitalRelacional extends ModelBase
{
        /**
         * @var integer capital relacional ID
         * @soap
         */
        public $id_soap;

        /**
         * @var string capital relacional afines
         * @soap
         */
        public $afines_soap;

        /**
         * @var integer capital relacional organizacion_id
         * @soap
         */
        public $organizacion_id_soap;

        /**
         * @var string capital relacional created_at
         * @soap
         */
        public $created_at_soap;
        
        /**
         * @var string capital relacional updated_at
         * @soap
         */
        public $updated_at_soap;


        private $_caprelProc;
        private $_caprelOrg;
        private $_caprelComp;
        private $_caprelCapEst;
        private $_caprelCapHum;
        private $_caprelAll;


        public function __toString()
        {
            return $this->id;
        }

        public function getOrgNombre() {
            return Organizacion::model()->findByPk($this->organizacion_id)->nombre;
        }

        public function getOrgSector() {
            return Organizacion::model()->findByPk($this->organizacion_id)->sector->nombre;
        }


	/**
	 * Returns the static model of the specified AR class.
	 * @return CapitalRelacional the static model class
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
		return '{{capital_relacional}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('organizacion_id', 'required'),
			array('organizacion_id', 'numerical', 'integerOnly'=>true),
			array('afines', 'length', 'max'=>128),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, afines, organizacion_id, created_at, updated_at', 'safe', 'on'=>'search'),

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
			'procesoHasCapitalesRelacionales' => array(self::HAS_MANY, 'ProcesoHasCapitalRelacional', 'capital_relacional_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'afines' => 'Afines',
			'organizacion_id' => 'Organización',
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
		$criteria->compare('afines',$this->afines,true);
		$criteria->compare('organizacion_id',$this->organizacion_id);
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
                uc_capsrels:CapitalRelacional-'.$this->id.' 
                    a uc_classdefs:ClassCapitalRelacional ; 
                    uc_classdefs:id '.$this->id.' ; 
                    uc_classdefs:afines "'.$this->afines.'" ; 
                    uc_classdefs:organizacion '.$this->organizacion_id.' ; 
                    uc_classdefs:created_at "'.$this->created_at.'" ; 
                    uc_classdefs:updated_at "'.$this->updated_at.'" .
            ';
            
            $this->StoreNewModelTriples($sQuery);

            return parent::afterSave();
        }
        
        
        public function afterDelete() {
            /*$this->isNewRecord=false;
            $this->refresh();*/
            
            $sQuery = 'uc_capsrels:CapitalRelacional-'.$this->id.' ?p ?o .';
            
            $this->DeleteModelTriples($sQuery);

            return parent::afterDelete();
        }




        public function getCapitalRelacionalProcesos() {
            $aProcesos = array();
            
            foreach ($this->procesoHasCapitalesRelacionales as $oProcesoHasCapitalRelacional) {
                array_push($aProcesos, $oProcesoHasCapitalRelacional->proceso);
            }
            
            return array_unique($aProcesos);
        }


        public function getCapitalRelacionalOrganizaciones() {
            $aOrganizaciones = array();
            
            foreach (Capital::model()->findAll('tipo=3 AND capital=:capital', array(':capital'=>$this->id)) as $oCapital) {
                foreach (OrganizacionHasCapital::model()->findAll('capital_id=:capital_id', array(':capital_id'=>$oCapital->id)) as $oOrganizacionHasCapital) {
                    array_push($aOrganizaciones, $oOrganizacionHasCapital->organizacion);
                }
            }
            
            return array_unique($aOrganizaciones);
        }


        public function getCapitalRelacionalCompetencias() {
            $aCompetencias = array();
            
            foreach (OrganizacionHasCompetencia::model()->findAll('organizacion_id=:organizacion_id', array(':organizacion_id'=>$this->organizacion_id)) as $oOrganizacionHasCompetencia) {
                array_push($aCompetencias, $oOrganizacionHasCompetencia->competencia);
            }
            
            return array_unique($aCompetencias);
        }


        public function getCapitalRelacionalCapitalesEstructurales() {
            $aCapitalesEstructurales = array();
            
            foreach (Capital::model()->findAll('tipo=3 AND capital=:capital', array(':capital'=>$this->id)) as $oCapitalTipoRelacional) {
                foreach (OrganizacionHasCapital::model()->findAll('capital_id=:capital_id', array(':capital_id'=>$oCapitalTipoRelacional->id)) as $oOrganizacionHasCapitalTipoRelacional) {
                    foreach (Capital::model()->findAll('tipo=1') as $oCapitalTipoEstructural) {
                        foreach (OrganizacionHasCapital::model()->findAll('capital_id=:capital_id', array(':capital_id'=>$oCapitalTipoEstructural->id)) as $oOrganizacionHasCapitalTipoEstructural) {
                            if ($oOrganizacionHasCapitalTipoEstructural->organizacion->id == $oOrganizacionHasCapitalTipoRelacional->organizacion->id) {
                                array_push($aCapitalesEstructurales, CapitalEstructural::model()->findByPk($oOrganizacionHasCapitalTipoEstructural->capital->capital));
                            }
                        }
                    }
                }
            }
            
            return array_unique($aCapitalesEstructurales);
        }


        public function getCapitalRelacionalCapitalesHumanos() {
            $aCapitalesHumanos = array();
            
            foreach (Capital::model()->findAll('tipo=3 AND capital=:capital', array(':capital'=>$this->id)) as $oCapitalTipoRelacional) {
                foreach (OrganizacionHasCapital::model()->findAll('capital_id=:capital_id', array(':capital_id'=>$oCapitalTipoRelacional->id)) as $oOrganizacionHasCapitalTipoRelacional) {
                    foreach (Capital::model()->findAll('tipo=2') as $oCapitalTipoHumano) {
                        foreach (OrganizacionHasCapital::model()->findAll('capital_id=:capital_id', array(':capital_id'=>$oCapitalTipoHumano->id)) as $oOrganizacionHasCapitalTipoHumano) {
                            if ($oOrganizacionHasCapitalTipoHumano->organizacion->id == $oOrganizacionHasCapitalTipoRelacional->organizacion->id) {
                                array_push($aCapitalesHumanos, CapitalHumano::model()->findByPk($oOrganizacionHasCapitalTipoHumano->capital->capital));
                            }
                        }
                    }
                }
            }
            
            return array_unique($aCapitalesHumanos);
        }
}
