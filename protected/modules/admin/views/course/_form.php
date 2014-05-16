<?php
/* @var $this CourseController */
/* @var $model Course */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'course-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'cid'); ?>
		<?php echo $form->textField($model,'cid'); ?>
		<?php echo $form->error($model,'cid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'content'); ?>
		<?php echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'content'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'des'); ?>
		<?php echo $form->textField($model,'des',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'des'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pic'); ?>
		<?php echo $form->textField($model,'pic',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'pic'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'click'); ?>
		<?php echo $form->textField($model,'click'); ?>
		<?php echo $form->error($model,'click'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'recommend'); ?>
		<?php echo $form->textField($model,'recommend'); ?>
		<?php echo $form->error($model,'recommend'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'language'); ?>
		<?php echo $form->textField($model,'language'); ?>
		<?php echo $form->error($model,'language'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'price'); ?>
		<?php echo $form->textField($model,'price'); ?>
		<?php echo $form->error($model,'price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'video'); ?>
		<?php echo $form->textArea($model,'video',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'video'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'agree'); ?>
		<?php echo $form->textField($model,'agree'); ?>
		<?php echo $form->error($model,'agree'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'thank'); ?>
		<?php echo $form->textField($model,'thank'); ?>
		<?php echo $form->error($model,'thank'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'addtime'); ?>
		<?php echo $form->textField($model,'addtime'); ?>
		<?php echo $form->error($model,'addtime'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->