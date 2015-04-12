<?php

/**
 * Esta es la clase modelo para la tabla "{{test_liderazgo_transformacional}}".
 *
 * Las siguientes son las columnas de la tabla '{{test_liderazgo_transformacional}}':
 * @property integer $id
 * @property integer $capital_humano_id
 * @property integer $p01proporciono
 * @property integer $p02reexamino
 * @property integer $p03interfiero
 * @property integer $p04enfoco
 * @property integer $p05evito
 * @property integer $p06hablo
 * @property integer $p07ausento
 * @property integer $p08perspectivas
 * @property integer $p09optimismo
 * @property integer $p10infundo
 * @property integer $p11refiero
 * @property integer $p12espero
 * @property integer $p13entusiasmo
 * @property integer $p14especifico
 * @property integer $p15dedico
 * @property integer $p16dejo
 * @property integer $p17demuestro
 * @property integer $p18abandono
 * @property integer $p19trato
 * @property integer $p20cronicos
 * @property integer $p21actuo
 * @property integer $p22concentro
 * @property integer $p23considero
 * @property integer $p24llevo
 * @property integer $p25demuestro
 * @property integer $p26vision
 * @property integer $p27dirijo
 * @property integer $p28decisiones
 * @property integer $p29individuo
 * @property integer $p30hago
 * @property integer $p31ayudo
 * @property integer $p32sugiero
 * @property integer $p33tardo
 * @property integer $p34enfatizo
 * @property integer $p35expreso
 * @property integer $p36confianza
 * @property integer $p37eficaz
 * @property integer $p38utilizo
 * @property integer $p39espera
 * @property integer $p40eficiente
 * @property integer $p41trabajo
 * @property integer $p42elevo
 * @property integer $p43organizacionales
 * @property integer $p44motivo
 * @property integer $p45encabezo
 * @property string $created_at
 * @property string $updated_at
 *
 * Las siguientes son las relaciones del modelo:
 * @property CapitalHumano $capitalHumano
 */
class TestLiderazgoTransformacional extends CActiveRecord
{
        /**
         * @var integer test liderazgo transformacional ID
         * @soap
         */
        public $id_soap;

        /**
         * @var integer test liderazgo transformacional capital_humano_id
         * @soap
         */
        public $capital_humano_id_soap;

        /**
         * @var string test liderazgo transformacional created_at
         * @soap
         */
        public $created_at_soap;

        /**
         * @var string test liderazgo transformacional updated_at
         * @soap
         */
        public $updated_at_soap;


        public function __toString()
        {
            return $this->id;
        }


	/**
	 * Returns the static model of the specified AR class.
	 * @return TestLiderazgoTransformacional the static model class
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
		return '{{test_liderazgo_transformacional}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
                        array('capital_humano_id, p01proporciono, p02reexamino, p03interfiero, p04enfoco, p05evito, p06hablo, p07ausento, p08perspectivas, p09optimismo, p10infundo, p11refiero, p12espero, p13entusiasmo, p14especifico, p15dedico, p16dejo, p17demuestro, p18abandono, p19trato, p20cronicos, p21actuo, p22concentro, p23considero, p24llevo, p25demuestro, p26vision, p27dirijo, p28decisiones, p29individuo, p30hago, p31ayudo, p32sugiero, p33tardo, p34enfatizo, p35expreso, p36confianza, p37eficaz, p38utilizo, p39espera, p40eficiente, p41trabajo, p42elevo, p43organizacionales, p44motivo, p45encabezo', 'required'),
			array('capital_humano_id, p01proporciono, p02reexamino, p03interfiero, p04enfoco, p05evito, p06hablo, p07ausento, p08perspectivas, p09optimismo, p10infundo, p11refiero, p12espero, p13entusiasmo, p14especifico, p15dedico, p16dejo, p17demuestro, p18abandono, p19trato, p20cronicos, p21actuo, p22concentro, p23considero, p24llevo, p25demuestro, p26vision, p27dirijo, p28decisiones, p29individuo, p30hago, p31ayudo, p32sugiero, p33tardo, p34enfatizo, p35expreso, p36confianza, p37eficaz, p38utilizo, p39espera, p40eficiente, p41trabajo, p42elevo, p43organizacionales, p44motivo, p45encabezo', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, capital_humano_id, p01proporciono, p02reexamino, p03interfiero, p04enfoco, p05evito, p06hablo, p07ausento, p08perspectivas, p09optimismo, p10infundo, p11refiero, p12espero, p13entusiasmo, p14especifico, p15dedico, p16dejo, p17demuestro, p18abandono, p19trato, p20cronicos, p21actuo, p22concentro, p23considero, p24llevo, p25demuestro, p26vision, p27dirijo, p28decisiones, p29individuo, p30hago, p31ayudo, p32sugiero, p33tardo, p34enfatizo, p35expreso, p36confianza, p37eficaz, p38utilizo, p39espera, p40eficiente, p41trabajo, p42elevo, p43organizacionales, p44motivo, p45encabezo, created_at, updated_at', 'safe', 'on'=>'search'),

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
			'p01proporciono' => 'P01proporciono',
			'p02reexamino' => 'P02reexamino',
			'p03interfiero' => 'P03interfiero',
			'p04enfoco' => 'P04enfoco',
			'p05evito' => 'P05evito',
			'p06hablo' => 'P06hablo',
			'p07ausento' => 'P07ausento',
			'p08perspectivas' => 'P08perspectivas',
			'p09optimismo' => 'P09optimismo',
			'p10infundo' => 'P10infundo',
			'p11refiero' => 'P11refiero',
			'p12espero' => 'P12espero',
			'p13entusiasmo' => 'P13entusiasmo',
			'p14especifico' => 'P14especifico',
			'p15dedico' => 'P15dedico',
			'p16dejo' => 'P16dejo',
			'p17demuestro' => 'P17demuestro',
			'p18abandono' => 'P18abandono',
			'p19trato' => 'P19trato',
			'p20cronicos' => 'P20cronicos',
			'p21actuo' => 'P21actuo',
			'p22concentro' => 'P22concentro',
			'p23considero' => 'P23considero',
			'p24llevo' => 'P24llevo',
			'p25demuestro' => 'P25demuestro',
			'p26vision' => 'P26vision',
			'p27dirijo' => 'P27dirijo',
			'p28decisiones' => 'P28decisiones',
			'p29individuo' => 'P29individuo',
			'p30hago' => 'P30hago',
			'p31ayudo' => 'P31ayudo',
			'p32sugiero' => 'P32sugiero',
			'p33tardo' => 'P33tardo',
			'p34enfatizo' => 'P34enfatizo',
			'p35expreso' => 'P35expreso',
			'p36confianza' => 'P36confianza',
			'p37eficaz' => 'P37eficaz',
			'p38utilizo' => 'P38utilizo',
			'p39espera' => 'P39espera',
			'p40eficiente' => 'P40eficiente',
			'p41trabajo' => 'P41trabajo',
			'p42elevo' => 'P42elevo',
			'p43organizacionales' => 'P43organizacionales',
			'p44motivo' => 'P44motivo',
			'p45encabezo' => 'P45encabezo',
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
		$criteria->compare('p01proporciono',$this->p01proporciono);
		$criteria->compare('p02reexamino',$this->p02reexamino);
		$criteria->compare('p03interfiero',$this->p03interfiero);
		$criteria->compare('p04enfoco',$this->p04enfoco);
		$criteria->compare('p05evito',$this->p05evito);
		$criteria->compare('p06hablo',$this->p06hablo);
		$criteria->compare('p07ausento',$this->p07ausento);
		$criteria->compare('p08perspectivas',$this->p08perspectivas);
		$criteria->compare('p09optimismo',$this->p09optimismo);
		$criteria->compare('p10infundo',$this->p10infundo);
		$criteria->compare('p11refiero',$this->p11refiero);
		$criteria->compare('p12espero',$this->p12espero);
		$criteria->compare('p13entusiasmo',$this->p13entusiasmo);
		$criteria->compare('p14especifico',$this->p14especifico);
		$criteria->compare('p15dedico',$this->p15dedico);
		$criteria->compare('p16dejo',$this->p16dejo);
		$criteria->compare('p17demuestro',$this->p17demuestro);
		$criteria->compare('p18abandono',$this->p18abandono);
		$criteria->compare('p19trato',$this->p19trato);
		$criteria->compare('p20cronicos',$this->p20cronicos);
		$criteria->compare('p21actuo',$this->p21actuo);
		$criteria->compare('p22concentro',$this->p22concentro);
		$criteria->compare('p23considero',$this->p23considero);
		$criteria->compare('p24llevo',$this->p24llevo);
		$criteria->compare('p25demuestro',$this->p25demuestro);
		$criteria->compare('p26vision',$this->p26vision);
		$criteria->compare('p27dirijo',$this->p27dirijo);
		$criteria->compare('p28decisiones',$this->p28decisiones);
		$criteria->compare('p29individuo',$this->p29individuo);
		$criteria->compare('p30hago',$this->p30hago);
		$criteria->compare('p31ayudo',$this->p31ayudo);
		$criteria->compare('p32sugiero',$this->p32sugiero);
		$criteria->compare('p33tardo',$this->p33tardo);
		$criteria->compare('p34enfatizo',$this->p34enfatizo);
		$criteria->compare('p35expreso',$this->p35expreso);
		$criteria->compare('p36confianza',$this->p36confianza);
		$criteria->compare('p37eficaz',$this->p37eficaz);
		$criteria->compare('p38utilizo',$this->p38utilizo);
		$criteria->compare('p39espera',$this->p39espera);
		$criteria->compare('p40eficiente',$this->p40eficiente);
		$criteria->compare('p41trabajo',$this->p41trabajo);
		$criteria->compare('p42elevo',$this->p42elevo);
		$criteria->compare('p43organizacionales',$this->p43organizacionales);
		$criteria->compare('p44motivo',$this->p44motivo);
		$criteria->compare('p45encabezo',$this->p45encabezo);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('updated_at',$this->updated_at,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}
