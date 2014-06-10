<?php
$this->breadcrumbs=array(
	'文章管理',
);

$this->menu=array(
	array('label'=>'Create Article','url'=>array('create')),
	array('label'=>'Manage Article','url'=>array('admin')),
);
?>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
        'type'=>'striped bordered condensed',
	'dataProvider'=>$dataProvider,
        'pager'=>array('class'=>'bootstrap.widgets.TbPager','displayFirstAndLast'=>true,'firstPageLabel'=>'首页','lastPageLabel'=>'尾页'),
        'columns'=>array(
        array('name'=>'id','header'=>'#'),
        array('name'=>'title','header'=>'标题'),
        array('name'=>'content','header'=>'内容'),
        array('name'=>'click','header'=>'浏览量'),
        array('header'=>'操作','class'=>'bootstrap.widgets.TbButtonColumn','template'=>'{update}{delete}'),
    ),
)); ?>

