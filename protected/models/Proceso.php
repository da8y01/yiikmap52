<?php

/**
 * Esta es la clase modelo para la tabla "{{proceso}}".
 *
 * Las siguientes son las columnas de la tabla '{{proceso}}':
 * @property integer $id
 * @property string $version
 * @property string $nombre
 * @property integer $tipo
 * @property string $objetivo
 * @property integer $organizacion_id
 * @property integer $capital_humano_id
 * @property string $created_at
 * @property string $updated_at
 *
 * Las siguientes son las relaciones del modelo:
 * @property Control[] $controles
 * @property Documentacion[] $documentaciones
 * @property Indicador[] $indicadores
 * @property InformacionPrimaria[] $informacionesPrimarias
 * @property InformacionSecundaria[] $informacionesSecundarias
 * @property CapitalHumano $capitalHumano
 * @property Organizacion $organizacion
 * @property ProcesoHasCapitalEstructural[] $procesoHasCapitalesEstructurales
 * @property ProcesoHasCapitalHumano[] $procesoHasCapitalesHumanos
 * @property ProcesoHasCapitalRelacional[] $procesoHasCapitalesRelacionales
 * @property ProcesoHasNormativa[] $procesoHasNormativas
 * @property ProcesoHasPolitica[] $procesoHasPoliticas
 * @property ProcesoHasProceso[] $procesoHasProcesos
 * @property ProcesoHasProceso[] $procesoHasProcesos1
 * @property ProcesoHasSistema[] $procesoHasSistemas
 */
class Proceso extends ModelBase
{
        /**
         * @var integer proceso ID
         * @soap
         */
        public $id_soap;

        /**
         * @var string proceso version
         * @soap
         */
        public $version_soap;

        /**
         * @var string proceso nombre
         * @soap
         */
        public $nombre_soap;

        /**
         * @var integer proceso tipo
         * @soap
         */
        public $tipo_soap;

        /**
         * @var string proceso objetivo
         * @soap
         */
        public $objetivo_soap;

        /**
         * @var integer proceso organizacion_id
         * @soap
         */
        public $organizacion_id_soap;

        /**
         * @var integer proceso capital_humano_id
         * @soap
         */
        public $capital_humano_id_soap;

        /**
         * @var string proceso created_at
         * @soap
         */
        public $created_at_soap;

        /**
         * @var string proceso updated_at
         * @soap
         */
        public $updated_at_soap;


        private $_procOrg;
        private $_procComp;
        private $_procCapEst;
        private $_procCapHum;
        private $_procCapRel;
        private $_procAll;


        public function __toString()
        {
            return (string)$this->id;
        }

        public function getTipoNombre() {
            return Lookup::item('TipoProceso', $this->tipo);
        }


	/**
	 * Returns the static model of the specified AR class.
	 * @return Proceso the static model class
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
		return '{{proceso}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
                        array('version, nombre, tipo, objetivo, organizacion_id, capital_humano_id', 'required'),
			array('tipo, organizacion_id, capital_humano_id', 'numerical', 'integerOnly'=>true),
			array('version', 'length', 'max'=>8),
			array('nombre', 'length', 'max'=>64),
			array('objetivo', 'length', 'max'=>128),
			array('updated_at', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, version, nombre, tipo, objetivo, organizacion_id, capital_humano_id, created_at, updated_at', 'safe', 'on'=>'search'),

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
                        'controles' => array(self::HAS_MANY, 'Control', 'proceso_id'),
			'documentaciones' => array(self::HAS_MANY, 'Documentacion', 'proceso_id'),
			'indicadores' => array(self::HAS_MANY, 'Indicador', 'proceso_id'),
			'informacionesPrimarias' => array(self::HAS_MANY, 'InformacionPrimaria', 'proceso_id'),
			'informacionesSecundarias' => array(self::HAS_MANY, 'InformacionSecundaria', 'proceso_id'),
			'capitalHumano' => array(self::BELONGS_TO, 'CapitalHumano', 'capital_humano_id'),
			'organizacion' => array(self::BELONGS_TO, 'Organizacion', 'organizacion_id'),
			'procesoHasCapitalesEstructurales' => array(self::HAS_MANY, 'ProcesoHasCapitalEstructural', 'proceso_id'),
			'procesoHasCapitalesHumanos' => array(self::HAS_MANY, 'ProcesoHasCapitalHumano', 'proceso_id'),
			'procesoHasCapitalesRelacionales' => array(self::HAS_MANY, 'ProcesoHasCapitalRelacional', 'proceso_id'),
			'procesoHasNormativas' => array(self::HAS_MANY, 'ProcesoHasNormativa', 'proceso_id'),
			'procesoHasPoliticas' => array(self::HAS_MANY, 'ProcesoHasPolitica', 'proceso_id'),
			'procesoHasProcesos' => array(self::HAS_MANY, 'ProcesoHasProceso', 'proceso_id'),
			'procesoHasProcesos1' => array(self::HAS_MANY, 'ProcesoHasProceso', 'proceso_hijo_id'),
			'procesoHasSistemas' => array(self::HAS_MANY, 'ProcesoHasSistema', 'proceso_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'version' => 'Versión',
			'nombre' => 'Nombre',
			'tipo' => 'Tipo',
			'objetivo' => 'Objetivo',
			'organizacion_id' => 'Organización',
			'capital_humano_id' => 'Capital Humano',
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
		$criteria->compare('version',$this->version,true);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('tipo',$this->tipo);
		$criteria->compare('objetivo',$this->objetivo,true);
		$criteria->compare('organizacion_id',$this->organizacion_id);
		$criteria->compare('capital_humano_id',$this->capital_humano_id);
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
                uc_procs:Proceso-'.$this->id.' 
                    a uc_classdefs:ClassProceso ; 
                    uc_classdefs:id '.$this->id.' ; 
		    uc_classdefs:version "'.$this->version.'" ; 
                    uc_classdefs:nombre "'.$this->nombre.'" ; 
                    uc_classdefs:tipo '.$this->tipo.' ; 
                    uc_classdefs:objetivo "'.$this->objetivo.'" ; 
                    uc_classdefs:organizacion_id uc_orgs:Organizacion-'.$this->organizacion->id.' ; 
                    uc_classdefs:capital_humano uc_capshums:CapitalHumano-'.$this->capitalHumano->id.' ; 
                    uc_classdefs:created_at "'.$this->created_at.'" ; 
                    uc_classdefs:updated_at "'.$this->updated_at.'" .
            ';
            
            $this->StoreNewModelTriples($sQuery);

            return parent::afterSave();
        }
        
        
        public function afterDelete() {
            /*$this->isNewRecord=false;
            $this->refresh();*/
            
            $sQuery = 'uc_procs:Proceso-'.$this->id.' ?p ?o .';
            
            $this->DeleteModelTriples($sQuery);

            return parent::afterDelete();
        }




        public function getProcesoOrganizaciones() {
            $aOrganizaciones = array();

            $aOrganizaciones = Organizacion::model()->findAll('sector_id=:sector_id', array(':sector_id'=>$this->organizacion->sector->id));

            return array_unique($aOrganizaciones);
        }


        public function getProcesoCompetencias() {
            $aCompetencias = array();

            foreach ($this->capitalHumano->competenciaHasCapitalesHumanos as $competenciahascapitalhumano) {
                array_push($aCompetencias, $competenciahascapitalhumano->competencia);
            }
            
            return array_unique($aCompetencias);
        }


        public function getProcesoCapitalesEstructurales() {
            $aCapitalesEstructurales = array();
            
            foreach ($this->procesoHasCapitalesEstructurales as $procesohascapitalestructural) {
                array_push($aCapitalesEstructurales, $procesohascapitalestructural->capitalEstructural);
            }
            
            return array_unique($aCapitalesEstructurales);
        }


        public function getProcesoCapitalesHumanos() {
            $aCapitalesHumanos = array();
            
            foreach ($this->procesoHasCapitalesHumanos as $procesohascapitalhumano) {
                array_push($aCapitalesHumanos, $procesohascapitalhumano->capitalHumano);
            }
            
            return array_unique($aCapitalesHumanos);
        }


        public function getProcesoCapitalesRelacionales() {
            $aCapitalesRelacionales = array();
            
            foreach ($this->procesoHasCapitalesRelacionales as $procesohascapitalrelacional) {
                array_push($aCapitalesRelacionales, $procesohascapitalrelacional->capitalRelacional);
            }
            
            return array_unique($aCapitalesRelacionales);
        }
}
