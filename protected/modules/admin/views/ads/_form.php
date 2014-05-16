<?php
/* @var $this AdsController */
/* @var $model Ads */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ads-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'classid'); ?>
		<?php echo $form->textField($model,'classid'); ?>
		<?php echo $form->error($model,'classid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dateline'); ?>
		<?php echo $form->textField($model,'dateline',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'dateline'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fpic'); ?>
		<?php echo $form->textField($model,'fpic',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'fpic'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'links'); ?>
		<?php echo $form->textField($model,'links',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'links'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sid'); ?>
		<?php echo $form->textField($model,'sid'); ?>
		<?php echo $form->error($model,'sid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'language'); ?>
		<?php echo $form->textField($model,'language'); ?>
		<?php echo $form->error($model,'language'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fpic2'); ?>
		<?php echo $form->textField($model,'fpic2',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'fpic2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'city'); ?>
		<?php echo $form->textField($model,'city'); ?>
		<?php echo $form->error($model,'city'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->