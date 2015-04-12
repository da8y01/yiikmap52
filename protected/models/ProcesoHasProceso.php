<?php

/**
 * Esta es la clase modelo para la tabla "{{proceso_has_proceso}}".
 *
 * Las siguientes son las columnas de la tabla '{{proceso_has_proceso}}':
 * @property integer $id
 * @property string $descripcion
 * @property integer $tipo
 * @property integer $proceso_id
 * @property integer $proceso_hijo_id
 * @property string $created_at
 * @property string $updated_at
 *
 * Las siguientes son las relaciones del modelo:
 * @property Proceso $proceso
 * @property Proceso $procesoHijo
 */
class ProcesoHasProceso extends CActiveRecord
{
        public function __toString()
        {
            return $this->id;
        }


	/**
	 * Returns the static model of the specified AR class.
	 * @return ProcesoHasProceso the static model class
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
		return '{{proceso_has_proceso}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tipo', 'numerical', 'integerOnly'=>true),
			array('descripcion', 'length', 'max'=>512),
			//array('created_at, updated_at', 'safe'),
                        array('proceso_id, proceso_hijo_id', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, descripcion, tipo, proceso_id, proceso_hijo_id, created_at, updated_at', 'safe', 'on'=>'search'),

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
			'procesoHijo' => array(self::BELONGS_TO, 'Proceso', 'proceso_hijo_id'),
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
			'tipo' => 'Tipo',
			'proceso_id' => 'Proceso',
			'proceso_hijo_id' => 'Proceso Hijo',
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
		$criteria->compare('tipo',$this->tipo);
		$criteria->compare('proceso_id',$this->proceso_id);
		$criteria->compare('proceso_hijo_id',$this->proceso_hijo_id);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('updated_at',$this->updated_at,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}
