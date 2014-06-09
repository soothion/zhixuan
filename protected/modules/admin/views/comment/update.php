<?php
/* @var $this CommentController */
/* @var $model Comment */

$this->breadcrumbs=array(
	'评论管理'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Comment', 'url'=>array('index')),
	array('label'=>'Create Comment', 'url'=>array('create')),
	array('label'=>'View Comment', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Comment', 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>