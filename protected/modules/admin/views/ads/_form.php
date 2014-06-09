<?php
/* @var $this AdsController */
/* @var $model Ads */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'ads-form',
	'enableAjaxValidation'=>false,
        'htmlOptions'=>array('class'=>'well'),
)); ?>

	<p class="note">含有 <span class="required">*</span> 的字段必须填写！</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('class'=>'span5','maxlength'=>100)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dateline'); ?>
		<?php echo $form->textField($model,'dateline',array('class'=>'span5','maxlength'=>100)); ?>
		<?php echo $form->error($model,'dateline'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pic'); ?>
		<?php echo $form->textField($model,'pic',array('class'=>'span5','maxlength'=>100)); ?>
		<?php echo $form->error($model,'pic'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'links'); ?>
		<?php echo $form->textField($model,'links',array('class'=>'span5','maxlength'=>100)); ?>
		<?php echo $form->error($model,'links'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->