<script type="text/javascript" charset="utf-8" src="<?php echo Yii::app()->request->baseUrl; ?>/js/Validform_v5.3.2_min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/member.css" /> 
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/layer/layer.min.js"></script>
<script>
$(document).ready(function(){
  $(".regForm1").Validform({
        tiptype:function(msg,o,cssctl){
        layer.tips(msg, '.regForm1 .BtnJiao', {style: ['background-color:red; color:#fff', 'red'],
time: 2,maxWidth:255,closeBtn:[0, true]});
    }
  });

    $(".regForm2").Validform({
    tiptype:function(msg,o,cssctl){
        layer.tips(msg, '.regForm1 .BtnJiao', {style: ['background-color:red; color:#fff', 'red'],
time: 2,maxWidth:255,closeBtn:[0, true]});
    }
  });
})

</script>
<style>
#Validform_msg{display: none;}
 .Validform_wrong{color:red;}
 .Validform_right{color:green;}
</style>

<div class="InTitle"><h1>一般会员注册（原提问者）</h1></div>

<div class="MenberContent" id="contentWrapper">
<form class="regForm1" action="<?php echo Yii::app()->createUrl('index/register')?>" method="post">
    <input type="hidden" name="level" value="1"/>
    <ul class="MenberLoginWrite">
  <li class="TT1">
   <p class="PP1">*用户名：</p>
   <p class="PP2"><input type="text" name="username" datatype="s4-18" errormsg="用户名至少4个字符,最多16个字符！" /></p> 
  </li>
  <li class="TT5"></li>

  <li class="TT1">
   <p class="PP1">*邮箱：</p>
   <p class="PP2"><input type="text" name="email"  datatype="e" errormsg="请输入正确的邮箱!"/></p>
  </li>
  <li class="TT5"><!--备注文字--></li>

  <li class="TT1">
   <p class="PP1">*密码：</p>
   <p class="PP2"><input type="password" name="password" datatype="s6-18" errormsg="密码至少6个字符,最多16个字符！"/></p>
  </li>
  <li class="TT5"><!--备注文字--></li>
   
  <li class="TT1">
   <p class="PP1">*确认密码：</p>
   <p class="PP2"><input type="password" datatype="*" recheck="password" errormsg="两次密码不一致！"/></p>
  </li>
  <li class="TT5"><!--备注文字--></li>

  <li class="TT2"> 
   <input type="submit" value="提交" class="BtnJiao" />
  </li>
  <li class="TT3"><a href="#">已注册用户？ 立即登录>></a></li>
 </ul>   
</form>
 <div class="MenberLoginWText">
  你现在只是<span>一般会员</span>，可以<span>提问，评论，购买课程</span>。<br/>
  进一步完善资料，成为高级学员。<br/>
  成为<span>高级会员</span>，你可以通过解答问题，获得积分，还可以用积分直接购买课程。<br/>
 </div>
 
 <div class="InTitle"><h1>高级会员注册（原解惑者）</h1></div>

<form class="regForm2" action="<?php echo Yii::app()->createUrl('index/register')?>" method="post">
 <ul class="MenberLoginWrite">
  <li class="TT1">
   <p class="PP1">*用户名：</p>
   <p class="PP2"><input type="text" name="username" datatype="s4-18" errormsg="用户名至少4个字符,最多16个字符！" /></p>
  </li>
  <li class="TT5"><!--备注文字--></li>


  <li class="TT1">
   <p class="PP1">*邮箱：</p>
   <p class="PP2"><input type="text" name="email"  datatype="e" errormsg="请输入正确的邮箱!"/></p>
  </li>
  <li class="TT5"><!--备注文字--></li>


  <li class="TT1">
   <p class="PP1">*密码：</p>
   <p class="PP2"><input type="password" name="password" datatype="s6-18" errormsg="密码至少6个字符,最多16个字符！"/></p>
  </li>
  <li class="TT5"><!--备注文字--></li>


  <li class="TT1">
   <p class="PP1">*确认密码：</p>
   <p class="PP2"><input type="password" datatype="*" recheck="password" errormsg="两次密码不一致！"/></p>
  </li>
  <li class="TT5"><!--备注文字--></li>


  <li class="TT1">
   <p class="PP1">&nbsp;真实姓名：</p>
   <p class="PP2"><input type="text" name="name" datatype="s2-10" errormsg="请认真填写!" /></p>
  </li>
  <li class="TT5"><!--备注文字--></li>


  <li class="TT1">
   <p class="PP1">*一句话描述：</p>
   <p class="PP2"><input type="text" name="introduction" datatype="s4-100" errormsg="描述至少4个字符,最多100个字符！" /></p>
  </li>
  <li class="TT5">例如：十年市场营销经验，请限在10字以内。</li>


  <li class="TT6">
   <p class="PP1">*专业描述：</p>
   <p class="PP2"><textarea name="major" datatype="s4-100" errormsg="专业至少4个字符,最多100个字符！"></textarea></p>
  </li>
  <li class="TT7"><!--备注文字--></li>


  <li class="TT1">
   <p class="PP1">&nbsp; 就职单位：</p>
   <p class="PP2"><input type="text" name="company" ignore="ignore" datatype="s2-18" errormsg="公司至少2个字符,最多16个字符！" /></p>
  </li>
  <li class="TT5"><!--备注文字--></li>


  <li class="TT1">
   <p class="PP1">&nbsp; 职位：	</p>
   <p class="PP2"><input type="text" name="job" ignore="ignore" datatype="s2-18" errormsg="职位名至少2个字符,最多16个字符！" /></p>
  </li>
  <li class="TT5"><!--备注文字--></li>


  <li class="TT1">
   <p class="PP1">&nbsp;年龄：</p>
   <p class="PP2"><input type="text" name="age" ignore="ignore" datatype="n1-3" errormsg="请认真填写！" /></p>
  </li>
  <li class="TT5"><!--备注文字--></li>


  <li class="TT1">
   <p class="PP1">&nbsp; 手机：	</p>
   <p class="PP2"><input type="text" name="tel" ignore="ignore" datatype="m" errormsg="请填写正确手机号！" /></p>
  </li>
  <li class="TT5"><!--备注文字--></li>


  <li class="TT1">
   <p class="PP1">&nbsp;  QQ：	</p>
   <p class="PP2"><input type="text" name="qq" ignore="ignore" datatype="n5-12" errormsg="请填写正确QQ号！" /></p>
  </li>
  <li class="TT5"><!--备注文字--></li>


  <li class="TT2">
   <input type="submit" value="提交" class="BtnJiao" />
  </li>
  <li class="TT4">登录后，您可进入个人空间在个人资料中上传头像、修改资料。</li>
 </ul> 
</form>
</div>

