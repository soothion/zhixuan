<?php

class IndexController extends Controller {

    public function actionIndex() {
        //首页推荐教程
        $recommendCourseCriteria = new CDbCriteria();
        $recommendCourseCriteria->order = 'recommend desc, addtime desc, id desc';
        $recommendCourse = Course::model()->find($recommendCourseCriteria);

        //首页免费教程
        $freeCourseCriteria = new CDbCriteria();
        $freeCourseCriteria->condition = 'price=0';
        $freeCourseCriteria->limit = 2;
        $freeCourseCriteria->order = 'recommend desc, addtime desc, id desc';
        $freeCourse = Course::model()->findAll($freeCourseCriteria);

        //有问必答
        $askCriteria = new CDbCriteria();
        $askCriteria->limit = 5;
        $askCriteria->order = 'recommend desc, addtime desc, id desc';
        $ask = Ask::model()->findAll($askCriteria);

        //渲染视图
        $this->render('index', array(
            'recommendCourse' => $recommendCourse,
            'freeCourse' => $freeCourse,
            'ask' => $ask,
        ));
    }

    //赞同、有启发操作
    public function actionAgree() {
        $message = '';
        switch ($_POST['type']) {
            case 'ask':
                $model = Ask::model();
                break;
            case 'course':
                $model = Course::model();
                break;
            case 'experience':
                $model = Experience::model();
                break;
            case 'answer':
                $model = Answer::model();
                break;
        }
        $id = $_POST['id'];
        if (isset(Yii::app()->session[$_POST['type']]) && in_array($id, Yii::app()->session[$_POST['type']])) {
            $message.='<script>alert("您已经点过了！");</script>';
        } else {
            if (!Yii::app()->user->id) {
                $message.='<script>alert("请先登录！");</script>';
            } else {
                $model->updateCounters(array('agree' => 1), "id=$id");
                $arr = Yii::app()->session[$_POST['type']]?Yii::app()->session[$_POST['type']]:array();
                array_push($arr, $id);
                Yii::app()->session[$_POST['type']] = $arr;
            }
        }

        echo $model->findByPk($id)->agree . $message;
    }

    //收藏操作
    public function actionLove() {

        switch ($_POST['type']) {
            case 'course':
                $attributes = array('cid' => $_POST['id']);
                $condition = 'cid=' . $_POST['id'];
                $attributes['cid'] = $_POST['id'];
                break;
            case 'experience':
                $attributes = array('eid' => $_POST['id']);
                $condition = 'eid=' . $_POST['id'];
                $attributes['eid'] = $_POST['id'];
                break;
            case 'answer':
                $attributes = array('aid' => $_POST['id']);
                $condition = 'aid=' . $_POST['id'];
                $attributes['aid'] = $_POST['id'];
                break;
        }
        $model = new Love;
        $message = '';
        if (Yii::app()->user->id) {
            $attributes['uid'] = Yii::app()->user->id;
            if (!$model->findAllByAttributes($attributes)) {
                $model->attributes = $attributes;
                $model->save();
            } else {
                $message.='<script>alert("您已经收藏过了！")</script>';
            }
        } else {
            $message.='<script>alert("请先登录！")</script>';
        }
        echo $model->count($condition) . $message;
    }

    public function actionLogin() {
        // set the login page layout
        $model = new LoginForm;
        // collect user input data
        if (isset($_POST['username'])) {
            $model->attributes = $_POST;
            // validate user input and redirect to the previous page if valid
            if ($model->validate()) {
                $user_model = Users::model()->findByAttributes(array('username' => $model->username));
                if ($model->login()) {
                    // Set ip and date attributes to update user record
                    $attributes = array(
                        'loginip' => ip2long(Yii::app()->request->userHostAddress),
                        'logintime' => date('Y-m-d H:i:s', time()),
                    );
                    echo '登录成功！' . '<script>location.reload();</script>';
                }
            } else {
                echo '用户名或密码错误！';
            }
        }
    }

    public function actionRegister() {
        $this->layout='application.views.layouts.main1';
        if (isset($_POST['username'])) {
            $user = new Users;
            $user->attributes = $_POST;
            $user->password = md5($user->password);
            $user->loginip = Yii::app()->request->userHostAddress;
            $user->logintime = date('Y-m-d H:i:s', time());
            if ($user->validate() && $user->save()) {
                //$user->login();
                $this->message('注册成功！',Yii::app()->createUrl('index'));
            } else {
                $this->message('注册失败！');
            }
        } else
            $this->render('register');
    }

    public function actionLogout() {
        Yii::app()->user->logout();
        $this->redirect('index');
    }
    
    
    public function actionSearch(){
        $model=ucwords($_GET['model']);
        $key=trim($_GET['key']);
        $column='title';
        if($model=='Ask')
            $column='content';
        $DB=$model::model();
        $criteria=new CDbCriteria();
        $criteria->addSearchCondition($column, $key);
        $count=$DB->count($criteria);
        $pages=new CPagination($count);
        $pages->pageSize=20;
        $pages->applyLimit($criteria);
        $list=$DB->findAll($criteria);
        $this->render('search',array(
            'list'=>$list,
            'model'=>$model,
            'pages'=>$pages,
            'key'=>$key,
        ));
    }
    
    public function actionReset(){
        $this->layout='application.views.layouts.main1';
        $this->render('reset');
    }

}
