<?php

/**
 * Esta es la clase modelo para la tabla "{{test_creatividad}}".
 *
 * Las siguientes son las columnas de la tabla '{{test_creatividad}}':
 * @property integer $id
 * @property integer $capital_humano_id
 * @property integer $p01productividad
 * @property integer $p02agilidad
 * @property integer $p03originalidad
 * @property integer $p04diversion
 * @property integer $p05automotivacion
 * @property integer $p06persistencia
 * @property integer $p07lenguajes
 * @property integer $p08variedad
 * @property integer $p09fluencia
 * @property integer $p10visualizacion
 * @property integer $p11analogia
 * @property integer $p12problemas
 * @property integer $p13experimentos
 * @property integer $p14innovacion
 * @property integer $p15inventiva
 * @property string $created_at
 * @property string $updated_at
 *
 * Las siguientes son las relaciones del modelo:
 * @property CapitalHumano $capitalHumano
 */
class TestCreatividad extends CActiveRecord
{
        /**
         * @var integer test creatividad ID
         * @soap
         */
        public $id_soap;

        /**
         * @var integer test creatividad capital_humano_id
         * @soap
         */
        public $capital_humano_id_soap;

        /**
         * @var string test creatividad created_at
         * @soap
         */
        public $created_at_soap;

        /**
         * @var string test creatividad updated_at
         * @soap
         */
        public $updated_at_soap;


        public function __toString()
        {
            return $this->id;
        }


	/**
	 * Returns the static model of the specified AR class.
	 * @return TestCreatividad the static model class
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
		return '{{test_creatividad}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
                        array('capital_humano_id, p01productividad, p02agilidad, p03originalidad, p04diversion, p05automotivacion, p06persistencia, p07lenguajes, p08variedad, p09fluencia, p10visualizacion, p11analogia, p12problemas, p13experimentos, p14innovacion, p15inventiva', 'required'),
			array('capital_humano_id, p01productividad, p02agilidad, p03originalidad, p04diversion, p05automotivacion, p06persistencia, p07lenguajes, p08variedad, p09fluencia, p10visualizacion, p11analogia, p12problemas, p13experimentos, p14innovacion, p15inventiva', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, capital_humano_id, p01productividad, p02agilidad, p03originalidad, p04diversion, p05automotivacion, p06persistencia, p07lenguajes, p08variedad, p09fluencia, p10visualizacion, p11analogia, p12problemas, p13experimentos, p14innovacion, p15inventiva, created_at, updated_at', 'safe', 'on'=>'search'),

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
			'capitalHumano' => array(self::BELONGS_TO, 'CapitalHumano', 'capital_humano_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'capital_humano_id' => 'Capital Humano',
			'p01productividad' => 'P01productividad',
			'p02agilidad' => 'P02agilidad',
			'p03originalidad' => 'P03originalidad',
			'p04diversion' => 'P04diversion',
			'p05automotivacion' => 'P05automotivacion',
			'p06persistencia' => 'P06persistencia',
			'p07lenguajes' => 'P07lenguajes',
			'p08variedad' => 'P08variedad',
			'p09fluencia' => 'P09fluencia',
			'p10visualizacion' => 'P10visualizacion',
			'p11analogia' => 'P11analogia',
			'p12problemas' => 'P12problemas',
			'p13experimentos' => 'P13experimentos',
			'p14innovacion' => 'P14innovacion',
			'p15inventiva' => 'P15inventiva',
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
		$criteria->compare('capital_humano_id',$this->capital_humano_id);
		$criteria->compare('p01productividad',$this->p01productividad);
		$criteria->compare('p02agilidad',$this->p02agilidad);
		$criteria->compare('p03originalidad',$this->p03originalidad);
		$criteria->compare('p04diversion',$this->p04diversion);
		$criteria->compare('p05automotivacion',$this->p05automotivacion);
		$criteria->compare('p06persistencia',$this->p06persistencia);
		$criteria->compare('p07lenguajes',$this->p07lenguajes);
		$criteria->compare('p08variedad',$this->p08variedad);
		$criteria->compare('p09fluencia',$this->p09fluencia);
		$criteria->compare('p10visualizacion',$this->p10visualizacion);
		$criteria->compare('p11analogia',$this->p11analogia);
		$criteria->compare('p12problemas',$this->p12problemas);
		$criteria->compare('p13experimentos',$this->p13experimentos);
		$criteria->compare('p14innovacion',$this->p14innovacion);
		$criteria->compare('p15inventiva',$this->p15inventiva);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('updated_at',$this->updated_at,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}
