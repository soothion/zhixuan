<?php

/**
 * This is the model class for table "{{message}}".
 *
 * The followings are the available columns in table '{{message}}':
 * @property integer $id
 * @property string $type
 * @property integer $from
 * @property integer $to
 * @property string $content
 * @property string $read
 * @property string $addtime
 */
class Message extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Message the static model class
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
		return '{{message}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('type, from, to, content, read, addtime', 'required'),
			array('from, to', 'numerical', 'integerOnly'=>true),
			array('type', 'length', 'max'=>6),
			array('content', 'length', 'max'=>200),
			array('read', 'length', 'max'=>1),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, type, from, to, content, read, addtime', 'safe', 'on'=>'search'),
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
                    'from'=>array(self::BELONGS_TO,'Users','from'),
                    'to'=>array(self::BELONGS_TO,'Users','to'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'type' => '消息类型',
			'from' => '来自',
			'to' => '发送给',
			'content' => '内容',
			'read' => '已读',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('from',$this->from);
		$criteria->compare('to',$this->to);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('read',$this->read,true);
		$criteria->compare('addtime',$this->addtime,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}