<?php

class AskController extends Controller {

    public function actionIndex() {
        //首页教程列表
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
        $askCount = Ask::model()->count();
        $pages = new CPagination($askCount);
        $pages->pageSize = 20;
        $pages->applyLimit($askCriteria);
        $askList = Ask::model()->findAll($askCriteria);
        //获取所有分类
        $type = AskType::model()->findAll();
        //渲染视图
        $this->render('index', array(
            'filter' => $filter,
            'askList' => $askList,
            'askCount' => $askCount,
            'type' => $type,
            'pages' => $pages,
        ));
    }

    public function actionAsk() {
        $model = new Ask;
        if (isset($_POST['content'])) {
            $model->attributes = $_POST;
            $model->uid = 58;
            if ($model->validate() && $model->save()) //注2：$model->validate()就是在调用model.rules进行验证
                echo '提交成功';
            else
                echo '提交失败';
        }
    }

    public function actionDetail() {
        $id = $_GET['id'];
        $ask = Ask::model()->findByPk($id);
        $this->render('detail', array(
            'ask' => $ask,
        ));
    }

    public function actionAnswer() {
        $model = new Answer;
        if (isset($_POST['content'])) {
            $model->attributes = $_POST;
            $model->uid = 58;
            if ($model->validate() && $model->save()) //注2：$model->validate()就是在调用model.rules进行验证
                echo '提交成功';
            else
                echo '提交失败';
        }
    }

    public function actionComment() {
        //获取评论信息
        $id = $_GET['id'];
        if (isset($_POST['content'])) {
            $comment = new Comment;
            $comment->content = $_POST['content'];
            $comment->aid = $id;
            $comment->uid = 58;
            $comment->save();
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
