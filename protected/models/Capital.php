<?php

/**
 * Esta es la clase modelo para la tabla "{{capital}}".
 *
 * Las siguientes son las columnas de la tabla '{{capital}}':
 * @property integer $id
 * @property string $descripcion
 * @property integer $tipo
 * @property integer $capital
 * @property string $created_at
 * @property string $updated_at
 *
 * Las siguientes son las relaciones del modelo:
 * @property OrganizacionHasCapital[] $organizacionHasCapitales
 */
class Capital extends ModelBase
{
        /**
         * @var integer capital ID
         * @soap
         */
        public $id_soap;

        /**
         * @var string capital descripcion
         * @soap
         */
        public $descripcion_soap;

        /**
         * @var integer capital tipo
         * @soap
         */
        public $tipo_soap;

        /**
         * @var integer capital capital
         * @soap
         */
        public $capital_soap;

        /**
         * @var string capital created_at
         * @soap
         */
        public $created_at_soap;

        /**
         * @var string capital updated_at
         * @soap
         */
        public $updated_at_soap;


        public function __toString()
        {
            return $this->id;
        }

        public function getTipoNombre() {
            return Lookup::item('TipoCapital', $this->tipo);
        }

        public function getCapitalNombre() {
            $sCapitalNombre = '';

            switch ($this->tipo) {
                case 1:
                    $sCapitalNombre = CapitalEstructural::model()->findByPk($this->capital)->nombre;
                    break;

                case 2:
                    $sCapitalNombre = CapitalHumano::model()->findByPk($this->capital)->nombre;
                    break;

                case 3:
                    $sCapitalNombre = CapitalRelacional::model()->findByPk($this->capital)->orgnombre;
                    break;

                default:
                    $sCapitalNombre = '';
                    break;
            }

            return $sCapitalNombre;
        }


	/**
	 * Returns the static model of the specified AR class.
	 * @return Capital the static model class
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
		return '{{capital}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tipo, capital', 'required'),
			array('tipo, capital', 'numerical', 'integerOnly'=>true),
			array('descripcion', 'length', 'max'=>512),
			array('updated_at', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, tipo, descripcion, capital, created_at, updated_at', 'safe', 'on'=>'search'),

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
			'organizacionHasCapitales' => array(self::HAS_MANY, 'OrganizacionHasCapital', 'capital_id'),
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
			'capital' => 'Capital',
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
		$criteria->compare('capital',$this->capital);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('updated_at',$this->updated_at,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
        
        
        
        
        public function afterSave() {
            $this->isNewRecord=false;
            $this->refresh();
            
            $sQuery = '
                uc_caps:Capital-'.$this->id.' 
                    a uc_classdefs:ClassCapital ; 
                    uc_classdefs:id '.$this->id.' ; 
                    uc_classdefs:descripcion "'.$this->descripcion.'" ; 
                    uc_classdefs:tipo '.$this->tipo.' ; 
                    uc_classdefs:capital "'.$this->capital.'" ; 
                    uc_classdefs:created_at "'.$this->created_at.'" ; 
                    uc_classdefs:updated_at "'.$this->updated_at.'" .
            ';
            
            $this->StoreNewModelTriples($sQuery);

            return parent::afterSave();
        }
        
        
        public function afterDelete() {
            /*$this->isNewRecord=false;
            $this->refresh();*/
            
            $sQuery = 'uc_caps:Capital-'.$this->id.' ?p ?o .';
            
            $this->DeleteModelTriples($sQuery);

            return parent::afterDelete();
        }
}
