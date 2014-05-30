<?php

class ExperienceController extends Controller {

    public function actionIndex() {
        $criteria = new CDbCriteria();
        $criteria->order = 'recommend desc, addtime desc, id desc';
        $criteria->addCondition('status=1');
        $count = Experience::model()->count($criteria);
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
        if(!$this->checkAuth('comment')){
            echo '没有权限';
            die;
        }        
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
    
    
    public function actionContribute(){
        if(!$uid=Yii::app()->user->id)
                $this->message('请先登录！',Yii::app()->createUrl('index'));
        if(isset($_POST['experience']))
        {
            $model=new Experience;
            $model->attributes=$_POST['experience'];
            $model->uid=$uid;
            $model->status=2;
            if($model->save()){
                $this->message('投稿成功,请等待管理员审核！');
            }
            else print_r($model->errors);
        }
        else{
            $this->layout = 'application.views.layouts.main1';
            $this->render('contribute');
        }

    }

}
