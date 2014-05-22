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
        switch ($_POST['type']) {
            case 'ask':
                $id = $_POST['id'];
                $model = Ask::model();
                break;
            case 'course':
                $id = $_POST['id'];
                $model = Course::model();
                break;
            case 'experience':
                $id = $_POST['id'];
                $model = Experience::model();
                break;
            case 'answer':
                $id = $_POST['id'];
                $model = Answer::model();
                break;
        }
        $model->updateCounters(array('agree' => 1), "id=$id");
        echo $model->findByPk($id)->agree;
    }

    //收藏操作
    public function actionLove() {
        switch ($_POST['type']) {
            case 'ask':
                $id = $_POST['id'];
                $model = Ask::model();
                break;
            case 'course':
                $id = $_POST['id'];
                $model = Course::model();
                break;
            case 'experience':
                $id = $_POST['id'];
                $model = Experience::model();
                break;
            case 'answer':
                $id = $_POST['id'];
                $model = Answer::model();
                break;
        }
        $model->updateCounters(array('agree' => 1), "id=$id");
        echo $model->findByPk($id)->agree;
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
                        'last_loginip' => ip2long(Yii::app()->request->userHostAddress),
                        'last_logindate' => date('Y-m-d H:i:s', time()),
                    );
                    echo '登录成功！' . '<script>location.reload();</script>';
                }
            } else {
                echo '用户名或密码错误！';
            }
        }
    }

    public function actionRegister(){
        $this->render('register');
    }
    public function actionLogout() {
        Yii::app()->user->logout();
        $this->redirect('index');
    }

}
