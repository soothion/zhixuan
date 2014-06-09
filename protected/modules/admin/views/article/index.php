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
        'columns'=>array(
        array('name'=>'id','header'=>'#'),
        array('name'=>'title','header'=>'标题'),
        array('name'=>'content','header'=>'内容'),
        array('name'=>'click','header'=>'浏览量'),
        array('header'=>'操作','class'=>'bootstrap.widgets.TbButtonColumn','template'=>'{update}{delete}'),
    ),
)); ?>

