<?php

/**
 * Esta es la clase modelo para la tabla "{{organizacion}}".
 *
 * Las siguientes son las columnas de la tabla '{{organizacion}}':
 * @property integer $id
 * @property string $nombre
 * @property string $contacto
 * @property string $url
 * @property integer $sector_id
 * @property string $descripcion
 * @property string $created_at
 * @property string $updated_at
 *
 * Las siguientes son las relaciones del modelo:
 * @property Sector $sector
 * @property OrganizacionHasCapital[] $organizacionHasCapitales
 * @property OrganizacionHasCompetencia[] $organizacionHasCompetencias
 * @property Proceso[] $procesos
 */
class Organizacion extends ModelBase
{
        /**
         * @var integer organizacion ID
         * @soap
         */
        public $id_soap;

        /**
         * @var string organizacion nombre
         * @soap
         */
        public $nombre_soap;

        /**
         * @var string organizacion contacto
         * @soap
         */
        public $contacto_soap;

        /**
         * @var string organizacion url
         * @soap
         */
        public $url_soap;

        /**
         * @var integer organizacion sector_id
         * @soap
         */
        public $sector_id_soap;

        /**
         * @var string organizacion descripcion
         * @soap
         */
        public $descripcion_soap;

        /**
         * @var string organizacion created_at
         * @soap
         */
        public $created_at_soap;

        /**
         * @var string organizacion updated_at
         * @soap
         */
        public $updated_at_soap;


        private $_orgProc;
        private $_orgComp;
        private $_orgCapEst;
        private $_orgCapHum;
        private $_orgCapRel;
        private $_orgAll;


        public function __toString()
        {
            return $this->id;
        }


	/**
	 * Returns the static model of the specified AR class.
	 * @return Organizacion the static model class
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
		return '{{organizacion}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, contacto', 'required'),
			array('nombre', 'length', 'max'=>64),
			array('contacto, url', 'length', 'max'=>256),
                        array('descripcion', 'length', 'max'=>512),
			array('created_at, updated_at, sector_id', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nombre, contacto, descripcion, url, created_at, updated_at, sector_id', 'safe', 'on'=>'search'),

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
			'sector' => array(self::BELONGS_TO, 'Sector', 'sector_id'),
			'organizacionHasCapitales' => array(self::HAS_MANY, 'OrganizacionHasCapital', 'organizacion_id'),
			'organizacionHasCompetencias' => array(self::HAS_MANY, 'OrganizacionHasCompetencia', 'organizacion_id'),
			'procesos' => array(self::HAS_MANY, 'Proceso', 'organizacion_id'),
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
			'contacto' => 'Contacto',
			'url' => 'URL',
                        'sector_id' => 'Sector',
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
		$criteria->compare('contacto',$this->contacto,true);
		$criteria->compare('url',$this->url,true);
                $criteria->compare('sector_id',$this->sector_id);
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
                uc_orgs:Organizacion-'.$this->id.' 
                    a uc_classdefs:ClassOrganizacion ; 
                    uc_classdefs:id '.$this->id.' ; 
		    uc_classdefs:nombre "'.$this->nombre.'" ; 
                    uc_classdefs:contacto "'.$this->contacto.'" ; 
                    uc_classdefs:url "'.$this->url.'" ; 
                    uc_classdefs:sector uc_secs:Sector-'.$this->sector->id.' ; 
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
            
            $sQuery = 'uc_orgs:Organizacion-'.$this->id.' ?p ?o .';
            
            $this->DeleteModelTriples($sQuery);

            return parent::afterDelete();
        }




        public function getOrganizacionProcesos() {
            $aProcesos = array();

            $aProcesos = $this->procesos;

            return array_unique($aProcesos);
        }


        public function getOrganizacionCompetencias() {
            $aCompetencias = array();
            
            foreach ($this->organizacionHasCompetencias as $organizacionhascompetencia) {
                array_push($aCompetencias, $organizacionhascompetencia->competencia);
            }

            return array_unique($aCompetencias);
        }


        public function getOrganizacionCapitalesEstructurales() {
            $aCapitalesEstructurales = array();

            foreach ($this->organizacionHasCapitales as $organizacionhascapital) {
                if ($organizacionhascapital->capital->tipo == 1) {
                    array_push($aCapitalesEstructurales, CapitalEstructural::model()->findByPk($organizacionhascapital->capital->capital));
                }
            }

            return array_unique($aCapitalesEstructurales);
        }


        public function getOrganizacionCapitalesHumanos() {
            $aCapitalesHumanos = array();

            foreach ($this->organizacionHasCapitales as $organizacionhascapital) {
                if ($organizacionhascapital->capital->tipo == 2) {
                    array_push($aCapitalesHumanos, CapitalHumano::model()->findByPk($organizacionhascapital->capital->capital));
                }
            }

            return array_unique($aCapitalesHumanos);
        }


        public function getOrganizacionCapitalesRelacionales() {
            $aCapitalesRelacionales = array();

            foreach ($this->organizacionHasCapitales as $organizacionhascapital) {
                if ($organizacionhascapital->capital->tipo == 3) {
                    array_push($aCapitalesRelacionales, CapitalRelacional::model()->findByPk($organizacionhascapital->capital->capital));
                }
            }

            return array_unique($aCapitalesRelacionales);
        }
}
