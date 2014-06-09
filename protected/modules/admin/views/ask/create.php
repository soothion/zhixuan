<?php
/* @var $this AskController */
/* @var $model Ask */

$this->breadcrumbs=array(
	'Asks'=>array('index'),
	'添加',
);

$this->menu=array(
	array('label'=>'List Ask', 'url'=>array('index')),
	array('label'=>'Manage Ask', 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>