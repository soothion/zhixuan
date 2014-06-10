<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs=array(
	'用户管理',
);

$this->menu=array(
	array('label'=>'List Users', 'url'=>array('index')),
	array('label'=>'Create Users', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#users-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>


<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'dataProvider'=>$model->search(),
        'filter'=>$model,
	'type'=>'striped bordered condensed',
     'pager'=>array('class'=>'bootstrap.widgets.TbPager','displayFirstAndLast'=>true,'firstPageLabel'=>'首页','lastPageLabel'=>'尾页'),
        'columns'=>array(
            array('name'=>'id','header'=>'#'),
            array('name'=>'username','header'=>'用户名'),
            array('name'=>'email','header'=>'邮箱'),
            array('name'=>'sex','header'=>'性别'),
            array('name'=>'name','header'=>'姓名'),
            array('name'=>'major','header'=>'专业'),
            array('name'=>'company','header'=>'单位'),
            array('name'=>'job','header'=>'职位'),
            array('name'=>'age','header'=>'年龄'),
            array('name'=>'tel','header'=>'电话'),
            array('name'=>'qq','header'=>'QQ'),
            array('name'=>'msn','header'=>'MSN'),
            array('header'=>'操作','class'=>'bootstrap.widgets.TbButtonColumn','template'=>"{update}{delete}"),
        ),
)); ?>
