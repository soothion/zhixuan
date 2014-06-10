<?php
/* @var $this ExperienceController */
/* @var $model Experience */

$this->breadcrumbs=array(
	'经验管理',
);

$this->menu=array(
	array('label'=>'List Experience', 'url'=>array('index')),
	array('label'=>'Create Experience', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#experience-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>


<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'type'=>'striped bordered condensed',
	'dataProvider'=>$model->search(),
        'filter'=>$model,
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