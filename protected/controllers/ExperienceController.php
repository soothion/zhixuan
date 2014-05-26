<?php

class ExperienceController extends Controller {

    public function actionIndex() {
        $criteria = new CDbCriteria();
        $criteria->order = 'recommend desc, addtime desc, id desc';
        $count = Experience::model()->count();
        $pages = new CPagination($count);
        $pages->pageSize = 10;
        $pages->applyLimit($criteria);
        $experienceList = Experience::model()->findAll($criteria);
        $this->render('index', array(
            'experienceList' => $experienceList,
            'pages' => $pages,
        ));
    }

    public function actionDetail() {
        $id = $_GET['id'];
        $experience = Experience::model()->findByPk($id);

        //获取下一篇课程
        $nextCDbCriteria = new CDbCriteria();
        $nextCDbCriteria->addCondition('id>:id');
        $nextCDbCriteria->order = 'id';
        $nextCDbCriteria->params = array(':id' => $id);
        $next = Experience::model()->find($nextCDbCriteria);
        //获取上一篇课程
        $prevCDbCriteria = new CDbCriteria();
        $prevCDbCriteria->addCondition('id<:id');
        $prevCDbCriteria->order = 'id desc';
        $prevCDbCriteria->params = array(':id' => $id);
        $prev = Experience::model()->find($prevCDbCriteria);


        $this->render('detail', array(
            'experience' => $experience,
            'next' => $next,
            'prev' => $prev,
        ));
    }
    
    
    
    public function actionComment() {
        //获取评论信息
        $id = $_GET['id'];
        if (isset($_POST['content'])) {
            if (Yii::app()->user->id) {
                $comment = new Comment;
                $comment->content = $_POST['content'];
                $comment->eid = $id;
                $comment->uid = Yii::app()->user->id;
                $comment->save();
            } else
                echo '<script>alert("请登录后操作");</script>';
        }
        $commentCDbCriteria = new CDbCriteria();
        $commentCDbCriteria->addCondition('eid=:id');
        $commentCDbCriteria->params = array(':id' => $id);
        $commentCDbCriteria->order = 'addtime';
        $count = Comment::model()->count("eid=$id");
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
