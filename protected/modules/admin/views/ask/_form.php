<?php
/* @var $this AskController */
/* @var $model Ask */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ask-form',
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
		<?php echo $form->labelEx($model,'uid'); ?>
		<?php echo $form->textField($model,'uid'); ?>
		<?php echo $form->error($model,'uid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'content'); ?>
		<?php echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'content'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'recommend'); ?>
		<?php echo $form->textField($model,'recommend'); ?>
		<?php echo $form->error($model,'recommend'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'verify'); ?>
		<?php echo $form->textField($model,'verify'); ?>
		<?php echo $form->error($model,'verify'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'agree'); ?>
		<?php echo $form->textField($model,'agree'); ?>
		<?php echo $form->error($model,'agree'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tag'); ?>
		<?php echo $form->textArea($model,'tag',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'tag'); ?>
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