<?php

/**
 * Esta es la clase modelo para la tabla "{{test_emprendimiento}}".
 *
 * Las siguientes son las columnas de la tabla '{{test_emprendimiento}}':
 * @property integer $id
 * @property integer $capital_humano_id
 * @property integer $p201estimula
 * @property integer $p202predisposicion
 * @property integer $p203iniciativa
 * @property integer $p204dedica
 * @property integer $p205relaciona
 * @property integer $p206autonomia
 * @property integer $p207responsabilidad
 * @property integer $p208independiente
 * @property integer $p209prever
 * @property integer $p210objetivos
 * @property integer $p211experiencia
 * @property integer $p212equipo
 * @property integer $p31explica
 * @property integer $p32iniciar
 * @property integer $p33oportuno
 * @property integer $p34convencido
 * @property integer $p35arranque
 * @property integer $p36presupuesto
 * @property integer $p37contacto
 * @property integer $p38invertiria
 * @property integer $p39conoce
 * @property integer $p41empresas
 * @property integer $p42actuan
 * @property integer $p43datos
 * @property integer $p44convencido
 * @property integer $p45vista
 * @property integer $p46mercado
 * @property integer $p47mecanismos
 * @property integer $p48situacion
 * @property string $created_at
 * @property string $updated_at
 *
 * Las siguientes son las relaciones del modelo:
 * @property CapitalHumano $capitalHumano
 */
class TestEmprendimiento extends CActiveRecord
{
        /**
         * @var integer test emprendimiento ID
         * @soap
         */
        public $id_soap;

        /**
         * @var integer test emprendimiento capital_humano_id
         * @soap
         */
        public $capital_humano_id_soap;

        /**
         * @var string test emprendimiento created_at
         * @soap
         */
        public $created_at_soap;

        /**
         * @var string test emprendimiento updated_at
         * @soap
         */
        public $updated_at_soap;


        public function __toString()
        {
            return $this->id;
        }


	/**
	 * Returns the static model of the specified AR class.
	 * @return TestEmprendimiento the static model class
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
		return '{{test_emprendimiento}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
                        array('capital_humano_id, p201estimula, p202predisposicion, p203iniciativa, p204dedica, p205relaciona, p206autonomia, p207responsabilidad, p208independiente, p209prever, p210objetivos, p211experiencia, p212equipo, p31explica, p32iniciar, p33oportuno, p34convencido, p35arranque, p36presupuesto, p37contacto, p38invertiria, p39conoce, p41empresas, p42actuan, p43datos, p44convencido, p45vista, p46mercado, p47mecanismos, p48situacion', 'required'),
			array('capital_humano_id, p201estimula, p202predisposicion, p203iniciativa, p204dedica, p205relaciona, p206autonomia, p207responsabilidad, p208independiente, p209prever, p210objetivos, p211experiencia, p212equipo, p31explica, p32iniciar, p33oportuno, p34convencido, p35arranque, p36presupuesto, p37contacto, p38invertiria, p39conoce, p41empresas, p42actuan, p43datos, p44convencido, p45vista, p46mercado, p47mecanismos, p48situacion', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, capital_humano_id, p201estimula, p202predisposicion, p203iniciativa, p204dedica, p205relaciona, p206autonomia, p207responsabilidad, p208independiente, p209prever, p210objetivos, p211experiencia, p212equipo, p31explica, p32iniciar, p33oportuno, p34convencido, p35arranque, p36presupuesto, p37contacto, p38invertiria, p39conoce, p41empresas, p42actuan, p43datos, p44convencido, p45vista, p46mercado, p47mecanismos, p48situacion, created_at, updated_at', 'safe', 'on'=>'search'),

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
			'p201estimula' => 'P201estimula',
			'p202predisposicion' => 'P202predisposicion',
			'p203iniciativa' => 'P203iniciativa',
			'p204dedica' => 'P204dedica',
			'p205relaciona' => 'P205relaciona',
			'p206autonomia' => 'P206autonomia',
			'p207responsabilidad' => 'P207responsabilidad',
			'p208independiente' => 'P208independiente',
			'p209prever' => 'P209prever',
			'p210objetivos' => 'P210objetivos',
			'p211experiencia' => 'P211experiencia',
			'p212equipo' => 'P212equipo',
			'p31explica' => 'P31explica',
			'p32iniciar' => 'P32iniciar',
			'p33oportuno' => 'P33oportuno',
			'p34convencido' => 'P34convencido',
			'p35arranque' => 'P35arranque',
			'p36presupuesto' => 'P36presupuesto',
			'p37contacto' => 'P37contacto',
			'p38invertiria' => 'P38invertiria',
			'p39conoce' => 'P39conoce',
			'p41empresas' => 'P41empresas',
			'p42actuan' => 'P42actuan',
			'p43datos' => 'P43datos',
			'p44convencido' => 'P44convencido',
			'p45vista' => 'P45vista',
			'p46mercado' => 'P46mercado',
			'p47mecanismos' => 'P47mecanismos',
			'p48situacion' => 'P48situacion',
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
		$criteria->compare('p201estimula',$this->p201estimula);
		$criteria->compare('p202predisposicion',$this->p202predisposicion);
		$criteria->compare('p203iniciativa',$this->p203iniciativa);
		$criteria->compare('p204dedica',$this->p204dedica);
		$criteria->compare('p205relaciona',$this->p205relaciona);
		$criteria->compare('p206autonomia',$this->p206autonomia);
		$criteria->compare('p207responsabilidad',$this->p207responsabilidad);
		$criteria->compare('p208independiente',$this->p208independiente);
		$criteria->compare('p209prever',$this->p209prever);
		$criteria->compare('p210objetivos',$this->p210objetivos);
		$criteria->compare('p211experiencia',$this->p211experiencia);
		$criteria->compare('p212equipo',$this->p212equipo);
		$criteria->compare('p31explica',$this->p31explica);
		$criteria->compare('p32iniciar',$this->p32iniciar);
		$criteria->compare('p33oportuno',$this->p33oportuno);
		$criteria->compare('p34convencido',$this->p34convencido);
		$criteria->compare('p35arranque',$this->p35arranque);
		$criteria->compare('p36presupuesto',$this->p36presupuesto);
		$criteria->compare('p37contacto',$this->p37contacto);
		$criteria->compare('p38invertiria',$this->p38invertiria);
		$criteria->compare('p39conoce',$this->p39conoce);
		$criteria->compare('p41empresas',$this->p41empresas);
		$criteria->compare('p42actuan',$this->p42actuan);
		$criteria->compare('p43datos',$this->p43datos);
		$criteria->compare('p44convencido',$this->p44convencido);
		$criteria->compare('p45vista',$this->p45vista);
		$criteria->compare('p46mercado',$this->p46mercado);
		$criteria->compare('p47mecanismos',$this->p47mecanismos);
		$criteria->compare('p48situacion',$this->p48situacion);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('updated_at',$this->updated_at,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}
