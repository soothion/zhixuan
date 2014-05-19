<?php

class IndexController extends Controller
{
	public function actionIndex()
	{
                //首页推荐教程
                $recommendCourseCriteria = new CDbCriteria();
                $recommendCourseCriteria -> order = 'recommend desc, addtime desc, id desc';
                $recommendCourse = Course::model() -> find($recommendCourseCriteria);
                
                //首页免费教程
                $freeCourseCriteria = new CDbCriteria();
                $freeCourseCriteria -> condition='price=0';
                $freeCourseCriteria -> limit = 2;
                $freeCourseCriteria -> order = 'recommend desc, addtime desc, id desc';
                $freeCourse = Course::model() -> findAll($freeCourseCriteria);
                
                //有问必答
                $askCriteria = new CDbCriteria();
                $askCriteria -> limit = 5;
                $askCriteria -> order = 'recommend desc, addtime desc, id desc';
                $ask= Ask::model() ->findAll($askCriteria);
                
                //渲染视图
		$this->render('index',array(
                    'recommendCourse'=>$recommendCourse,
                    'freeCourse'=>$freeCourse,
                    'ask'=>$ask,
                        ));
	}
}