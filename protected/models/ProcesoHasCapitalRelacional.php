<?php

/**
 * Esta es la clase modelo para la tabla "{{proceso_has_capital_relacional}}".
 *
 * Las siguientes son las columnas de la tabla '{{proceso_has_capital_relacional}}':
 * @property integer $id
 * @property string $descripcion
 * @property integer $proceso_id
 * @property integer $capital_relacional_id
 * @property string $created_at
 * @property string $updated_at
 *
 * Las siguientes son las relaciones del modelo:
 * @property CapitalRelacional $capitalRelacional
 * @property Proceso $proceso
 */
class ProcesoHasCapitalRelacional extends CActiveRecord
{
        public function __toString()
        {
            return (string)$this->id;
        }


	/**
	 * Returns the static model of the specified AR class.
	 * @return ProcesoHasCapitalRelacional the static model class
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
		return '{{proceso_has_capital_relacional}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('proceso_id, capital_relacional_id', 'required'),
			array('proceso_id, capital_relacional_id', 'numerical', 'integerOnly'=>true),
			array('descripcion', 'length', 'max'=>512),
			array('updated_at', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, descripcion, proceso_id, capital_relacional_id, created_at, updated_at', 'safe', 'on'=>'search'),

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
			'capitalRelacional' => array(self::BELONGS_TO, 'CapitalRelacional', 'capital_relacional_id'),
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
			'descripcion' => 'Descripción',
			'proceso_id' => 'Proceso',
			'capital_relacional_id' => 'Capital Relacional',
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
		$criteria->compare('proceso_id',$this->proceso_id);
		$criteria->compare('capital_relacional_id',$this->capital_relacional_id);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('updated_at',$this->updated_at,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}
