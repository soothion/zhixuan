<?php
/* @var $this UsersController */
/* @var $model Users */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'users-form',
	'enableAjaxValidation'=>false,
        'htmlOptions'=>array('class'=>'well'),
)); ?>

<p class="note">含有 <span class="required">*</span> 的字段必须填写！</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('class'=>'span5','maxlength'=>100)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'logintime'); ?>
		<?php echo $form->textField($model,'logintime',array('class'=>'span5','maxlength'=>100)); ?>
		<?php echo $form->error($model,'logintime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'loginip'); ?>
		<?php echo $form->textField($model,'loginip',array('class'=>'span5','maxlength'=>100)); ?>
		<?php echo $form->error($model,'loginip'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'logincount'); ?>
		<?php echo $form->textField($model,'logincount',array('class'=>'span5','maxlength'=>100)); ?>
		<?php echo $form->error($model,'logincount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'thumb'); ?>
		<?php echo $form->textField($model,'thumb',array('class'=>'span5','maxlength'=>100)); ?>
		<?php echo $form->error($model,'thumb'); ?>
	</div>

	<div class="row">
                 <?php echo $form->labelEx($model,'level'); ?>
		<?php echo $form->dropDownList($model,'level',array(1=>'提问者',2=>'解惑者')); ?>
		<?php echo $form->error($model,'level'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'score'); ?>
		<?php echo $form->textField($model,'score',array('class'=>'span5','maxlength'=>100)); ?>
		<?php echo $form->error($model,'score'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('class'=>'span5','maxlength'=>100)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sex'); ?>
		<?php echo $form->textField($model,'sex',array('class'=>'span5','maxlength'=>100)); ?>
		<?php echo $form->error($model,'sex'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('class'=>'span5','maxlength'=>100)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'major'); ?>
		<?php echo $form->textField($model,'major',array('class'=>'span5','maxlength'=>100)); ?>
		<?php echo $form->error($model,'major'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'company'); ?>
		<?php echo $form->textField($model,'company',array('class'=>'span5','maxlength'=>100)); ?>
		<?php echo $form->error($model,'company'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'job'); ?>
		<?php echo $form->textField($model,'job',array('class'=>'span5','maxlength'=>100)); ?>
		<?php echo $form->error($model,'job'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'age'); ?>
		<?php echo $form->textField($model,'age',array('class'=>'span5','maxlength'=>100)); ?>
		<?php echo $form->error($model,'age'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tel'); ?>
		<?php echo $form->textField($model,'tel',array('class'=>'span5','maxlength'=>100)); ?>
		<?php echo $form->error($model,'tel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'qq'); ?>
		<?php echo $form->textField($model,'qq',array('class'=>'span5','maxlength'=>100)); ?>
		<?php echo $form->error($model,'qq'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'msn'); ?>
		<?php echo $form->textField($model,'msn',array('class'=>'span5','maxlength'=>100)); ?>
		<?php echo $form->error($model,'msn'); ?>
	</div>

        
        <div class="row">
            <?php echo $form->labelEx($model, 'config'); ?>
            <?php
            $model->config = explode('|', $model->config);
            echo $form->checkBoxList($model, 'config', array(
                '1' => '邮箱',
                '2' => '就职单位',
                '3' => '职位',
                '4' => '年龄',
                '5' => '手机',
                '6' => 'QQ')
            );?>
        <?php echo $form->error($model, 'auth'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model, 'auth'); ?>
            <?php
            $model->auth = explode('|', $model->auth);
            echo $form->checkBoxList($model, 'auth', array(
                'ask' => '提问',
                'answer' => '解惑',
                'email' => '获得EMAIL提醒',
                'comment' => '评论',
                'agree' => '发送“有启发”、“感谢”',
                'reply' => '向解惑者追问')
            );?>
        <?php echo $form->error($model, 'auth'); ?>
        </div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->