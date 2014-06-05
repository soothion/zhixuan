<?php
/* @var $this UsersController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Users',
);

$this->menu=array(
	array('label'=>'Create Users', 'url'=>array('create')),
	array('label'=>'Manage Users', 'url'=>array('admin')),
);
?>


<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'dataProvider'=>$dataProvider,
	'type'=>'striped bordered condensed',
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
