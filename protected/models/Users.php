<?php

/**
 * This is the model class for table "{{users}}".
 *
 * The followings are the available columns in table '{{users}}':
 * @property integer $id
 * @property string $level
 * @property string $username
 * @property string $password
 * @property string $introduction
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
class Users extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Users the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return '{{users}}';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('username, password, logintime, loginip', 'required'),
            array('logincount, flag', 'numerical', 'integerOnly' => true),
            array('level', 'length', 'max' => 1),
            array('username, major', 'length', 'max' => 20),
            array('password, loginip', 'length', 'max' => 40),
            array('introduction', 'length', 'max' => 100),
            array('logintime', 'length', 'max' => 35),
            array('name, tel, qq, msn', 'length', 'max' => 80),
            array('thumb',
                'file',
                'allowEmpty' => true,
                'types' => 'jpg,png,gif',
                'maxSize' => 1024 * 1024 * 10, //上传大小限制，注意不是php.ini中的上传文件大小
                'tooLarge' => '上传失败！请上传小于10M的文件！'
            ),
            array('email, age', 'length', 'max' => 30),
            array('sex', 'length', 'max' => 10),
            array('company, job', 'length', 'max' => 50),
            array('config', 'length', 'max' => 300),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, level, username, password, introduction, logintime, loginip, logincount, thumb, flag, email, sex, name, major, company, job, age, tel, qq, msn, config', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'course' => array(self::HAS_MANY, 'Course', 'id'),
            'comment' => array(self::HAS_MANY, 'Comment', 'id'),
            'ask' => array(self::HAS_MANY, 'Ask', 'id'),
            'experience' => array(self::HAS_MANY, 'Experience', 'id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => '用户ID',
            'level' => '用户等级',
            'username' => '用户名',
            'password' => '密码',
            'introduction' => '一句话描述',
            'logintime' => '最后登录时间',
            'loginip' => '最后登录ＩＰ',
            'logincount' => '登录次数',
            'thumb' => '头像',
            'flag' => 'Flag',
            'email' => 'Email',
            'sex' => '性别',
            'name' => '名字',
            'major' => '专业描述',
            'company' => '就职',
            'job' => '职位',
            'age' => '年龄',
            'tel' => '电话',
            'qq' => 'QＱ',
            'msn' => 'Msn',
            'config' => '隐私设置',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search() {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('level', $this->level, true);
        $criteria->compare('username', $this->username, true);
        $criteria->compare('password', $this->password, true);
        $criteria->compare('introduction', $this->introduction, true);
        $criteria->compare('logintime', $this->logintime, true);
        $criteria->compare('loginip', $this->loginip, true);
        $criteria->compare('logincount', $this->logincount);
        $criteria->compare('thumb', $this->thumb, true);
        $criteria->compare('flag', $this->flag);
        $criteria->compare('email', $this->email, true);
        $criteria->compare('sex', $this->sex, true);
        $criteria->compare('name', $this->name, true);
        $criteria->compare('major', $this->major, true);
        $criteria->compare('company', $this->company, true);
        $criteria->compare('job', $this->job, true);
        $criteria->compare('age', $this->age, true);
        $criteria->compare('tel', $this->tel, true);
        $criteria->compare('qq', $this->qq, true);
        $criteria->compare('msn', $this->msn, true);
        $criteria->compare('config', $this->config, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

}
