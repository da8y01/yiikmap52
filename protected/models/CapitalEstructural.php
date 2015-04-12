<?php

/**
 * Esta es la clase modelo para la tabla "{{capital_estructural}}".
 *
 * Las siguientes son las columnas de la tabla '{{capital_estructural}}':
 * @property integer $id
 * @property string $nombre
 * @property string $descripcion
 * @property integer $tipo
 * @property integer $un_capital
 * @property string $created_at
 * @property string $updated_at
 *
 * Las siguientes son las relaciones del modelo:
 * @property ProcesoHasCapitalEstructural[] $procesoHasCapitalesEstructurales
 */
class CapitalEstructural extends ModelBase
{
        /**
         * @var integer capital estructural ID
         * @soap
         */
        public $id_soap;

        /**
         * @var string capital estructural nombre
         * @soap
         */
        public $nombre_soap;

        /**
         * @var string capital estructural descripcion
         * @soap
         */
        public $descripcion_soap;

        /**
         * @var integer capital estructural tipo
         * @soap
         */
        public $tipo_soap;

        /**
         * @var integer capital estructural un_capital
         * @soap
         */
        public $un_capital_soap;

        /**
         * @var string capital estructural created_at
         * @soap
         */
        public $created_at_soap;

        /**
         * @var string capital estructural updated_at
         * @soap
         */
        public $updated_at_soap;


        private $_capestProc;
        private $_capestOrg;
        private $_capestComp;
        private $_capestCapHum;
        private $_capestCapRel;
        private $_capestAll;


        public function __toString()
        {
            return $this->id;
        }

        public function getTipoNombre() {
            return Lookup::item('TipoCapitalEstructural', $this->tipo);
        }


	/**
	 * Returns the static model of the specified AR class.
	 * @return CapitalEstructural the static model class
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
		return '{{capital_estructural}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, tipo, un_capital', 'required'),
			array('tipo, un_capital', 'numerical', 'integerOnly'=>true),
			array('nombre', 'length', 'max'=>64),
			array('descripcion', 'length', 'max'=>512),
			array('updated_at', 'safe'),
                        //array('updated_at, created_at', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nombre, descripcion, tipo, un_capital, created_at, updated_at', 'safe', 'on'=>'search'),

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
			'procesoHasCapitalesEstructurales' => array(self::HAS_MANY, 'ProcesoHasCapitalEstructural', 'capital_estructural_id'),
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
			'descripcion' => 'Descripción',
			'tipo' => 'Tipo',
			'un_capital' => 'Un Capital',
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
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('tipo',$this->tipo);
		$criteria->compare('un_capital',$this->un_capital);
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
                uc_capsests:CapitalEstructural-'.$this->id.' 
                    a uc_classdefs:ClassCapitalEstructural ; 
                    uc_classdefs:id '.$this->id.' ; 
                    uc_classdefs:nombre "'.$this->nombre.'" ; 
                    uc_classdefs:descripcion "'.$this->descripcion.'" ; 
                    uc_classdefs:tipo '.$this->tipo.' ; 
                    uc_classdefs:un_capital '.$this->un_capital.' ; 
                    uc_classdefs:created_at "'.$this->created_at.'" ; 
                    uc_classdefs:updated_at "'.$this->updated_at.'" .
            ';
            
            $this->StoreNewModelTriples($sQuery);

            return parent::afterSave();
        }
        
        
        public function afterDelete() {
            /*$this->isNewRecord=false;
            $this->refresh();*/
            
            $sQuery = 'uc_capsests:CapitalEstructural-'.$this->id.' ?p ?o .';
            
            $this->DeleteModelTriples($sQuery);

            return parent::afterDelete();
        }




        public function getCapitalEstructuralProcesos() {
            $aProcesos = array();
            
            foreach ($this->procesoHasCapitalesEstructurales as $oProcesoHasCapitalEstructural) {
                array_push($aProcesos, $oProcesoHasCapitalEstructural->proceso);
            }
            
            return array_unique($aProcesos);
        }


        public function getCapitalEstructuralOrganizaciones() {
            $aOrganizaciones = array();
            
            foreach (OrganizacionHasCapital::model()->findAll() as $oOrganizacionHasCapital) {
                if ( ($oOrganizacionHasCapital->capital->tipo==1) && ($oOrganizacionHasCapital->capital->capital==$this->id) ) {
                    array_push($aOrganizaciones, $oOrganizacionHasCapital->organizacion);
                }
            }
            
            return array_unique($aOrganizaciones);
        }


        public function getCapitalEstructuralCompetencias() {
            $aCompetencias = array();
            
            switch ($this->tipo) {
                case 1:
                    foreach (CapitalHumanoHasIntangible::model()->findAll('intangible_id=:intangible_id', array(':intangible_id'=>$this->un_capital)) as $oCapitalHumanoHasIntangible) {
                        foreach (CompetenciaHasCapitalHumano::model()->findAll('capital_humano_id=:capital_humano_id', array(':capital_humano_id'=>$oCapitalHumanoHasIntangible->capitalHumano->id)) as $oCompetenciaHasCapitalHumano) {
                            array_push($aCompetencias, $oCompetenciaHasCapitalHumano->competencia);
                        }
                    }
                    break;

                case 2:
                    foreach (CapitalHumanoHasTangible::model()->findAll('tangible_id=:tangible_id', array(':tangible_id'=>$this->un_capital)) as $oCapitalHumanoHasTangible) {
                        foreach (CompetenciaHasCapitalHumano::model()->findAll('capital_humano_id=:capital_humano_id', array(':capital_humano_id'=>$oCapitalHumanoHasTangible->capitalHumano->id)) as $oCompetenciaHasCapitalHumano) {
                            array_push($aCompetencias, $oCompetenciaHasCapitalHumano->competencia);
                        }
                    }
                    break;

                default:
                    break;
            }
            
            return array_unique($aCompetencias);
        }


        public function getCapitalEstructuralCapitalesHumanos() {
            $aCapitalesHumanos = array();
            
            switch ($this->tipo) {
                case 1:
                    foreach (CapitalHumanoHasIntangible::model()->findAll('intangible_id=:intangible_id', array(':intangible_id'=>$this->un_capital)) as $oCapitalHumanoHasIntangible) {
                        array_push($aCapitalesHumanos, $oCapitalHumanoHasIntangible->capitalHumano);
                    }
                    break;

                case 2:
                    foreach (CapitalHumanoHasTangible::model()->findAll('tangible_id=:tangible_id', array(':tangible_id'=>$this->un_capital)) as $oCapitalHumanoHasTangible) {
                        array_push($aCapitalesHumanos, $oCapitalHumanoHasTangible->capitalHumano);
                    }
                    break;

                default:
                    break;
            }
            
            return array_unique($aCapitalesHumanos);
        }


        public function getCapitalEstructuralCapitalesRelacionales() {
            $aCapitalesRelacionales = array();
            
            foreach (Capital::model()->findAll('tipo=3') as $oCapitalTipoRelacional) {
                foreach (OrganizacionHasCapital::model()->findAll('capital_id=:capital_id', array(':capital_id'=>$oCapitalTipoRelacional->id)) as $oOrganizacionHasCapitalTipoRelacional) {
                    foreach (Capital::model()->findAll('tipo=1 AND capital=:capital', array(':capital'=>$this->id)) as $oCapitalTipoEstructural) {
                        foreach (OrganizacionHasCapital::model()->findAll('capital_id=:capital_id', array(':capital_id'=>$oCapitalTipoEstructural->id)) as $oOrganizacionHasCapitalTipoEstructural) {
                            if ($oOrganizacionHasCapitalTipoRelacional->organizacion->id == $oOrganizacionHasCapitalTipoEstructural->organizacion->id) {
                                array_push($aCapitalesRelacionales, CapitalRelacional::model()->findByPk($oCapitalTipoRelacional->capital));
                            }
                        }
                    }
                }
            }
            
            return array_unique($aCapitalesRelacionales);
        }
}
