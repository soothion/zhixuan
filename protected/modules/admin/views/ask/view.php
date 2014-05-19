<?php
/* @var $this AskController */
/* @var $model Ask */

$this->breadcrumbs=array(
	'Asks'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Ask', 'url'=>array('index')),
	array('label'=>'Create Ask', 'url'=>array('create')),
	array('label'=>'Update Ask', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Ask', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Ask', 'url'=>array('admin')),
);
?>

<?php $this->widget('bootstrap.widgets.TbDetailView', array(
	'data'=>$model,
	'type'=>'striped bordered condensed',
	'attributes'=>array(
		'id',
		'cid',
		'uid',
		'content',
		'recommend',
		'verify',
		'agree',
		'tag',
		'addtime',
	),
)); ?>
