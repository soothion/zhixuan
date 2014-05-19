<?php
/* @var $this CommentController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Comments',
);

$this->menu=array(
	array('label'=>'Create Comment', 'url'=>array('create')),
	array('label'=>'Manage Comment', 'url'=>array('admin')),
);
?>

<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'dataProvider'=>$dataProvider,
        'type'=>'striped bordered condensed',
        'columns'=>array(
        array('name'=>'id','header'=>'#'),
        array('name'=>'uid','header'=>'用户'),
        array('name'=>'type','header'=>'类型'),
        array('name'=>'content','header'=>'内容'),
        array('header'=>'操作','class'=>'bootstrap.widgets.TbButtonColumn','template'=>'{update}{delete}'),
    ),
)); ?>
