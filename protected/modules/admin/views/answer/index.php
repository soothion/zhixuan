<?php
/* @var $this AnswerController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'答案管理',
);

$this->menu=array(
	array('label'=>'Create Answer', 'url'=>array('create')),
	array('label'=>'Manage Answer', 'url'=>array('admin')),
);
?>

<?php $this->widget('bootstrap.widgets.TbGridView', array(
        'type'=>'striped bordered condensed',
	'dataProvider'=>$dataProvider,
         'pager'=>array('class'=>'bootstrap.widgets.TbPager','displayFirstAndLast'=>true,'firstPageLabel'=>'首页','lastPageLabel'=>'尾页'),
        'columns'=>array(
            array('name'=>'id','header'=>'#'),
            array('name'=>'content','header'=>'内容'),
            array('name'=>'uid','header'=>'用户'),
            array('header'=>'操作','class'=>'bootstrap.widgets.TbButtonColumn','template'=>'{update}{delete}'),
        ),
)); ?>
