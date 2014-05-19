<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
    <link href="style/global.css" rel="stylesheet" type="text/css" />
    <link href="style/component.css" rel="stylesheet" type="text/css" />
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



<div class="IndexContent" id="contentWrapper">
<div class="InTitleInfo"> 
 <p class="skipNav">
  <a href="#"><img src="images/WLeft.png" /></a>
  <a href="#"><img src="images/WCenter.png" /></a>
  <a href="#"><img src="images/WRightr.png" /></a>
 </p> <h1>创业课程－人脉运用的十个技巧</h1>

</div>
 <div class="mainPanel">
   <div class="videoWindow"><img src="images/Pro.jpg" /></div>
   <div class="videoIntro">
    <div class="overview">
     <p class="PP1">
      <span>时长：8分钟</span>   <span>分类：创业技巧</span>    <span>标签：门面房</span>     </p>
     <p class="PP3">
      <a href="#"><img src="images/GG1.png" /></a>
      <a href="#"><img src="images/GG2.png" /></a>     </p>
     <p class="PP2">分享：</p>
    </div>
    <div class="desp">
     简介：简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介介简介简介简介简介简介简介简介简介简介介简介简介简介简介简介简介简介简    </div>
    <div class="interaction">
     <span class="SP1"><a href="#">有启发(2)</a></span>
     <span class="SP2"><a href="#">收藏(28)</a></span>    </div>
   </div>
   
   <div class="courseDiscus">
    <h3>本课讨论主题：人脉建设的要点。</h3>
    <div class="overview">
     <p class="PP1">已有98名用户发表观点</p>
     <p class="PP2"><a href="#">点击查看</a>观点也有价值，只有付费用户才能查看。</p>
    </div>
   </div>
   <div class="replyBoard">
    <h3 >发表观点</h3>
    <p class="txtArea"><textarea></textarea></p>
    <p class="ctrl"> 
     <input type="button" class="btnGuan" value="提交观点" />
    </p>
   </div>
   <ul class="commentListing">
    <li class="clearfix">
    <div class="userPhoto"><img src="images/MTou.png" /></div>
    <div class="comment clearfix">
     <p class="userInfo"><span>金铭</span>  发表于  2012-08-14 12:38:30       </p>
     <p class="con">
      去LBS听上去LBS听上去LBS听上去LB去LBS听上去LBS听上去LBS听上去LB去LBS听上去LBS听上去LBS听上去LB 
     </p>
    </div>
    </li>
       <li class="clearfix">
    <div class="userPhoto"><img src="images/MTou.png" /></div>
    <div class="comment clearfix">
     <p class="userInfo"><span>金铭</span>  发表于  2012-08-14 12:38:30       </p>
     <p class="con">
      去LBS听上去LBS听上去LBS听上去LB去LBS听上去LBS听上去LBS听上去LB去LBS听上去LBS听上去LBS听上去LB 
     </p>
    </div>
    </li>
    </ul>

   </div>
 <div class="sideBar"> 
  <ul class="CourseLogin block"  id="MenberLogins">
   <li class="TT1">用户名</li><li class="TT2"><input type="text" /></li>
   <li class="TT1">密&nbsp;&nbsp;&nbsp;&nbsp;码</li><li class="TT2"><input type="text" /></li>
   <li class="TT3">
    <a href="javascript:OnClickLogin()">登录  </a>   
    <a href="#">马上注册</a>     
    <a href="#">忘记密码？</a>
   </li>
   <li class="TT4">
    <p class="PP1">社交工具登录</p>
    <p class="PP2">
     <a href="#"><img src="images/G1.png" /></a>
     <a href="#"><img src="images/G2.png" /></a>
    </p> 
   </li>
  </ul>
  <script type="text/javascript">
      function OnClickLogin() {
          document.getElementById("MenberInfos").style.display = "";
          document.getElementById("MenberLogins").style.display = "none";
      }
  </script>
 <div class="CourseLoginInfo block" id="MenberInfos" style=" display:none">
  <div class="Lefts"><a href="#"><img src="Images/Tou.png" /></a></div>
  <div class="Rights"> 
   <ul class="CourseLoginInfoText">
    <li class="TT1">
     <p class="PP1"><span>高级会员</span> 袁荣</p> 
    </li>
    <li class="TT3">
      <a href="#"><img src="Images/TT1.png" /></a>
      <a href="#"><img src="Images/TT2.png" /></a>
    </li>
    <li class="TT2">积分:500<br/><a href="#">查看积分规则</a></li>  
   </ul>
  </div>
  <div class="Centers">
   <a href="#">我的资料</a>
     <a href="#">我的积分</a>
     <a href="#">我的主页</a>
     <a href="#">消息(1)</a>
  </div>
 </div>
  
  <div class="sideOrderModule block b1">
    <p class="tit">点播价 <span>20</span> 元</p>
    <p class="tips">购买后可在90天内无限观看</p>
    <p class="orderBtnRow"><input type="button" class="BtnGou" value="立即购买" /><span>己购人数:300人</span></p>
  </div>
  <div class="sideOrderModule block b1">
    <p class="tit">百人优先分享权<span>100</span> 元</p>
    <p class="tips ft_line">什么是优先分享权：支持智课堂 无限期分享课程收益</p>
    <p class="orderBtnRow"><input type="button" class="BtnGou" value="立即购买" /><span>己购人数:300人</span></p>
  </div>

  <div class="relationCourse block">
  <h2>相关课程<span>最近5个</span></h2>
  <ul class="relationCourseListing">
  
   <li class="TT2"><a href="course-detail.htm">做SEO的技巧......</a></li>
   <li class="TT2"><a href="course-detail.htm">做SEO的技巧......</a></li>
   <li class="TT2"><a href="course-detail.htm">做SEO的技巧......</a></li>
   <li class="TT2"><a href="course-detail.htm">做SEO的技巧......</a></li>
   <li class="TT2"><a href="course-detail.htm">做SEO的技巧......</a></li>
  </ul>
  </div>
  <div id="sideCurseRecommModule">
 <h2>推荐课程</h2>
  <ul class="courseListing">
   <li>
    <div class="courseCover"><a href="#"><a href="#"><img src="images/course_cover_thumb.jpg" /></a></div>
    <div class="intro">
    <span class="isFree">免费</span> <h3><a href="#">创业公开课：生意的本质</a></h3>     
    </div>
    <div class="voteCtrl"><a href="#">有启发(2)</a></div>
    </li>
    <li >
    <div class="courseCover"><a href="#"><img src="images/course_cover_thumb.jpg" /></a></div>
    <div class="intro">
    <span class="isFree">免费</span> <h3><a href="#">创业公开课：生意的本质</a></h3>
     
    </div>
    <div class="voteCtrl"><a href="#">有启发(2)</a></div>
   </li>
  </ul>
 </div> 
 </div>
</div>

<div class="ClearFoot">&nbsp;</div>

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
