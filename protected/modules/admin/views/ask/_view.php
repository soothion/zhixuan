<?php
/* @var $this AskController */
/* @var $data Ask */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cid')); ?>:</b>
	<?php echo CHtml::encode($data->cid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('uid')); ?>:</b>
	<?php echo CHtml::encode($data->uid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('content')); ?>:</b>
	<?php echo CHtml::encode($data->content); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('recommend')); ?>:</b>
	<?php echo CHtml::encode($data->recommend); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('verify')); ?>:</b>
	<?php echo CHtml::encode($data->verify); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('agree')); ?>:</b>
	<?php echo CHtml::encode($data->agree); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('tag')); ?>:</b>
	<?php echo CHtml::encode($data->tag); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('addtime')); ?>:</b>
	<?php echo CHtml::encode($data->addtime); ?>
	<br />

	*/ ?>

</div>