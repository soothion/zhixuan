<?php
/* @var $this AdminsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Admins',
);

$this->menu=array(
	array('label'=>'Create Admins', 'url'=>array('create')),
	array('label'=>'Manage Admins', 'url'=>array('admin')),
);
?>

<h1>Admins</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
