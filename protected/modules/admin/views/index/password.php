<?php
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id'=>'id-form',
	'action'=>$this->createUrl('/admin/index/password'),
	'enableAjaxValidation'=>true,
	'enableClientValidation' => true,
	'clientOptions' => array(
		'validateOnSubmit' => true,
		'afterValidate'=>'js:afterValidate',
	),
		
)); ?>
<?php echo $form->textFieldRow($model, 'username', array('class'=>'input-xlarge','disabled'=>'disabled')); ?>
<?php echo $form->passwordFieldRow($model, 'oldpassword', array('class'=>'input-large')); ?>
<?php echo $form->passwordFieldRow($model, 'password', array('class'=>'input-large')); ?>
<?php echo $form->passwordFieldRow($model, 'repassword', array('class'=>'input-large')); ?>
<p> 
  <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'label'=>' 保 存 ','url'=>$this->createUrl('my_save'))); ?>
  <?php

?>
</p>
<?php $this->endWidget(); ?>
<script>
function afterValidate(form, data, hasError){
	if(hasError==false){
		ajaxFormSubmit("#id-form",'successfun');
	}
	return false;
};
function successfun(data){
	setTimeout('location.reload();',1000);
}
</script> 
