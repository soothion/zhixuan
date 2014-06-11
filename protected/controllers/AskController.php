<?php

class AskController extends Controller {

    public function actionIndex() {
        //首页问答列表
        $askCriteria = new CDbCriteria();
        if (isset($_GET['filter'])) {
            $filter = explode('-', $_GET['filter']);
            if (!(int) $filter[0] == 0) {
                $askCriteria->addCondition("tid=:tid");
                $askCriteria->params[':tid'] = $filter[0];
            }
            if (!$filter[1] == '0') {
                $askCriteria->addCondition('tag like :tag');
                $askCriteria->params[':tag'] = '%' . $filter[1] . '%';
            }
        } else
            $filter = array(0, 0);
        $askCriteria->limit = 6;
        $askCriteria->order = 'recommend desc, addtime desc, id desc';
        $askCount = Ask::model()->count($askCriteria);
        $pages = new CPagination($askCount);
        $pages->pageSize = 20;
        $pages->applyLimit($askCriteria);
        $askList = Ask::model()->findAll($askCriteria);
        //获取所有分类
        $type = AskType::model()->findAll();
        
        $tag=  explode(' ', Tag::model()->find()->ask);
        //渲染视图
        $this->render('index', array(
            'filter' => $filter,
            'askList' => $askList,
            'askCount' => $askCount,
            'type' => $type,
            'pages' => $pages,
            'tag'=>$tag,
        ));
    }

    public function actionAsk() {
        if(!$this->checkAuth('ask')){
            echo '没有权限';
            die;
        }
        if (isset(Yii::app()->user->id)) {
            $model = new Ask;
            if (isset($_POST['content'])) {
                $model->attributes = $_POST;
                $model->uid = 58;
                if ($model->validate() && $model->save()) //注2：$model->validate()就是在调用model.rules进行验证
                    echo '提交成功';
                else
                    echo '提交失败';
            }
        } else
            echo '请登录后操作！';
    }

    public function actionDetail() {
        $id = $_GET['id'];
        $ask = Ask::model()->findByPk($id);
        $this->render('detail', array(
            'ask' => $ask,
        ));
    }

    public function actionAnswer() {
        if (!$this->checkAuth('answer')) {
            echo '没有权限';
            die;
        }
        if (isset(Yii::app()->user->id)) {
                $model = new Answer;
                if (isset($_POST['content'])) {
                    $model->attributes = $_POST;
                    $model->uid = Yii::app()->user->id;
                    if ($model->validate() && $model->save())
                    {
                        echo '提交成功';
                        $aid=$_POST['aid'];
                        $user=Ask::model()->findByPk($aid)->user;
                        //发送邮件
                        if($this->checkAuth('email',$user->id )){
                            $url=$this->createAbsoluteUrl('ask/detail',array('id'=>$aid));
                            $message = <<<str
你好！{$user->name}
        <h2>您的问题有了新回答,请点击以下链接查看！</h2>
        <a href="{$url}" target="_blank">"{$url}"</a>
        <br/>
str;
                            $mailer = Yii::createComponent('application.extensions.mailer.EMailer');
                            $mailer->Host = Yii::app()->mailer->host;
                            $mailer->IsSMTP();
                            $mailer->SMTPAuth = true;
                            $mailer->From = Yii::app()->mailer->from;
                            $mailer->FromName = Yii::app()->mailer->fromname;
                            $mailer->Username = Yii::app()->mailer->username;
                            $mailer->Password = Yii::app()->mailer->password;
                            $mailer->AddAddress($user->email);

                            $mailer->CharSet = 'UTF-8';
                            $mailer->Subject = '智选问题回答通知！';
                            $mailer->Body = $message;
                            $mailer->Send();
                        }
                    }
                    else
                        echo '提交失败';
                }
        } else
            echo '请登录后操作！';
    }

    public function actionComment() {
        //获取评论信息
        $id = $_GET['id'];
        if (isset($_POST['content'])) {
            if (!$this->checkAuth('comment')) {
                echo '<script>alert("没有权限");</script>';
                die;
            }
            if (Yii::app()->user->id) {
                $comment = new Comment;
                $comment->content = $_POST['content'];
                $comment->aid = $id;
                $comment->type = '问答';
                $comment->uid = Yii::app()->user->id;
                $comment->save();
            } else
                echo '<script>alert("请登录后操作");</script>';
        }
        $commentCDbCriteria = new CDbCriteria();
        $commentCDbCriteria->addCondition('aid=:id');
        $commentCDbCriteria->params = array(':id' => $id);
        $commentCDbCriteria->order = 'addtime';
        $count = Comment::model()->count("aid=$id");
        $pages = new CPagination($count);
        $pages->pageSize = 20;
        $pages->applyLimit($commentCDbCriteria);
        $comment = Comment::model()->findAll($commentCDbCriteria);
        $this->renderPartial('comment', array(
            'comment' => $comment,
            'pages' => $pages,
        ));
    }

}
