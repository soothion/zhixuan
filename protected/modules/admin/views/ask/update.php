<?php
/* @var $this AskController */
/* @var $model Ask */

$this->breadcrumbs=array(
	'问答管理'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Ask', 'url'=>array('index')),
	array('label'=>'Create Ask', 'url'=>array('create')),
	array('label'=>'View Ask', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Ask', 'url'=>array('admin')),
);
?>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>