<?php
/* @var $this AdminsController */
/* @var $model Admins */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'admins-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'logintime'); ?>
		<?php echo $form->textField($model,'logintime',array('size'=>35,'maxlength'=>35)); ?>
		<?php echo $form->error($model,'logintime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'loginip'); ?>
		<?php echo $form->textField($model,'loginip',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'loginip'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'logincount'); ?>
		<?php echo $form->textField($model,'logincount'); ?>
		<?php echo $form->error($model,'logincount'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->