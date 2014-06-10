<?php
/* @var $this AskController */
/* @var $model Ask */

$this->breadcrumbs=array(
	'问答管理',
);

$this->menu=array(
	array('label'=>'List Ask', 'url'=>array('index')),
	array('label'=>'Create Ask', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#ask-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<?php $this->widget('bootstrap.widgets.TbGridView', array(
        'type'=>'striped bordered condensed',
	'dataProvider'=>$model->search(),
     'pager'=>array('class'=>'bootstrap.widgets.TbPager','displayFirstAndLast'=>true,'firstPageLabel'=>'首页','lastPageLabel'=>'尾页'),
        'filter'=>$model,
        'columns'=>array(
            array('name'=>'id', 'header'=>'#'),
            array('name'=>'cid', 'header'=>'分类'),
            array(
                'name'=>'content', 
                'header'=>'内容',
             
                ),
            array('name'=>'recommend', 'header'=>'置顶'),
            array('name'=>'verify', 'header'=>'审核'),
            array('name'=>'agree', 'header'=>'赞同'),
            array('name'=>'tag', 'header'=>'标签'),
            array(
                'header'=>'操作',
                'class'=>'bootstrap.widgets.TbButtonColumn',
                'template'=>'{update}{delete}'
            ),
        ),
)); ?>

