<?php
/* @var $this MessageController */
/* @var $model Message */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'message-form',
	'enableAjaxValidation'=>false,
        'htmlOptions'=>array('class'=>'well'),
)); ?>

	<p class="note">含有 <span class="required">*</span> 的字段必须填写！</p>

	<?php echo $form->errorSummary($model); ?>
        
        <div class="row">
                 <?php echo $form->labelEx($model,'type'); ?>
		<?php echo $form->dropDownList($model,'type',array('note'=>'用户留言','system'=>'系统消息')); ?>
		<?php echo $form->error($model,'type'); ?>
	</div>
        
       <?php if(!$this->getAction()->getId()=='create'){?>
	<div class="row">
		<?php echo $form->labelEx($model,'from'); ?>
		<?php echo $form->textField($model,'from',array('class'=>'span5','maxlength'=>100)); ?>
		<?php echo $form->error($model,'from'); ?>
	</div>
       <?php }?>
	<div class="row">
		<?php echo $form->labelEx($model,'to'); ?>
		<?php echo $form->textField($model,'to',array('class'=>'span5','maxlength'=>100)); ?>
		<?php echo $form->error($model,'to'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'content'); ?>
		<?php echo $form->textArea($model,'content',array('class'=>'span8', 'rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'content'); ?>
	</div>
<?php if(!$this->getAction()->getId()=='create'){?>
         <div class="row">
                <?php echo $form->labelEx($model,'read'); ?>
		<?php echo $form->checkBox($model,'read',array(0,1)); ?>
		<?php echo $form->error($model,'read'); ?>
	</div>
<?php }?>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->