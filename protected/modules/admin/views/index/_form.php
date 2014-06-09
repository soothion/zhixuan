<?php
/* @var $this CourseController */
/* @var $model Course */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'id' => 'config-form',
        'enableAjaxValidation' => false,
        'htmlOptions' => array('class' => 'well', 'enctype' => 'multipart/form-data'),
    ));
    ?>
    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model, 'title'); ?>
        <?php echo $form->textField($model, 'title',array('class'=>'span5','maxlength'=>100)); ?>
        <?php echo $form->error($model, 'title'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'keyword'); ?>
        <?php echo $form->textField($model, 'keyword',array('class'=>'span5','maxlength'=>100)); ?>
        <?php echo $form->error($model, 'keyword'); ?>
    </div>	
    <div class="row">
        <?php echo $form->labelEx($model, 'des'); ?>
        <?php echo $form->textField($model, 'des',array('class'=>'span5','maxlength'=>100)); ?>
        <?php echo $form->error($model, 'des'); ?>
    </div>	
    <div class="row">
        <?php echo $form->labelEx($model, 'tag'); ?>
        <?php echo $form->textField($model, 'tag',array('class'=>'span5','maxlength'=>100)); ?>
        <?php echo $form->error($model, 'tag'); ?>
    </div>	
    <div class="row">
        <?php echo $form->labelEx($model, 'partner'); ?>
        <?php echo $form->textField($model, 'partner',array('class'=>'span5','maxlength'=>100)); ?>
        <?php echo $form->error($model, 'partner'); ?>
    </div>	
    <div class="row">
        <?php echo $form->labelEx($model, 'seller_email'); ?>
        <?php echo $form->textField($model, 'seller_email',array('class'=>'span5','maxlength'=>100)); ?>
        <?php echo $form->error($model, 'seller_email'); ?>
    </div>	
    <div class="row">
        <?php echo $form->labelEx($model, 'security_code'); ?>
        <?php echo $form->textField($model, 'security_code',array('class'=>'span5','maxlength'=>100)); ?>
        <?php echo $form->error($model, 'security_code'); ?>
    </div>	

    <div class="row">
        <?php echo $form->labelEx($model, 'auth1'); ?>
        <?php $model->auth1=  explode('|', $model->auth1); 
        echo $form->checkBoxList($model, 'auth1',
             array(
            'ask'=>'提问',
            'answer'=>'解惑',
            'email'=>'获得Email提醒',
            'comment'=>'评论',
            'agree'=>'发送“有启发”、“感谢”',
            'reply'=>'向解惑者追问')
            );?>
        <?php echo $form->error($model, 'auth1'); ?>
    </div>
    
    <div class="row">
        <?php echo $form->labelEx($model, 'auth2'); ?>
        <?php $model->auth2=explode('|',$model->auth2); echo $form->checkBoxList($model, 'auth2',array('ask'=>'提问','email'=>'获得Email提醒','comment'=>'评论','agree'=>'发送“有启发”、“感谢”','reply'=>'向解惑者追问'));?>
        <?php echo $form->error($model, 'auth2'); ?>
    </div>
    
    <div class="row">
        <?php echo $form->labelEx($model, 'copyright'); ?>
        <?php echo $form->textArea($model,'copyright',array('class'=>'span8', 'rows'=>6, 'cols'=>50)); ?>
        <?php echo $form->error($model, 'copyright'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->