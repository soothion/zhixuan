<?php
/* @var $this ExperienceController */
/* @var $model Experience */

$this->breadcrumbs=array(
	'Experiences'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Experience', 'url'=>array('index')),
	array('label'=>'Create Experience', 'url'=>array('create')),
	array('label'=>'Update Experience', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Experience', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Experience', 'url'=>array('admin')),
);
?>


<?php $this->widget('bootstrap.widgets.TbDetailView', array(
	'data'=>$model,
	'type'=>'striped bordered condensed',
	'attributes'=>array(
		'id',
		'title',
		'content',
		'uid',
		'click',
		'agree',
	),
)); ?>
