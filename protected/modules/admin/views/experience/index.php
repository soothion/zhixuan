<?php
/* @var $this ExperienceController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Experiences',
);

$this->menu=array(
	array('label'=>'Create Experience', 'url'=>array('create')),
	array('label'=>'Manage Experience', 'url'=>array('admin')),
);
?>

<h1>Experiences</h1>

<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'type'=>'striped bordered condensed',
	'dataProvider'=>$dataProvider,
    'columns'=>array(
    array('name'=>'id', 'header'=>'#'),
    array('name'=>'title', 'header'=>'标题'),
    array('name'=>'click', 'header'=>'浏览'),
    array('name'=>'agree', 'header'=>'赞同'),
    array(
        'header'=>'操作',
        'class'=>'bootstrap.widgets.TbButtonColumn',
    ),
   )
)); ?>
