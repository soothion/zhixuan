<?php
/* @var $this MessageController */
/* @var $model Message */

$this->breadcrumbs=array(
	'消息管理',
);

$this->menu=array(
	array('label'=>'List Message', 'url'=>array('index')),
	array('label'=>'Create Message', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#message-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>


<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'message-grid',
        'type'=>'striped bordered condensed',
	'dataProvider'=>$model->search(),
     'pager'=>array('class'=>'bootstrap.widgets.TbPager','displayFirstAndLast'=>true,'firstPageLabel'=>'首页','lastPageLabel'=>'尾页'),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'type',
		'from',
		'to',
		'content',
		'read',
		/*
		'addtime',
		*/
		 array('header'=>'操作','class'=>'bootstrap.widgets.TbButtonColumn','template'=>"{update}{delete}"),
	),
)); ?>


