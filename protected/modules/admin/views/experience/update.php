<?php
/* @var $this ExperienceController */
/* @var $model Experience */

$this->breadcrumbs=array(
	'经验管理'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Experience', 'url'=>array('index')),
	array('label'=>'Create Experience', 'url'=>array('create')),
	array('label'=>'View Experience', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Experience', 'url'=>array('admin')),
);
?>


<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>