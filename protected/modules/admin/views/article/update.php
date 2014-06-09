<?php
$this->breadcrumbs=array(
	'文章管理'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Article','url'=>array('index')),
	array('label'=>'Create Article','url'=>array('create')),
	array('label'=>'View Article','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Article','url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>