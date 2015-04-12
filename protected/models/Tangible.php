<?php

/**
 * Esta es la clase modelo para la tabla "{{tangible}}".
 *
 * Las siguientes son las columnas de la tabla '{{tangible}}':
 * @property integer $id
 * @property string $nombre
 * @property integer $tipo
 * @property string $locacion
 * @property string $descripcion
 * @property string $created_at
 * @property string $updated_at
 *
 * Las siguientes son las relaciones del modelo:
 * @property CapitalHumanoHasTangible[] $capitalHumanoHasTangibles
 */
class Tangible extends ModelBase
{
        /**
         * @var integer tangible ID
         * @soap
         */
        public $id_soap;

        /**
         * @var string tangible nombre
         * @soap
         */
        public $nombre_soap;

        /**
         * @var integer tangible tipo
         * @soap
         */
        public $tipo_soap;

        /**
         * @var string tangible locacion
         * @soap
         */
        public $locacion_soap;

        /**
         * @var string tangible descripcion
         * @soap
         */
        public $descripcion_soap;

        /**
         * @var string tangible created_at
         * @soap
         */
        public $created_at_soap;

        /**
         * @var string tangible updated_at
         * @soap
         */
        public $updated_at_soap;


        public function __toString()
        {
            return $this->id;
        }

        public function getTipoNombre() {
            return Lookup::item('TipoTangible', $this->tipo);
        }


	/**
	 * Returns the static model of the specified AR class.
	 * @return Tangible the static model class
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
		return '{{tangible}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, tipo, locacion', 'required'),
			array('tipo', 'numerical', 'integerOnly'=>true),
			array('nombre', 'length', 'max'=>32),
			array('locacion', 'length', 'max'=>128),
			array('descripcion', 'length', 'max'=>512),
			array('created_at, updated_at', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nombre, tipo, locacion, descripcion, created_at, updated_at', 'safe', 'on'=>'search'),

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
			'capitalHumanoHasTangibles' => array(self::HAS_MANY, 'CapitalHumanoHasTangible', 'tangible_id'),
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
			'locacion' => 'Locación',
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
		$criteria->compare('locacion',$this->locacion,true);
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
                uc_tans:Tangible-'.$this->id.' 
                    a uc_classdefs:ClassTangible ; 
                    uc_classdefs:id '.$this->id.' ; 
                    uc_classdefs:nombre "'.$this->nombre.'" ; 
                    uc_classdefs:tipo '.$this->tipo.' ; 
                    uc_classdefs:locacion "'.$this->locacion.'" ; 
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
            
            $sQuery = 'uc_tans:Tangible-'.$this->id.' ?p ?o .';
            
            $this->DeleteModelTriples($sQuery);

            return parent::afterDelete();
        }
}
