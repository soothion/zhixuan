<?php
/* @var $this AnswerController */
/* @var $model Answer */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'answer-form',
	'enableAjaxValidation'=>false,
        'htmlOptions'=>array('class'=>'well'),
)); ?>

<p class="note">含有 <span class="required">*</span> 的字段必须填写！</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'aid'); ?>
		<?php echo $form->textField($model,'aid',array('class'=>'span5','maxlength'=>100)); ?>
		<?php echo $form->error($model,'aid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'content'); ?>
		<?php echo $form->textArea($model,'content',array('class'=>'span8', 'rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'content'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'uid'); ?>
		<?php echo $form->textField($model,'uid',array('class'=>'span5','maxlength'=>100)); ?>
		<?php echo $form->error($model,'uid'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->