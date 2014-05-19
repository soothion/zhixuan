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

<div class="InTitle">袁荣－正在购买的课程</div>

<div class="MenberContent">
 <ul class="PaymentInfo2">
  <li class="TT1"><p>请选择一种支付方式</p></li>
  <li class="TT2">
    <p class="PP1"><input type="checkbox" /></p>
    <p class="PP2">现金支付</p>
  </li>
  <li class="TT3">
   <p class="PP1">金额</p>
   <p class="PP2">35元</p>
   <p class="PP3"><a href="#">支付宝支付</a></p> 
   <p class="PP4">即将进入支付宝页面</p>
  </li>
  <li class="TT4">
   <p class="PP1">或</p>
   <p class="PP2"><input type="checkbox" /></p>
   <p class="PP3">积分支付</p>
  </li>

  <li class="TT5">
   <p class="PP1">积分</p>
   <p class="PP2">100分</p>
   <p class="PP3"><a href="#">积分支付</a></p> 
   <p class="PP4">点击将立即扣除积分</p>
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
