<?php
/* @var $this CourseController */
/* @var $model Course */

$this->breadcrumbs=array(
	'Courses'=>array('index'),
	$model->title,
);
?>

<?php $this->widget('bootstrap.widgets.TbDetailView', array(
	'data'=>$model,
	'type'=>'striped bordered condensed',
	'attributes'=>array(
		'id',
		'cid',
		'title',
		'content',
		'des',
		array(
				'label'=>'图片',
				'value'=>CHtml::image($model->pic),
			),
		'click',
		'recommend',
		'language',
		'price',
		'video',
		'agree',
		'thank',
		'addtime',
	),
)); ?>
