<?php

class MemberController extends Controller {

    public function init() {
        $this->layout = 'application.views.layouts.main1';
    }

    public function actionIndex() {
        $id = $_GET['id'];
        $order = Order::model()->findAllByAttributes(array('uid' => $id));
        $ask = Ask::model()->findAllByAttributes(array('uid' => $id));
        $answer = Answer::model()->findAllByAttributes(array('uid' => $id));
        $experience = Experience::model()->findAllByAttributes(array('uid' => $id));
        $love = Love::model()->findAllByAttributes(array('uid' => $id));
        $this->render('index', array(
            'order' => $order,
            'ask' => $ask,
            'answer' => $answer,
            'experience' => $experience,
            'love' => $love,
        ));
    }

    public function actionInfo() {
        $id = $_GET['id'];
        $user = Users::model()->findByPk($id);
        if (isset($_POST['set'])) {
            $user->attributes = $_POST['set'];
            if ($user->save())
                $this->message('修改成功！', $this->createUrl('member/info', array('id' => $id)));
            else
                $this->message('修改失败！');
        }
        else {
            $config = explode('|', $user->config);
            $this->render('info', array(
                'user' => $user,
                'config' => $config,
            ));
        }
    }

    public function actionMessage() {
        $id = $_GET['id'];
        $note = Message::model()->findAllByAttributes(array('to' => $id, 'type' => 'note'));
        $system = Message::model()->findAllByAttributes(array('to' => $id, 'type' => 'system'));
        $this->render('message', array(
            'note' => $note,
            'system' => $system,
        ));
    }

    public function actionNote() {
        $this->render('note');
    }

    public function actionScore() {
        $criteria = new CDbCriteria();
        $criteria->addCondition('uid=' . $_GET['id']);
        $criteria->order = 'addtime';
        $count = Score::model()->countByAttributes(array('uid' => $_GET['id']));
        $pages = new CPagination($count);
        $pages->pageSize = 10;
        $pages->applyLimit($criteria);
        $list = Score::model()->findAll($criteria);
        $this->render('score', array(
            'list' => $list,
            'pages' => $pages,
        ));
    }

    public function actionSet() {
        $id = $_GET['id'];
        $user = Users::model()->findByPk($id);
        if (isset($_POST['set'])) {
            $user->attributes = $_POST['set'];
            $config = array();
            for ($i = 0; $i < 6; $i++) {
                $config[$i] = $_POST['set']['config'][$i] ? 1 : 0;
            }
            $config = implode('|', $config);
            $user->config = $config;
            //头像处理
            if (isset($_FILES['thumb']) && $_FILES['thumb'] != null) {
                $thumb = CUploadedFile::getInstance($user, 'thumb');   //获得一个CUploadedFile的实例  
                if (is_object($thumb) && get_class($thumb) === 'CUploadedFile') {   // 判断实例化是否成功  
                    $user->thumb = 'upload/' . date('Ym') . '/' . time() . '.' . $thumb->extensionName;   //定义文件保存的名称  
                    if (!is_dir(dirname($user->thumb)))
                        mkdir(dirname($user->thumb), 0777);
                    $thumb->saveAs($user->thumb);
                } else {
                    $user->thumb = 'upload/noThumb.jpg';   // 默认图片　  
                }
            }
            //密码处理
            if (isset($_POST['set']['oldpassword']) && isset($_POST['set']['newpassword']) && $_POST['set']['oldpassword'] != null) {
                if (md5($_POST['set']['oldpassword']) != $user->password)
                    $this->message('密码错误!');
                else if (strlen($_POST['set']['newpassword']) < 6)
                    $this->message('密码至少6位字符！');
                else
                    $user->password = md5($_POST['set']['newpassword']);
            }
            if ($user->save())
                $this->message('修改成功！', $this->createUrl('member/set', array('id' => $id)));
            else{
               // print_r($user->errors);
                $this->message('修改失败！');
            }
                
        } else {
            $config = explode('|', $user->config);
            $this->render('set', array(
                'user' => $user,
                'config' => $config,
            ));
        }
    }

}
