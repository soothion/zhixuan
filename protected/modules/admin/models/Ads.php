<?php

/**
 * This is the model class for table "{{ads}}".
 *
 * The followings are the available columns in table '{{ads}}':
 * @property string $tid
 * @property string $title
 * @property integer $classid
 * @property string $dateline
 * @property string $fpic
 * @property string $links
 * @property integer $sid
 * @property integer $language
 * @property string $fpic2
 * @property integer $city
 */
class Ads extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Ads the static model class
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
		return '{{ads}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('classid, sid, language, city', 'numerical', 'integerOnly'=>true),
			array('title, dateline, fpic, links, fpic2', 'length', 'max'=>80),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('tid, title, classid, dateline, fpic, links, sid, language, fpic2, city', 'safe', 'on'=>'search'),
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
			'tid' => 'Tid',
			'title' => 'Title',
			'classid' => 'Classid',
			'dateline' => 'Dateline',
			'fpic' => 'Fpic',
			'links' => 'Links',
			'sid' => 'Sid',
			'language' => 'Language',
			'fpic2' => 'Fpic2',
			'city' => 'City',
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

		$criteria->compare('tid',$this->tid,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('classid',$this->classid);
		$criteria->compare('dateline',$this->dateline,true);
		$criteria->compare('fpic',$this->fpic,true);
		$criteria->compare('links',$this->links,true);
		$criteria->compare('sid',$this->sid);
		$criteria->compare('language',$this->language);
		$criteria->compare('fpic2',$this->fpic2,true);
		$criteria->compare('city',$this->city);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}