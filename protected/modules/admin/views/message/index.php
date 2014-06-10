<?php
/* @var $this MessageController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'消息管理',
);

$this->menu=array(
	array('label'=>'Create Message', 'url'=>array('create')),
	array('label'=>'Manage Message', 'url'=>array('admin')),
);
?>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'dataProvider'=>$dataProvider,
	'type'=>'striped bordered condensed',
        'columns'=>array(
            array('name'=>'id','header'=>'#'),
            array('name'=>'from','header'=>'From用户ID'),
            array('name'=>'to','header'=>'To用户ID'),
            array('name'=>'type','header'=>'类型'),
            array('name'=>'content','header'=>'内容'),
            array('name'=>'read','header'=>'已读'),
            array('header'=>'操作','class'=>'bootstrap.widgets.TbButtonColumn','template'=>"{update}{delete}"),
        ),
)); ?>

