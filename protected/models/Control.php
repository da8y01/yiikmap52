<?php

/**
 * Esta es la clase modelo para la tabla "{{control}}".
 *
 * Las siguientes son las columnas de la tabla '{{control}}':
 * @property integer $id
 * @property string $nombre
 * @property integer $tipo
 * @property string $locacion
 * @property integer $proceso_id
 * @property string $descripcion
 * @property string $created_at
 * @property string $updated_at
 *
 * Las siguientes son las relaciones del modelo:
 * @property Proceso $proceso
 */
class Control extends CActiveRecord
{
        /**
         * @var integer control ID
         * @soap
         */
        public $id_soap;

        /**
         * @var string control nombre
         * @soap
         */
        public $nombre_soap;

        /**
         * @var integer control tipo
         * @soap
         */
        public $tipo_soap;

        /**
         * @var string control locacion
         * @soap
         */
        public $locacion_soap;

        /**
         * @var integer control proceso_id
         * @soap
         */
        public $proceso_id_soap;

        /**
         * @var string control descripcion
         * @soap
         */
        public $descripcion_soap;

        /**
         * @var string control created_at
         * @soap
         */
        public $created_at_soap;

        /**
         * @var string control updated_at
         * @soap
         */
        public $updated_at_soap;


        public function __toString()
        {
            return $this->id;
        }


	/**
	 * Returns the static model of the specified AR class.
	 * @return Control the static model class
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
		return '{{control}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, tipo, locacion, descripcion', 'required'),
			array('tipo', 'numerical', 'integerOnly'=>true),
			array('nombre', 'length', 'max'=>32),
			array('locacion', 'length', 'max'=>256),
			array('descripcion', 'length', 'max'=>512),
			array('created_at, updated_at, proceso_id', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nombre, tipo, locacion, descripcion, proceso_id, created_at, updated_at', 'safe', 'on'=>'search'),

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
			'proceso' => array(self::BELONGS_TO, 'Proceso', 'proceso_id'),
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
			'proceso_id' => 'Proceso',
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
                $criteria->compare('proceso_id',$this->proceso_id);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('updated_at',$this->updated_at,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}
