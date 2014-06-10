<?php
/* @var $this CourseController */
/* @var $model Course */

$this->breadcrumbs=array(
	'课程管理',
);

$this->menu=array(
	array('label'=>'List Course', 'url'=>array('index')),
	array('label'=>'Create Course', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#course-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>



<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'type'=>'striped bordered condensed',
	'dataProvider'=>$model->search(),
        'filter'=>$model,
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