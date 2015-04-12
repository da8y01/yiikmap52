<?php

/**
 * Esta es la clase modelo para la tabla "{{politica}}".
 *
 * Las siguientes son las columnas de la tabla '{{politica}}':
 * @property integer $id
 * @property string $nombre
 * @property string $locacion
 * @property string $descripcion
 * @property string $created_at
 * @property string $updated_at
 *
 * Las siguientes son las relaciones del modelo:
 * @property ProcesoHasPolitica[] $procesoHasPoliticas
 */
class Politica extends CActiveRecord
{
        /**
         * @var integer politica ID
         * @soap
         */
        public $id_soap;

        /**
         * @var string politica nombre
         * @soap
         */
        public $nombre_soap;

        /**
         * @var string politica locacion
         * @soap
         */
        public $locacion_soap;

        /**
         * @var string politica descripcion
         * @soap
         */
        public $descripcion_soap;

        /**
         * @var string politica created_at
         * @soap
         */
        public $created_at_soap;

        /**
         * @var string politica updated_at
         * @soap
         */
        public $updated_at_soap;


        public function __toString()
        {
            return $this->id;
        }


	/**
	 * Returns the static model of the specified AR class.
	 * @return Politica the static model class
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
		return '{{politica}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, locacion', 'required'),
			array('nombre', 'length', 'max'=>64),
			array('descripcion', 'length', 'max'=>512),
			array('locacion', 'length', 'max'=>256),
			array('created_at, updated_at', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nombre, descripcion, locacion, created_at, updated_at', 'safe', 'on'=>'search'),

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
			'procesoHasPoliticas' => array(self::HAS_MANY, 'ProcesoHasPolitica', 'politica_id'),
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
                $criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('updated_at',$this->updated_at,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}
