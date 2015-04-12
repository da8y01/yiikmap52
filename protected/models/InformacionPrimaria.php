<?php

/**
 * Esta es la clase modelo para la tabla "{{informacion_primaria}}".
 *
 * Las siguientes son las columnas de la tabla '{{informacion_primaria}}':
 * @property integer $id
 * @property string $que
 * @property string $quien
 * @property string $como
 * @property integer $proceso_id
 * @property string $descripcion
 * @property string $created_at
 * @property string $updated_at
 *
 * Las siguientes son las relaciones del modelo:
 * @property Proceso $proceso
 */
class InformacionPrimaria extends CActiveRecord
{
        /**
         * @var integer informacion primaria ID
         * @soap
         */
        public $id_soap;

        /**
         * @var string informacion primaria que
         * @soap
         */
        public $que_soap;

        /**
         * @var string informacion primaria quien
         * @soap
         */
        public $quien_soap;

        /**
         * @var string informacion primaria como
         * @soap
         */
        public $como_soap;

        /**
         * @var integer informacion primaria proceso_id
         * @soap
         */
        public $proceso_id_soap;

        /**
         * @var string informacion primaria descripcion
         * @soap
         */
        public $descripcion_soap;

        /**
         * @var string informacion primaria created_at
         * @soap
         */
        public $created_at_soap;

        /**
         * @var string informacion primaria updated_at
         * @soap
         */
        public $updated_at_soap;


        public function __toString()
        {
            return $this->id;
        }


	/**
	 * Returns the static model of the specified AR class.
	 * @return InformacionPrimaria the static model class
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
		return '{{informacion_primaria}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('que, quien, como', 'required'),
			array('que, quien, como', 'length', 'max'=>128),
                        array('descripcion', 'length', 'max'=>512),
			array('created_at, updated_at, proceso_id', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, que, quien, como, descripcion, proceso_id, created_at, updated_at', 'safe', 'on'=>'search'),

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
			'que' => 'Qué',
			'quien' => 'Quién',
			'como' => 'Cómo',
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
		$criteria->compare('que',$this->que,true);
		$criteria->compare('quien',$this->quien,true);
		$criteria->compare('como',$this->como,true);
		$criteria->compare('proceso_id',$this->proceso_id);
                $criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('updated_at',$this->updated_at,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}
