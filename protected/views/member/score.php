<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
    <script src="js/jquery-1.4.4.min.js" type="text/javascript"></script>
    <script src="js/thickbox.js" type="text/javascript"></script>
    <link href="style/global.css" rel="stylesheet" type="text/css" />
    <link href="style/member.css" rel="stylesheet" type="text/css" />
    <link href="style/thickbox.css" rel="stylesheet" type="text/css" />
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

<div class="MenberContent" id="contentWrapper">
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
    <li class="TT2">积分:500 <a href="#TB_inline?height=300&width=500&inlineId=score_detail" title="积分规则" class="thickbox">查看积分规则</a></li>
    <div id="score_detial">
     

    </div>
    <li class="TT3">
     <a href="#">我的资料</a>
     <a href="#">我的积分</a>
     <a href="#">我的主页</a>
     <a href="#">消息(1)</a>
    </li>
   </ul>
  </div>
 </div>

 <ul class="MenberEditTitle"> 
  <li>我的积分</li>
 </ul>

 <div class="IntegralMoney">积分余额:500</div>
 <ul class="IntegralList clearfix">
  <li class="TT2">新增积分:200</li>
  <li class="TT1">
   <p class="PP1">2013 4 20</p>
   <p class="PP2">发布评论</p>
   <p class="PP3">＋5</p>
   <p class="PP4"><a href="#">查看详情</a></p>
  </li>
  <li class="TT1">
   <p class="PP1">2013 4 20</p>
   <p class="PP2">发布经验</p>
   <p class="PP3">＋20</p>
   <p class="PP4"><a href="#">查看详情</a></p>
  </li>
  <li class="TT1">
   <p class="PP1">2013 4 20</p>
   <p class="PP2">解答困惑</p>
   <p class="PP3">＋10</p>
   <p class="PP4"><a href="#">查看详情</a></p>
  </li>
  </ul>

 <ul class="IntegralList clearfix">
  <li class="TT2">使用积分:200</li>
  <li class="TT1">
   <p class="PP1">2013 4 20</p>
   <p class="PP2">观看课程 商铺选址</p>
   <p class="PP3">-200</p>
   <p class="PP4"><a href="#">查看详情</a></p>
  </li> 
  <li class="TT1">
   <p class="PP1">2013 4 2１</p>
   <p class="PP2">观看课程 商铺选址</p>
   <p class="PP3">-200</p>
   <p class="PP4"><a href="#">查看详情</a></p>
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
<div id="score_detail" style="display:none;">
 <table width="480" border="0" cellspacing="4" cellpadding="8">
  <tr>
    <td><span >发布评论</span></td>
    <td>+5</td>
  </tr>
  <tr>
    <td><span >发布经验</span></td>
    <td>+20</td>
  </tr>
  <tr>
    <td><span class="PP2">解答困惑</span></td>
    <td>+100</td>
  </tr>
</table>
</div>
</body>
</html>
