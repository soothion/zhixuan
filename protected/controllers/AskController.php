<?php

class AskController extends Controller
{
	public function actionIndex()
	{
		//首页教程列表
                $askCriteria = new CDbCriteria();
                if(isset($_GET['filter'])){
                    $filter = explode('-', $_GET['filter']);
                    if(!(int)$filter[0]==0)
                    {
                      $askCriteria ->addCondition("tid=:tid");
                      $askCriteria->params[':tid']=$filter[0];  
                    }
                    if(!$filter[1]=='0')
                    {
                       $askCriteria ->addCondition('tag like :tag'); 
                       $askCriteria->params[':tag']='%'.$filter[1].'%';  
                    }
                        
                }
                else $filter=array(0,0);
                $askCriteria -> limit = 6;
                $askCriteria -> order = 'recommend desc, addtime desc, id desc';
                $askCount=Ask::model()->count();
                $pages=new CPagination($askCount);
                $pages->pageSize=20;
                $pages->applyLimit($askCriteria); 
                $askList = Ask::model() -> findAll($askCriteria);
                //获取所有分类
                $type=  AskType::model()->findAll();
                 //渲染视图
		$this->render('index',array(
                    'filter'=>$filter,
                    'askList'=>$askList,
                    'askCount'=>$askCount,
                    'type'=>$type,
                    'pages'=>$pages,
                        ));
	}

    public function actionAsk(){
        echo 'success';
    }
}