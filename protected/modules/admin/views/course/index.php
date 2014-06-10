<?php
/* @var $this CourseController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'课程管理',
);

$this->menu=array(
	array('label'=>'Create Course', 'url'=>array('create')),
	array('label'=>'Manage Course', 'url'=>array('admin')),
);
?>

<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'type'=>'striped bordered condensed',
	'dataProvider'=>$dataProvider,
        'pager'=>array('class'=>'bootstrap.widgets.TbPager','displayFirstAndLast'=>true,'firstPageLabel'=>'首页','lastPageLabel'=>'尾页'),
        'columns'=>array(
	    array('name'=>'id', 'header'=>'#'),
	    array('name'=>'title', 'header'=>'标题'),
	    // array('name'=>'pic', 'header'=>'图片'),
	    array('name'=>'click', 'header'=>'浏览'),
	    array('name'=>'recommend', 'header'=>'推荐'),
	    array('name'=>'price', 'header'=>'价格'),
	    array('name'=>'agree', 'header'=>'赞同'),
	    array('name'=>'thank', 'header'=>'感谢'),
            array('name'=>'addtime', 'header'=>'添加时间'),
	    array(
	        'header'=>'操作',
	        'class'=>'bootstrap.widgets.TbButtonColumn',
                'template'=>'{update}{delete}'
	    ),
	)	
));
?>
