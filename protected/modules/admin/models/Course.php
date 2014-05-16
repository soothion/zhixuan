<?php

/**
 * This is the model class for table "{{course}}".
 *
 * The followings are the available columns in table '{{course}}':
 * @property integer $id
 * @property integer $cid
 * @property string $title
 * @property string $content
 * @property string $des
 * @property string $pic
 * @property integer $click
 * @property integer $recommend
 * @property integer $language
 * @property integer $price
 * @property string $video
 * @property integer $agree
 * @property integer $thank
 * @property string $addtime
 */
class Course extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Course the static model class
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
		return '{{course}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('des, addtime', 'required'),
			array('cid, click, recommend, language, price, agree, thank', 'numerical', 'integerOnly'=>true),
			array('title, pic', 'length', 'max'=>80),
			array('des', 'length', 'max'=>200),
			array('content, video', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, cid, title, content, des, pic, click, recommend, language, price, video, agree, thank, addtime', 'safe', 'on'=>'search'),
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
			'title' => 'Title',
			'content' => 'Content',
			'des' => 'Des',
			'pic' => 'Pic',
			'click' => 'Click',
			'recommend' => 'Recommend',
			'language' => 'Language',
			'price' => 'Price',
			'video' => 'Video',
			'agree' => 'Agree',
			'thank' => 'Thank',
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
		$criteria->compare('title',$this->title,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('des',$this->des,true);
		$criteria->compare('pic',$this->pic,true);
		$criteria->compare('click',$this->click);
		$criteria->compare('recommend',$this->recommend);
		$criteria->compare('language',$this->language);
		$criteria->compare('price',$this->price);
		$criteria->compare('video',$this->video,true);
		$criteria->compare('agree',$this->agree);
		$criteria->compare('thank',$this->thank);
		$criteria->compare('addtime',$this->addtime,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}