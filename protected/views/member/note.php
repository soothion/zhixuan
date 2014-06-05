<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/member.css" />
<div class="InTitle"><h1>会员空间</h1></div>

<div class="memberContent" id="contentWrapper">
    <?php $this->widget('MemberWidget');?>
    <div class="userTitle"><h2><a href="###">给TA留言</a></h2></div>
    <div class="userConWrap">
        <div class="msgBoard"><textarea></textarea>
   <div class="ctrl"><input type="button" value="提交留言" class="btnTxt" /></div>
  </div>
</div>
</div>
 