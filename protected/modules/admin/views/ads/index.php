<?php
/* @var $this AdsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ads',
);

$this->menu=array(
	array('label'=>'Create Ads', 'url'=>array('create')),
	array('label'=>'Manage Ads', 'url'=>array('admin')),
);
?>

<h1>Ads</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
