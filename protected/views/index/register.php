<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
    <link href="style/global.css" rel="stylesheet" type="text/css" />
    <link href="style/member.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="header">
<div class="wrapper">
 <div class="logo"><a href="index.htm"><img src="images/Logo.png" /> </a> <img src="images/slogan.png" class="slogan"/>
 </div>
 <ul class="globalNav">
  <li><a href="course.htm">创业课程</a></li>
  <li><a href="ask-list.htm">有问必答</a></li>
  <li><a href="experience-detail.htm">经验专栏</a></li>

 
 </ul>
 <div class="searchBar">
     <p class="searchType" onclick="OnClickDownMuen()">
     <label id="DownText">课程</label> 
   </p>
   <p class="keyword"><input type="text" /></p>
   <p class="btnSearch"><input name="" type="image" src="images/Seach.png" /></p> 
   
   <div class="dropdown" id="MuenNavDown" style=" display:none">
   <p class="dropMenu" onclick="OnClickDownMuenText('课程')"><a href="#">课程</a></p>
   <p class="dropMenu" onclick="OnClickDownMuenText('问题')"><a href="#">问题</a></p>
   <p class="dropMenu" onclick="OnClickDownMuenText('专栏')"><a href="#">专栏</a></p>
  </div>
 </div>
 <script type="text/javascript">
     function OnClickDownMuen() {
         if (document.getElementById("MuenNavDown").style.display == "none") {
             document.getElementById("MuenNavDown").style.display = ""
         }
         else {
             document.getElementById("MuenNavDown").style.display = "none"
         }
     }
     function OnClickDownMuenText(Tages) {
         document.getElementById("DownText").innerHTML = Tages;
         document.getElementById("MuenNavDown").style.display = "none"
     }
 </script>
 </div>
</div>

<div class="InTitle"><h1>一般会员注册（原提问者）</h1></div>

<div class="MenberContent" id="contentWrapper">
 <ul class="MenberLoginWrite">
  <li class="TT1">
   <p class="PP1">*用户名：</p>
   <p class="PP2"><input type="text" /></p> 
  </li>
  <li class="TT5"><!--备注文字--></li>

  <li class="TT1">
   <p class="PP1">*邮箱：</p>
   <p class="PP2"><input type="text" /></p>
  </li>
  <li class="TT5"><!--备注文字--></li>

  <li class="TT1">
   <p class="PP1">*密码：</p>
   <p class="PP2"><input type="password" /></p>
  </li>
  <li class="TT5"><!--备注文字--></li>
   
  <li class="TT1">
   <p class="PP1">*确认密码：</p>
   <p class="PP2"><input type="password" /></p>
  </li>
  <li class="TT5"><!--备注文字--></li>


  <li class="TT2"> 
   <input type="button" value="提交" class="BtnJiao" />
  </li>
  <li class="TT3"><a href="#">已注册用户？ 立即登录>></a></li>
 </ul>   

 <div class="MenberLoginWText">
  你现在只是<span>一般会员</span>，可以<span>提问，评论，购买课程</span>。<br/>
  进一步完善资料，成为高级学员。<br/>
  成为<span>高级会员</span>，你可以通过解答问题，获得积分，还可以用积分直接购买课程。<br/>
 </div>
 
 <div class="InTitle"><h1>高级会员注册（原解惑者）</h1></div>


 <ul class="MenberLoginWrite">
  <li class="TT1">
   <p class="PP1">*用户名：</p>
   <p class="PP2"><input type="text" /></p>
  </li>
  <li class="TT5"><!--备注文字--></li>


  <li class="TT1">
   <p class="PP1">*邮箱：</p>
   <p class="PP2"><input type="text" /></p>
  </li>
  <li class="TT5"><!--备注文字--></li>


  <li class="TT1">
   <p class="PP1">*密码：</p>
   <p class="PP2"><input type="password" /></p>
  </li>
  <li class="TT5"><!--备注文字--></li>


  <li class="TT1">
   <p class="PP1">*确认密码：</p>
   <p class="PP2"><input type="password" /></p>
  </li>
  <li class="TT5"><!--备注文字--></li>


  <li class="TT1">
   <p class="PP1">&nbsp;真实姓名：</p>
   <p class="PP2"><input type="text" /></p>
  </li>
  <li class="TT5"><!--备注文字--></li>


  <li class="TT1">
   <p class="PP1">*一句话描述：</p>
   <p class="PP2"><input type="text" /></p>
  </li>
  <li class="TT5">例如：十年市场营销经验，请限在10字以内。</li>


  <li class="TT6">
   <p class="PP1">*专业描述：</p>
   <p class="PP2"><textarea></textarea></p>
  </li>
  <li class="TT7"><!--备注文字--></li>


  <li class="TT1">
   <p class="PP1">&nbsp; 就职单位：</p>
   <p class="PP2"><input type="text" /></p>
  </li>
  <li class="TT5"><!--备注文字--></li>


  <li class="TT1">
   <p class="PP1">&nbsp; 职位：	</p>
   <p class="PP2"><input type="text" /></p>
  </li>
  <li class="TT5"><!--备注文字--></li>


  <li class="TT1">
   <p class="PP1">&nbsp;年龄：</p>
   <p class="PP2"><input type="text" /></p>
  </li>
  <li class="TT5"><!--备注文字--></li>


  <li class="TT1">
   <p class="PP1">&nbsp; 手机：	</p>
   <p class="PP2"><input type="text" /></p>
  </li>
  <li class="TT5"><!--备注文字--></li>


  <li class="TT1">
   <p class="PP1">&nbsp;  QQ：	</p>
   <p class="PP2"><input type="text" /></p>
  </li>
  <li class="TT5"><!--备注文字--></li>


  <li class="TT2">
   <input type="button" value="提交" class="BtnJiao" />
  </li>
  <li class="TT4">登录后，您可进入个人空间在个人资料中上传头像、修改资料。</li>
 </ul> 


</div>


<div class="ClearFoot2">&nbsp;</div>
<div id="footer">
 <div class="wrapper">
 
  <p class="botNav">
   <a href="#">关于智选</a><a href="#">使用帮助</a><a href="#">意见反馈</a><a href="#">加入我们</a>
  </p>
  <p class="copyright">沪ICP备11022737</p>

</div>
</div> 
</body>
</html>
