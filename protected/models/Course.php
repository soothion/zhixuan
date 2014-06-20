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
			array('title, addtime', 'required'),
			array('cid, click, recommend, language, price, agree, thank', 'numerical', 'integerOnly'=>true),
			array('title, pic', 'length', 'max'=>80),
			array('des', 'length', 'max'=>200),
                        array('pic',
                            'file',
                            'allowEmpty'=>true,
                            'types'=>'jpg,png,gif',
                            'maxSize'=>1024*1024*10,    //上传大小限制，注意不是php.ini中的上传文件大小
                            'tooLarge'=>'上传失败！请上传小于10M的文件！' 
                            ),
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
                     'user'=>array(self::BELONGS_TO, 'Users', 'uid'),
                     'type'=>array(self::BELONGS_TO,'CourseType','tid'),
                     'comment'=>array(self::HAS_MANY,'Comment','cid'),
                     'love'=>array(self::HAS_MANY,'Love','cid'),
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
			'title' => '标题',
                        'tid'=> '课程类别',
                        'tag'=>'标签',
                        'time'=>'时长',
                        'theme'=>'主题',
			'content' => '内容',
			'des' => '简介',
			'pic' => '图片',
			'click' => '浏览量',
			'recommend' => '是否推荐',
			'language' => '语言',
			'price' => '价格',
			'video' => '视频',
			'agree' => '有启发',
			'thank' => '感谢',
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