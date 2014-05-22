<?php

/**
 * This is the model class for table "{{ask}}".
 *
 * The followings are the available columns in table '{{ask}}':
 * @property integer $id
 * @property integer $cid
 * @property integer $tid
 * @property integer $uid
 * @property string $content
 * @property integer $recommend
 * @property integer $verify
 * @property integer $agree
 * @property string $tag
 * @property string $addtime
 */
class Ask extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Ask the static model class
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
		return '{{ask}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tid, uid', 'required'),
			array('cid, tid, uid, recommend, verify, agree', 'numerical', 'integerOnly'=>true),
			array('content, tag', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, cid, tid, uid, content, recommend, verify, agree, tag, addtime', 'safe', 'on'=>'search'),
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
                    'user'=>array(self::BELONGS_TO,'Users','uid'),
                    'comment'=>array(self::HAS_MANY,'Comment','aid'),
                    'type'=>array(self::BELONGS_TO,'AskType','tid'),
                    'answer'=>array(self::HAS_MANY,'Answer','aid'),
                    'love'=>array(self::HAS_MANY,'Love','aid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'cid' => 'Cid',
			'tid' => 'Tid',
			'uid' => 'Uid',
			'content' => 'Content',
			'recommend' => 'Recommend',
			'verify' => 'Verify',
			'agree' => 'Agree',
			'tag' => 'Tag',
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
		$criteria->compare('cid',$this->cid);
		$criteria->compare('tid',$this->tid);
		$criteria->compare('uid',$this->uid);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('recommend',$this->recommend);
		$criteria->compare('verify',$this->verify);
		$criteria->compare('agree',$this->agree);
		$criteria->compare('tag',$this->tag,true);
		$criteria->compare('addtime',$this->addtime,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}