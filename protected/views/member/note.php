﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

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
  <li><a href="experience-list.htm">经验专栏</a></li>

 
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

<div class="InTitle"><h1>会员空间</h1></div>

<div class="MenberContent">
 <div class="MenberInfo">
  <div class="Lefts"><img src="Images/Tou.png" /></div>
  <div class="Rights">
   <ul class="MenberInfoText">
    <li class="TT1">
     <p class="PP1"><span>高级会员</span> 袁荣</p>
     <p class="PP2">
      <a href="#"><img src="images/T1.png" /></a><a href="#"><img src="images/T2.png" /></a>
     </p>
    </li>
    <li class="TT2">积分:500 <a href="#">查看积分规则</a></li>
    <li class="TT3">
     <a href="#">TA的资料</a>
     <a href="#">TA的主页</a>
     <a href="#">给TA留言</a> 
    </li>
   </ul>
  </div>
 </div>

 
 <ul class="MenberEditTitle2">  
  <li class="TT1"><a href="###">给TA留言</a></li> 
 </ul>

 <ul class="MenberMessEdit">
  <li class="TT1"><textarea></textarea></li>
  <li class="TT2"> 
   <input type="button" value="提交留言" class="btnTxt" />
  </li>
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