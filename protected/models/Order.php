<?php

/**
 * This is the model class for table "{{order}}".
 *
 * The followings are the available columns in table '{{order}}':
 * @property string $id
 * @property integer $cid
 * @property integer $uid
 * @property string $type
 * @property string $model
 * @property integer $price
 * @property integer $status
 * @property string $addtime
 */
class Order extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Order the static model class
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
		return '{{order}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, cid, uid, type, model, price, status', 'required'),
			array('cid, uid, price, status', 'numerical', 'integerOnly'=>true),
			array('id', 'length', 'max'=>50),
			array('type, model', 'length', 'max'=>1),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, cid, uid, type, model, price, status, addtime', 'safe', 'on'=>'search'),
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
                     'course'=>array(self::BELONGS_TO,'Course','cid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'cid' => '课程',
			'uid' => '用户',
			'type' => '购买种类',
			'model' => '支付方式',
			'price' => '价格',
			'status' => '状态',
			'addtime' => '添加时间',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('cid',$this->cid);
		$criteria->compare('uid',$this->uid);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('model',$this->model,true);
		$criteria->compare('price',$this->price);
		$criteria->compare('status',$this->status);
		$criteria->compare('addtime',$this->addtime,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}