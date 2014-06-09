<?php
/* @var $this AdminsController */
/* @var $data Admins */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::encode($data->username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('logintime')); ?>:</b>
	<?php echo CHtml::encode($data->logintime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('loginip')); ?>:</b>
	<?php echo CHtml::encode($data->loginip); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('logincount')); ?>:</b>
	<?php echo CHtml::encode($data->logincount); ?>
	<br />


</div>