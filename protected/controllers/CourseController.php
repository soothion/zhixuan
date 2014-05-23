<?php

class CourseController extends Controller {

    public function actionIndex() {
        //首页推荐教程
        $recommendCourseCriteria = new CDbCriteria();
        $recommendCourseCriteria->order = 'recommend desc, addtime desc, id desc';
        $recommendCourse = Course::model()->find($recommendCourseCriteria);


        //首页教程列表
        $courseCriteria = new CDbCriteria();
        if (isset($_GET['filter'])) {
            $filter = explode('-', $_GET['filter']);
            if (!(int) $filter[0] == '0') {
                $courseCriteria->addCondition("tid=:tid");
                $courseCriteria->params[':tid'] = $filter[0];
            }
            if (!$filter[1] == '0') {
                $courseCriteria->addCondition('tag like :tag');
                $courseCriteria->params[':tag'] = '%' . $filter[1] . '%';
            }
        } else
            $filter = array(0,0);
        $courseCriteria->limit = 6;
        $courseCriteria->order = 'recommend desc, addtime desc, id desc';
        $courseCount = Course::model()->count($courseCriteria);
        $pages = new CPagination($courseCount);
        $pages->pageSize = 6;
        $pages->applyLimit($courseCriteria);
        $courseList = Course::model()->findAll($courseCriteria);
        $courseCount = Course::model()->count();

        //获取所有分类
        $type = CourseType::model()->findAll();
        
        $tag=  explode(' ', Tag::model()->find()->course);
        //渲染视图
        $this->render('index', array(
            'filter' => $filter,
            'recommendCourse' => $recommendCourse,
            'courseList' => $courseList,
            'courseCount' => $courseCount,
            'pages'=>$pages,
            'type' => $type,
            'tag'=>$tag,
        ));
    }

    public function actionDetail() {
        $id = $_GET['id'];
        $course = Course::model()->findByPk($id);
        //获取下一篇课程
        $nextCDbCriteria = new CDbCriteria();
        $nextCDbCriteria->addCondition('id>:id');
        $nextCDbCriteria->order = 'id';
        $nextCDbCriteria->params = array(':id' => $id);
        $next = Course::model()->find($nextCDbCriteria);
        //获取上一篇课程
        $prevCDbCriteria = new CDbCriteria();
        $prevCDbCriteria->addCondition('id<:id');
        $prevCDbCriteria->order = 'id desc';
        $prevCDbCriteria->params = array(':id' => $id);
        $prev = Course::model()->find($prevCDbCriteria);

        //获取评论信息
        $commentCDbCriteria = new CDbCriteria();
        $commentCDbCriteria->addCondition('cid=:id');
        $commentCDbCriteria->params = array(':id' => $id);
        $commentCDbCriteria->order = 'addtime';
        $comment = Comment::model()->findAll($commentCDbCriteria);
        
        $this->data['course']=$course;
        $this->render('detail', array(
            'course' => $course,
            'next' => $next,
            'prev' => $prev,
            'comment' => $comment,
            'model' => Comment::model(),
        ));
    }

    public function actionComment() {
        //获取评论信息
        $id = $_GET['id'];
        if (isset($_POST['content'])) {
            $comment = new Comment;
            $comment->content = $_POST['content'];
            $comment->cid = $id;
            $comment->uid = Yii::app()->user->id;
            $comment->save();
        }
        $commentCDbCriteria = new CDbCriteria();
        $commentCDbCriteria->addCondition('cid=:id');
        $commentCDbCriteria->params = array(':id' => $id);
        $commentCDbCriteria->order = 'addtime';
        $count = Comment::model()->count("cid=$id");
        $pages = new CPagination($count);
        $pages->pageSize = 20;
        $pages->applyLimit($commentCDbCriteria);
        $comment = Comment::model()->findAll($commentCDbCriteria);
        $this->renderPartial('comment', array(
            'comment' => $comment,
            'pages' => $pages,
        ));
    }
    
    public function actionOrder(){
        if(!Yii::app()->user->id)
        $this->redirect (array('index'));
        $id=$_GET['id'];
        $type=$_GET['type'];
        $course=  Course::model()->findByPk($id);
        $this->render('order',array(
            'course'=>$course,
        ));
    }

}
