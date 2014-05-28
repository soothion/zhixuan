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
        <?php echo $form->textField($model, 'title'); ?>
        <?php echo $form->error($model, 'title'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'keyword'); ?>
        <?php echo $form->textField($model, 'keyword'); ?>
        <?php echo $form->error($model, 'keyword'); ?>
    </div>	
    <div class="row">
        <?php echo $form->labelEx($model, 'des'); ?>
        <?php echo $form->textField($model, 'des'); ?>
        <?php echo $form->error($model, 'des'); ?>
    </div>	
    <div class="row">
        <?php echo $form->labelEx($model, 'tag'); ?>
        <?php echo $form->textField($model, 'tag'); ?>
        <?php echo $form->error($model, 'tag'); ?>
    </div>	
    <div class="row">
        <?php echo $form->labelEx($model, 'partner'); ?>
        <?php echo $form->textField($model, 'partner'); ?>
        <?php echo $form->error($model, 'partner'); ?>
    </div>	
    <div class="row">
        <?php echo $form->labelEx($model, 'seller_email'); ?>
        <?php echo $form->textField($model, 'seller_email'); ?>
        <?php echo $form->error($model, 'seller_email'); ?>
    </div>	
    <div class="row">
        <?php echo $form->labelEx($model, 'security_code'); ?>
        <?php echo $form->textField($model, 'security_code'); ?>
        <?php echo $form->error($model, 'security_code'); ?>
    </div>	

    <div class="row">
        <?php echo $form->labelEx($model, 'copyright'); ?>
        <?php echo $form->textField($model, 'copyright'); ?>
        <?php echo $form->error($model, 'copyright'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->