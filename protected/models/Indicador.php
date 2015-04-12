<?php

/**
 * Esta es la clase modelo para la tabla "{{indicador}}".
 *
 * Las siguientes son las columnas de la tabla '{{indicador}}':
 * @property integer $id
 * @property string $nombre
 * @property string $locacion
 * @property integer $proceso_id
 * @property string $descripcion
 * @property string $created_at
 * @property string $updated_at
 *
 * Las siguientes son las relaciones del modelo:
 * @property Proceso $proceso
 */
class Indicador extends CActiveRecord
{
        /**
         * @var integer indicador ID
         * @soap
         */
        public $id_soap;

        /**
         * @var string indicador nombre
         * @soap
         */
        public $nombre_soap;

        /**
         * @var string indicador locacion
         * @soap
         */
        public $locacion_soap;

        /**
         * @var integer indicador proceso_id
         * @soap
         */
        public $proceso_id_soap;

        /**
         * @var string indicador descripcion
         * @soap
         */
        public $descripcion_soap;

        /**
         * @var string indicador created_at
         * @soap
         */
        public $created_at_soap;

        /**
         * @var string indicador updated_at
         * @soap
         */
        public $updated_at_soap;


        public function __toString()
        {
            return $this->id;
        }


	/**
	 * Returns the static model of the specified AR class.
	 * @return Indicador the static model class
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
		return '{{indicador}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, descripcion, locacion', 'required'),
			array('nombre', 'length', 'max'=>32),
			array('descripcion', 'length', 'max'=>512),
			array('locacion', 'length', 'max'=>256),
			array('created_at, updated_at, proceso_id', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nombre, descripcion, locacion, proceso_id, created_at, updated_at', 'safe', 'on'=>'search'),

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
