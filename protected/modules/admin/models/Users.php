<?php

/**
 * This is the model class for table "{{users}}".
 *
 * The followings are the available columns in table '{{users}}':
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $logintime
 * @property string $loginip
 * @property integer $logincount
 * @property string $thumb
 * @property integer $flag
 * @property string $email
 * @property string $sex
 * @property string $name
 * @property string $major
 * @property string $company
 * @property string $job
 * @property string $age
 * @property string $tel
 * @property string $qq
 * @property string $msn
 * @property string $config
 */
class Users extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Users the static model class
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
		return '{{users}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, password, logintime, loginip', 'required'),
			array('logincount, flag', 'numerical', 'integerOnly'=>true),
			array('username, major', 'length', 'max'=>20),
			array('password, loginip', 'length', 'max'=>40),
			array('logintime', 'length', 'max'=>35),
			array('thumb, name, tel, qq, msn', 'length', 'max'=>80),
			array('email, age', 'length', 'max'=>30),
			array('sex', 'length', 'max'=>10),
			array('company, job', 'length', 'max'=>50),
			array('config', 'length', 'max'=>300),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, username, password, logintime, loginip, logincount, thumb, flag, email, sex, name, major, company, job, age, tel, qq, msn, config', 'safe', 'on'=>'search'),
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
			'username' => '用户名',
			'password' => '密码',
			'logintime' => '最后登录时间',
			'loginip' => '最后登录IP',
			'logincount' => '登录次数',
			'thumb' => '头像',
			'flag' => 'Flag',
			'email' => 'Email',
			'sex' => '性别',
			'name' => '真实姓名',
			'major' => '专业',
			'company' => '就职单位',
			'job' => '职位',
			'age' => '年龄',
			'tel' => '电话',
			'qq' => 'QQ',
			'msn' => 'Msn',
			'config' => '隐私设置',
			'auth' => '权限设置',
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
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('logintime',$this->logintime,true);
		$criteria->compare('loginip',$this->loginip,true);
		$criteria->compare('logincount',$this->logincount);
		$criteria->compare('thumb',$this->thumb,true);
		$criteria->compare('flag',$this->flag);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('sex',$this->sex,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('major',$this->major,true);
		$criteria->compare('company',$this->company,true);
		$criteria->compare('job',$this->job,true);
		$criteria->compare('age',$this->age,true);
		$criteria->compare('tel',$this->tel,true);
		$criteria->compare('qq',$this->qq,true);
		$criteria->compare('msn',$this->msn,true);
		$criteria->compare('config',$this->config,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}