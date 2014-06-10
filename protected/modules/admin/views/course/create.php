<?php
/* @var $this CourseController */
/* @var $model Course */

$this->breadcrumbs=array(
	'课程管理'=>array('index'),
	'添加',
);

$this->menu=array(
	array('label'=>'List Course', 'url'=>array('index')),
	array('label'=>'Manage Course', 'url'=>array('admin')),
);
?>


<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>