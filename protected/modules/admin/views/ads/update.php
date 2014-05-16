<?php
/* @var $this AdsController */
/* @var $model Ads */

$this->breadcrumbs=array(
	'Ads'=>array('index'),
	$model->title=>array('view','id'=>$model->tid),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ads', 'url'=>array('index')),
	array('label'=>'Create Ads', 'url'=>array('create')),
	array('label'=>'View Ads', 'url'=>array('view', 'id'=>$model->tid)),
	array('label'=>'Manage Ads', 'url'=>array('admin')),
);
?>

<h1>Update Ads <?php echo $model->tid; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>