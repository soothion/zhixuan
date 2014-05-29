<?php

/**
 * This is the model class for table "{{love}}".
 *
 * The followings are the available columns in table '{{love}}':
 * @property integer $id
 * @property integer $uid
 * @property integer $aid
 * @property integer $cid
 * @property integer $eid
 * @property string $addtime
 */
class Love extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Love the static model class
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
		return '{{love}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('uid', 'required'),
			array('uid, aid, cid, eid', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, uid, aid, cid, eid, addtime', 'safe', 'on'=>'search'),
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
                    'ask'=>array(self::BELONGS_TO,'Ask','aid'),
                    'experience'=>array(self::BELONGS_TO,'Experience','eid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'uid' => 'Uid',
			'aid' => 'Aid',
			'cid' => 'Cid',
			'eid' => 'Eid',
			'addtime' => 'Addtime',
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
		$criteria->compare('uid',$this->uid);
		$criteria->compare('aid',$this->aid);
		$criteria->compare('cid',$this->cid);
		$criteria->compare('eid',$this->eid);
		$criteria->compare('addtime',$this->addtime,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}