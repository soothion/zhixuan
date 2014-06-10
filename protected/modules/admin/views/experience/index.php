<?php
/* @var $this ExperienceController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'经验管理',
);

$this->menu=array(
	array('label'=>'Create Experience', 'url'=>array('create')),
	array('label'=>'Manage Experience', 'url'=>array('admin')),
);
?>


<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'type'=>'striped bordered condensed',
	'dataProvider'=>$dataProvider,
     'pager'=>array('class'=>'bootstrap.widgets.TbPager','displayFirstAndLast'=>true,'firstPageLabel'=>'首页','lastPageLabel'=>'尾页'),
    'columns'=>array(
    array('name'=>'id', 'header'=>'#'),
    array('name'=>'title', 'header'=>'标题'),
    array('name'=>'click', 'header'=>'浏览'),
    array('name'=>'agree', 'header'=>'赞同'),
    array('name'=>'status', 'header'=>'审核'),
    array(
        'header'=>'操作',
        'class'=>'bootstrap.widgets.TbButtonColumn',
        'template'=>'{update}{delete}'
    ),
   )
)); ?>
