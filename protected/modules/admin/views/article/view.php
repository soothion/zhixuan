<?php
$this->breadcrumbs=array(
	'Articles'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Article','url'=>array('index')),
	array('label'=>'Create Article','url'=>array('create')),
	array('label'=>'Update Article','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Article','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Article','url'=>array('admin')),
);
?>

<h1>View Article #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'content',
		'click',
		'addtime',
	),
)); ?>
