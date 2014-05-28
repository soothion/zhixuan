<?php

/**
 * This is the model class for table "{{config}}".
 *
 * The followings are the available columns in table '{{config}}':
 * @property integer $id
 * @property string $title
 * @property string $keyword
 * @property string $des
 * @property string $tag
 * @property string $partner
 * @property string $seller_email
 * @property string $security_code
 * @property string $copyright
 */
class Config extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Config the static model class
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
		return '{{config}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, keyword, des, tag, partner, seller_email, security_code, copyright', 'required'),
			array('title, partner, seller_email, security_code, copyright', 'length', 'max'=>50),
			array('keyword', 'length', 'max'=>100),
			array('des, tag', 'length', 'max'=>250),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, title, keyword, des, tag, partner, seller_email, security_code, copyright', 'safe', 'on'=>'search'),
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
			'title' => 'Title',
			'keyword' => 'Keyword',
			'des' => 'Des',
			'tag' => 'Tag',
			'partner' => 'Partner',
			'seller_email' => 'Seller Email',
			'security_code' => 'Security Code',
			'copyright' => 'Copyright',
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
		$criteria->compare('title',$this->title,true);
		$criteria->compare('keyword',$this->keyword,true);
		$criteria->compare('des',$this->des,true);
		$criteria->compare('tag',$this->tag,true);
		$criteria->compare('partner',$this->partner,true);
		$criteria->compare('seller_email',$this->seller_email,true);
		$criteria->compare('security_code',$this->security_code,true);
		$criteria->compare('copyright',$this->copyright,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}