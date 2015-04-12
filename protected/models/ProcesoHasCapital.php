<?php

/**
 * Esta es la clase modelo para la tabla "{{proceso_has_capital}}".
 *
 * Las siguientes son las columnas de la tabla '{{proceso_has_capital}}':
 * @property integer $id
 * @property integer $proceso_id
 * @property integer $proceso_organizacion_id
 * @property integer $proceso_capital_humano_id
 * @property integer $proceso_capital_humano_competencia_id
 * @property integer $capital_id
 *
 * Las siguientes son las relaciones del modelo:
 * @property Capital $capital
 * @property Proceso $proceso
 * @property Proceso $procesoOrganizacion
 * @property Proceso $procesoCapitalHumano
 * @property Proceso $procesoCapitalHumanoCompetencia
 */
class ProcesoHasCapital extends CActiveRecord
{
        public function __toString()
        {
            return $this->id;
        }


	/**
	 * Returns the static model of the specified AR class.
	 * @return ProcesoHasCapital the static model class
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
		return '{{proceso_has_capital}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, proceso_id, proceso_organizacion_id, proceso_capital_humano_id, proceso_capital_humano_competencia_id, capital_id', 'safe', 'on'=>'search'),
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
			'capital' => array(self::BELONGS_TO, 'Capital', 'capital_id'),
			'proceso' => array(self::BELONGS_TO, 'Proceso', 'proceso_id'),
			'procesoOrganizacion' => array(self::BELONGS_TO, 'Proceso', 'proceso_organizacion_id'),
			'procesoCapitalHumano' => array(self::BELONGS_TO, 'Proceso', 'proceso_capital_humano_id'),
			'procesoCapitalHumanoCompetencia' => array(self::BELONGS_TO, 'Proceso', 'proceso_capital_humano_competencia_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'proceso_id' => 'Proceso',
			'proceso_organizacion_id' => 'Proceso Organizacion',
			'proceso_capital_humano_id' => 'Proceso Capital Humano',
			'proceso_capital_humano_competencia_id' => 'Proceso Capital Humano Competencia',
			'capital_id' => 'Capital',
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
		$criteria->compare('proceso_id',$this->proceso_id);
		$criteria->compare('proceso_organizacion_id',$this->proceso_organizacion_id);
		$criteria->compare('proceso_capital_humano_id',$this->proceso_capital_humano_id);
		$criteria->compare('proceso_capital_humano_competencia_id',$this->proceso_capital_humano_competencia_id);
		$criteria->compare('capital_id',$this->capital_id);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}
