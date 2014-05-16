<?php
/* @var $this UsersController */
/* @var $model Users */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'users-form',
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

	<div class="row">
		<?php echo $form->labelEx($model,'thumb'); ?>
		<?php echo $form->textField($model,'thumb',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'thumb'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'flag'); ?>
		<?php echo $form->textField($model,'flag'); ?>
		<?php echo $form->error($model,'flag'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sex'); ?>
		<?php echo $form->textField($model,'sex',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'sex'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'major'); ?>
		<?php echo $form->textField($model,'major',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'major'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'company'); ?>
		<?php echo $form->textField($model,'company',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'company'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'job'); ?>
		<?php echo $form->textField($model,'job',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'job'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'age'); ?>
		<?php echo $form->textField($model,'age',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'age'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tel'); ?>
		<?php echo $form->textField($model,'tel',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'tel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'qq'); ?>
		<?php echo $form->textField($model,'qq',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'qq'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'msn'); ?>
		<?php echo $form->textField($model,'msn',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'msn'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'config'); ?>
		<?php echo $form->textField($model,'config',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'config'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->