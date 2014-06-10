<?php
/* @var $this CourseTypeController */
/* @var $model CourseType */

$this->breadcrumbs=array(
	'课程类别管理'=>array('index'),
	'添加',
);

$this->menu=array(
	array('label'=>'List CourseType', 'url'=>array('index')),
	array('label'=>'Manage CourseType', 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>