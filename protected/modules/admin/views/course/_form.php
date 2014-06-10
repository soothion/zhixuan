<?php
/* @var $this CourseController */
/* @var $model Course */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'course-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('class'=>'well','enctype'=>'multipart/form-data'),
)); ?>
    <p class="note">含有 <span class="required">*</span> 的字段必须填写！</p>

	<?php echo $form->errorSummary($model); ?>


	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('class'=>'span5','maxlength'=>100)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>
    <?php 
    $courseType=  CourseType::model()->findAll();
    $array=array();
    foreach($courseType as $val){
        $id=$val->id;
        $title=$val->title;
        $array[$id]=$title;
    }
    ?>
    	<div class="row">
		<?php echo $form->labelEx($model,'tid'); ?>
		<?php echo $form->dropDownList($model,'title',$array); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>
    
	<div class="row">
		<?php echo $form->labelEx($model,'theme'); ?>
		<?php echo $form->textField($model,'theme',array('class'=>'span5','maxlength'=>100)); ?>
		<?php echo $form->error($model,'theme'); ?>
	</div>
    	<div class="row">
		<?php echo $form->labelEx($model,'tag'); ?>
		<?php echo $form->textField($model,'tag',array('class'=>'span5','maxlength'=>100)); ?>
		<?php echo $form->error($model,'tag'); ?>
	</div>
    
	<div class="row">
		<?php echo $form->labelEx($model,'des'); ?>
		<?php echo $form->textField($model,'des',array('class'=>'span5','maxlength'=>100)); ?>
		<?php echo $form->error($model,'des'); ?>
	</div>
    
	<div class="row">
		<?php echo $form->labelEx($model,'content'); ?>
		<?php echo $form->textArea($model,'content',array('class'=>'span8', 'rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'content'); ?>
	</div>



	<div class="row">
		<?php echo $form->labelEx($model,'pic'); ?>
		<?php echo CHtml::activeFileField($model,'pic',array('size'=>60,'maxlength'=>80)); ?>
                <?php if(!empty($model->pic)) echo CHtml::image($model->pic,null,array('width'=>'200px'))?>
		<?php echo $form->error($model,'pic'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'click'); ?>
		<?php echo $form->textField($model,'click',array('class'=>'span5','maxlength'=>100)); ?>
		<?php echo $form->error($model,'click'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'recommend'); ?>
		<?php echo $form->checkBox($model,'recommend',array(0,1)); ?>
		<?php echo $form->error($model,'recommend'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'language'); ?>
		<?php echo $form->textField($model,'language',array('class'=>'span5','maxlength'=>100)); ?>
		<?php echo $form->error($model,'language'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'price'); ?>
		<?php echo $form->textField($model,'price',array('class'=>'span5','maxlength'=>100)); ?>
		<?php echo $form->error($model,'price'); ?>
	</div>
    
    	<div class="row">
		<?php echo $form->labelEx($model,'time'); ?>
		<?php echo $form->textField($model,'time',array('class'=>'span5','maxlength'=>100)); ?>
		<?php echo $form->error($model,'time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'video'); ?>
		<?php echo $form->textArea($model,'video',array('class'=>'span8', 'rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'video'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'agree'); ?>
		<?php echo $form->textField($model,'agree',array('class'=>'span5','maxlength'=>100)); ?>
		<?php echo $form->error($model,'agree'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'thank'); ?>
		<?php echo $form->textField($model,'thank',array('class'=>'span5','maxlength'=>100)); ?>
		<?php echo $form->error($model,'thank'); ?>
	</div>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->