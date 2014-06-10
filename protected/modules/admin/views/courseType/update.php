<?php
/* @var $this CourseTypeController */
/* @var $model CourseType */

$this->breadcrumbs=array(
	'Course Types'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CourseType', 'url'=>array('index')),
	array('label'=>'Create CourseType', 'url'=>array('create')),
	array('label'=>'View CourseType', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage CourseType', 'url'=>array('admin')),
);
?>


<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>