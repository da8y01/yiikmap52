<?php

/**
 * Esta es la clase modelo para la tabla "{{organizacion_has_competencia}}".
 *
 * Las siguientes son las columnas de la tabla '{{organizacion_has_competencia}}':
 * @property integer $id
 * @property string $descripcion
 * @property integer $organizacion_id
 * @property integer $competencia_id
 * @property string $created_at
 * @property string $updated_at
 *
 * Las siguientes son las relaciones del modelo:
 * @property Organizacion $organizacion
 * @property Competencia $competencia
 */
class OrganizacionHasCompetencia extends CActiveRecord
{
        public function __toString()
        {
            return $this->id;
        }

        
	/**
	 * Returns the static model of the specified AR class.
	 * @return OrganizacionHasCompetencia the static model class
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
		return '{{organizacion_has_competencia}}';
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
			array('created_at, updated_at', 'safe'),
                        //array('organizacion_id, competencia_id', 'safe'),
                        array('organizacion_id, competencia_id', 'required'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, descripcion, organizacion_id, competencia_id, created_at, updated_at', 'safe', 'on'=>'search'),

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
			'organizacion' => array(self::BELONGS_TO, 'Organizacion', 'organizacion_id'),
			'competencia' => array(self::BELONGS_TO, 'Competencia', 'competencia_id'),
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
			'organizacion_id' => 'Organización',
			'competencia_id' => 'Competencia',
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
		$criteria->compare('organizacion_id',$this->organizacion_id);
		$criteria->compare('competencia_id',$this->competencia_id);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('updated_at',$this->updated_at,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}
