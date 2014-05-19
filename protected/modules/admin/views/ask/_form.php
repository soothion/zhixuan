<?php
/* @var $this AskController */
/* @var $model Ask */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'ask-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('class'=>'well'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->textAreaRow($model,'content',array('class'=>'span8', 'rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'content'); ?>
	</div>

	<div class="row">
		<?php echo $form->textFieldRow($model,'recommend'); ?>
		<?php echo $form->error($model,'recommend'); ?>
	</div>

	<div class="row">
		<?php echo $form->textFieldRow($model,'verify'); ?>
		<?php echo $form->error($model,'verify'); ?>
	</div>

	<div class="row">
		<?php echo $form->textFieldRow($model,'agree'); ?>
		<?php echo $form->error($model,'agree'); ?>
	</div>

	<div class="row">
		<?php echo $form->textFieldRow($model,'tag'); ?>
		<?php echo $form->error($model,'tag'); ?>
	</div>

	<div class="row buttons">
		<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'label'=>$model->isNewRecord ? 'Create' : 'Save')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->