<?php
/* @var $this AskController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'问答管理',
);
?>

<?php $this->widget('bootstrap.widgets.TbGridView', array(
        'type'=>'striped bordered condensed',
	    'dataProvider'=>$dataProvider,
        'columns'=>array(
            array('name'=>'id', 'header'=>'#'),
            array('name'=>'cid', 'header'=>'分类'),
            array(
                'name'=>'content', 
                'header'=>'内容',
             
                ),
            array('name'=>'recommend', 'header'=>'推荐'),
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
