<?php
/* @var $this CommentController */
/* @var $model Comment */

$this->breadcrumbs=array(
	'评论管理',
);

$this->menu=array(
	array('label'=>'List Comment', 'url'=>array('index')),
	array('label'=>'Create Comment', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#comment-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>



<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'dataProvider'=>$model->search(),
        'filter'=>$model,
        'type'=>'striped bordered condensed',
        'pager'=>array('class'=>'bootstrap.widgets.TbPager','displayFirstAndLast'=>true,'firstPageLabel'=>'首页','lastPageLabel'=>'尾页'),
        'columns'=>array(
        array('name'=>'id','header'=>'#'),
        array('name'=>'uid','value'=>'$data->user->username','header'=>'用户'),
        array('name'=>'type','header'=>'类型'),
        array('name'=>'content','header'=>'内容'),
        array('header'=>'操作','class'=>'bootstrap.widgets.TbButtonColumn','template'=>'{update}{delete}'),
    ),
)); ?>
