<?php
/* @var $this AdsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'广告管理',
);

$this->menu=array(
	array('label'=>'Create Ads', 'url'=>array('create')),
	array('label'=>'Manage Ads', 'url'=>array('admin')),
);
?>

<?php $this->widget('bootstrap.widgets.TbGridView', array(
        'type'=>'striped bordered condensed',
	'dataProvider'=>$dataProvider,
        'columns'=>array(
            array('name'=>'id','header'=>'#'),
            array('name'=>'title','header'=>'标题'),
            array('name'=>'links','header'=>'链接地址'),
            array('name'=>'dateline','header'=>'过期时间'),
            array('header'=>'操作','class'=>'bootstrap.widgets.TbButtonColumn','template'=>'{update}{delete}'),
        ),
)); ?>
