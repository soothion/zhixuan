<?php
/* @var $this AdsController */
/* @var $model Ads */

$this->breadcrumbs=array(
	'广告管理'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Ads', 'url'=>array('index')),
	array('label'=>'Create Ads', 'url'=>array('create')),
	array('label'=>'View Ads', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Ads', 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>