<?php

/**
 * Esta es la clase modelo para la tabla "{{proceso_has_capital_estructural}}".
 *
 * Las siguientes son las columnas de la tabla '{{proceso_has_capital_estructural}}':
 * @property integer $id
 * @property string $descripcion
 * @property integer $proceso_id
 * @property integer $capital_estructural_id
 * @property string $created_at
 * @property string $updated_at
 *
 * Las siguientes son las relaciones del modelo:
 * @property CapitalEstructural $capitalEstructural
 * @property Proceso $proceso
 */
class ProcesoHasCapitalEstructural extends CActiveRecord
{
        public function __toString()
        {
            return (string)$this->id;
        }


	/**
	 * Returns the static model of the specified AR class.
	 * @return ProcesoHasCapitalEstructural the static model class
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
		return '{{proceso_has_capital_estructural}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('proceso_id, capital_estructural_id', 'required'),
			array('proceso_id, capital_estructural_id', 'numerical', 'integerOnly'=>true),
			array('descripcion', 'length', 'max'=>512),
			//array('proceso_id, capital_estructural_id,created_at,updated_at', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, descripcion, proceso_id, capital_estructural_id, created_at, updated_at', 'safe', 'on'=>'search'),

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
			'capitalEstructural' => array(self::BELONGS_TO, 'CapitalEstructural', 'capital_estructural_id'),
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
			'capital_estructural_id' => 'Capital Estructural',
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
		$criteria->compare('capital_estructural_id',$this->capital_estructural_id);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('updated_at',$this->updated_at,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}
