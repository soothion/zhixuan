<?php
/* @var $this AnswerController */
/* @var $model Answer */

$this->breadcrumbs=array(
	'答案管理',
);

$this->menu=array(
	array('label'=>'List Answer', 'url'=>array('index')),
	array('label'=>'Create Answer', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#answer-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'answer-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
        'pager'=>array('class'=>'bootstrap.widgets.TbPager','displayFirstAndLast'=>true,'firstPageLabel'=>'首页','lastPageLabel'=>'尾页'),
        'type'=>'striped bordered condensed',
	'columns'=>array(
		'id',
		'aid',
		'content',
		'uid',
		 array('header'=>'操作','class'=>'bootstrap.widgets.TbButtonColumn','template'=>"{update}{delete}"),
	),
)); ?>
