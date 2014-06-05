<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/member.css" />
<div class="InTitle"><h1>会员空间</h1></div>

<div class="memberContentWrapper" id="contentWrapper">
 <?php $this->widget('MemberWidget');?>
<div class="userTitle"><h2>查看个人资料</h2></div>
<div class="userConWrap userInfoDisplay">
    <form action="" method="post">
<ul class="userInfoListing">
      <li>
       <span class="tit">真实姓名：</span>
       <span class="infoEditor"><input name="set[name]" type="text" value="<?php echo $user->username?>" class="inp" <?php if(Yii::app()->user->id!=$_GET['id']) echo 'disabled';?>/></span></li>
      <li>
       <span class="tit">一句话描述：</span>
       <span class="infoEditor"><input name="set[introduction]" type="text" value="<?php echo $user->introduction?>" class="inp" <?php if(Yii::app()->user->id!=$_GET['id']) echo 'disabled';?>/></span></li>
      <li class="desp">
       <span class="tit">专业描述：</span>
       <span class="infoEditor"><textarea name='set[major]' class="inp" <?php if(Yii::app()->user->id!=$_GET['id']) echo 'disabled';?>><?php echo $user->major?>　</textarea>
       </span></li>
              <li>
       <span class="tit">邮箱　：</span>
       <span class="infoEditor"><input name="set[email]" type="text" value="<?php if(!$config[0]||$user->id==$_GET['id']) echo $user->email;else echo '保密'?>" class="inp" <?php if(Yii::app()->user->id!=$_GET['id']) echo 'disabled';?>/></span></li>
       <li>
       <span class="tit">就职单位：</span>
       <span class="infoEditor"><input name="set[company]" type="text" value="<?php if(!$config[1]||$user->id==$_GET['id']) echo $user->company;else echo '保密'?>" class="inp" <?php if(Yii::app()->user->id!=$_GET['id']) echo 'disabled';?>/></span></li>
       <li>
       <span class="tit">职位：</span>
       <span class="infoEditor"><input name="set[job]" type="text" value="<?php if(!$config[2]||$user->id==$_GET['id']) echo $user->job;else echo '保密'?>" class="inp" <?php if(Yii::app()->user->id!=$_GET['id']) echo 'disabled';?>/></span></li> 
       <li>
       <span class="tit">年龄：</span>
       <span class="infoEditor">
       <input  type="text" name="set[age]" value="<?php if(!$config[3]||$user->id==$_GET['id']) echo $user->age;else echo '保密'?>" class="inp" <?php if(Yii::app()->user->id!=$_GET['id']) echo 'disabled';?>/></span></li>
       <li>
       <span class="tit">手机：</span>
       <span class="infoEditor">
       <input  type="text" name="set[tel]" value="<?php if(!$config[4]||$user->id==$_GET['id']) echo $user->tel;else echo '保密'?>" class="inp" <?php if(Yii::app()->user->id!=$_GET['id']) echo 'disabled';?>/></span></li>
       <li>
       <span class="tit">QQ：</span>
       <span class="infoEditor">
       <input  type="text" name="set[qq]" value="<?php if(!$config[5]||$user->id==$_GET['id']) echo $user->qq;else echo '保密'?>" class="inp" <?php if(Yii::app()->user->id!=$_GET['id']) echo 'disabled';?>/></span></li>  
       <?php if(Yii::app()->user->id==$_GET['id']){?> <input type="submit" value="保存" /><?php }?>
    </ul>
    </form>
    </div>    
</div>

