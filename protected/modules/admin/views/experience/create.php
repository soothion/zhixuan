<?php
/* @var $this ExperienceController */
/* @var $model Experience */

$this->breadcrumbs=array(
	'Experiences'=>array('index'),
	'添加',
);

$this->menu=array(
	array('label'=>'List Experience', 'url'=>array('index')),
	array('label'=>'Manage Experience', 'url'=>array('admin')),
);
?>


<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>