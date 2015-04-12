<?php

/**
 * Esta es la clase modelo para la tabla "{{capital_humano_has_intangible}}".
 *
 * Las siguientes son las columnas de la tabla '{{capital_humano_has_intangible}}':
 * @property integer $id
 * @property string $descripcion
 * @property integer $capital_humano_id
 * @property integer $intangible_id
 * @property string $created_at
 * @property string $updated_at
 *
 * Las siguientes son las relaciones del modelo:
 * @property CapitalHumano $capitalHumano
 * @property Intangible $intangible
 */
class CapitalHumanoHasIntangible extends CActiveRecord
{
        public function __toString()
        {
            return $this->id;
        }


	/**
	 * Returns the static model of the specified AR class.
	 * @return CapitalHumanoHasIntangible the static model class
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
		return '{{capital_humano_has_intangible}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('descripcion', 'length', 'max'=>512),
                        array('intangible_id, capital_humano_id', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, descripcion, capital_humano_id, intangible_id, created_at, updated_at', 'safe', 'on'=>'search'),

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
			'intangible' => array(self::BELONGS_TO, 'Intangible', 'intangible_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'descripcion' => 'Descripción',
			'capital_humano_id' => 'Capital Humano',
			'intangible_id' => 'Intangible',
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
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('capital_humano_id',$this->capital_humano_id);
		$criteria->compare('intangible_id',$this->intangible_id);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('updated_at',$this->updated_at,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}
