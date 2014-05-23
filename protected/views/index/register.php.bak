<script type="text/javascript" charset="utf-8" src="<?php echo Yii::app()->request->baseUrl; ?>/js/Validform_v5.3.2_min.js"></script>

<script>
$(document).ready(function(){
  $(".regForm1").Validform({
    tiptype:3,
  });

    $(".regForm2").Validform({
    tiptype:3,
  });
})

</script>
<style>
#Validform_msg{display: none;}
.submit{background:#C8000D;color:#FFF;border:none;width:70px;}
 table{border-spacing:10px;}
 table tr{border:#EFEFEF 1px solid;}
 input{width:300px;}
 .Validform_wrong{color:red;}
 .Validform_right{color:green;}
 #message{color:red;font-size:18px;}
</style>
<div class="mainPanel">
    
<?php if(Yii::app()->user->hasFlash('info')):?> 
<div id="message">
<?php echo Yii::app()->user->getFlash('info'); ?> 
</div>
<?php endif; ?>
<div class="InTitle"><h1>一般会员注册（原提问者）</h1></div>
<div class="MenberContent" id="contentWrapper">
<form class="regForm1" action="<?php echo Yii::app()->createUrl('index/register')?>" method="post">
<table>
<tr><td colspan="2" class="info1"><input type="hidden" name="level" value="1" /></td></tr>
<tr><td>*用户名：</td><td><input type="text" name="username" datatype="s4-18" errormsg="用户名至少4个字符,最多16个字符！" /></td><td class="Validform_checktip"></td></tr>
<tr><td>*邮  箱：</td><td><input type="text" name="email"  datatype="e" errormsg="请输入正确的邮箱!"/></td><td class="Validform_checktip"></td></tr>
<tr><td>*密  码：</td><td><input type="password" name="password" datatype="s6-18" errormsg="密码至少6个字符,最多16个字符！"/></td><td class="Validform_checktip"></td></tr>
<tr><td>*重复密码：</td><td><input type="password" datatype="*" recheck="password" errormsg="两次密码不一致！"/></td><td class="Validform_checktip"></td></tr>
<tr><td></td><td><input type="submit" value="注册" class="formSubmit1 submit"/></td><td class="Validform_checktip"></td></tr>
</table> 
</form>
 <div class="MenberLoginWText">
  你现在只是<span>一般会员</span>，可以<span>提问，评论，购买课程</span>。<br/>
  进一步完善资料，成为高级学员。<br/>
  成为<span>高级会员</span>，你可以通过解答问题，获得积分，还可以用积分直接购买课程。<br/>
 </div>
 
 <div class="InTitle"><h1>高级会员注册（原解惑者）</h1></div>
<form class="regForm2" action="<?php echo Yii::app()->createUrl('index/register')?>" method="post">
<table>
    <tr><td colspan="2" class="info1"><input type="hidden" name="level" value="2" /></td></tr>
<tr><td>*用户名：</td><td><input type="text" name="username" datatype="s4-18" errormsg="用户名至少4个字符,最多16个字符！" /></td><td class="Validform_checktip"></td></tr>
<tr><td>*邮  箱：</td><td><input type="text" name="email"  datatype="e" errormsg="请输入正确的邮箱!"/></td><td class="Validform_checktip"></td></tr>
<tr><td>*密  码：</td><td><input type="password" name="password" datatype="s6-18" errormsg="密码至少6个字符,最多16个字符！"/></td><td class="Validform_checktip"></td></tr>
<tr><td>*重复密码：</td><td><input type="password" datatype="*" recheck="password" errormsg="两次密码不一致！"/></td><td class="Validform_checktip"></td></tr>
<tr><td>*真名姓名：</td><td><input type="text" name="name" datatype="s2-10" errormsg="请认真填写!" /></td><td class="Validform_checktip"></td></tr>
<tr><td>*一句话描述：</td><td><input type="text" name="introduction" datatype="s4-100" errormsg="描述至少4个字符,最多100个字符！" /></td><td class="Validform_checktip"></td></tr>
<tr><td>专业：</td><td><input type="text" name="major" ignore="ignore" datatype="s4-18" errormsg="专业至少4个字符,最多16个字符！" /></td><td class="Validform_checktip"></td></tr>
<tr><td>就职公司：</td><td><input type="text" name="company" ignore="ignore" datatype="s2-18" errormsg="公司至少2个字符,最多16个字符！" /></td class="Validform_checktip"><td></td></tr>
<tr><td>职位：</td><td><input type="text" name="job" ignore="ignore" datatype="s2-18" errormsg="职位名至少2个字符,最多16个字符！" /></td><td class="Validform_checktip"></td></tr>
<tr><td>年龄：</td><td><input type="text" name="age" ignore="ignore" datatype="n1-3" errormsg="请认真填写！" /></td><td class="Validform_checktip"></td></tr>
<tr><td>手机：</td><td><input type="text" name="tel" ignore="ignore" datatype="m" errormsg="请填写正确手机号！" /></td><td class="Validform_checktip"></td></tr>
<tr><td>QQ：</td><td><input type="text" name="qq" ignore="ignore" datatype="n5-12" errormsg="请填写正确QQ号！" /></td><td class="Validform_checktip"></td></tr>
<tr><td>MSN：</td><td><input type="text" name="msn" ignore="ignore" datatype="s5-12" errormsg="请填写正确MSN号！" /></td><td class="Validform_checktip"></td></tr>
<tr><td></td><td><input type="submit" value="注册" class="submit"/></td><td></td></tr>
<tr><td colspan="2">登录后，您可进入个人空间在个人资料中上传头像、修改资料。</td></tr>
</table> 
</form>
</div>
</div>