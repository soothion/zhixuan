<?php
/* @var $this CourseTypeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'课程类别管理',
);

$this->menu=array(
	array('label'=>'Create CourseType', 'url'=>array('create')),
	array('label'=>'Manage CourseType', 'url'=>array('admin')),
);
?>


<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'type'=>'striped bordered condensed',
	'dataProvider'=>$dataProvider,
    'columns'=>array(
	    array('name'=>'id', 'header'=>'#'),
	    array('name'=>'title', 'header'=>'标题'),
	    array(
	        'header'=>'操作',
	        'class'=>'bootstrap.widgets.TbButtonColumn',
                'template'=>'{update}{delete}'
	    ),
	)	
));
?>