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

<div class="MenberContent">
 <div class="MenberInfo">
  <div class="Lefts"><img src="Images/Tou.png" /></div>
  <div class="Rights">
   <ul class="MenberInfoText">
    <li class="TT1">
     <p class="PP1"><span>高级会员</span> 袁荣</p>
     <p class="PP2">
      <a href="#"><img src="images/T1.png" /></a><a href="#"><img src="images/T2.png" /></a>     </p>
    </li>
    <li class="TT2">积分:500 <a href="#TB_inline?height=300&amp;width=500&amp;inlineId=score_detail" title="积分规则" class="thickbox">查看积分规则</a></li>
    <li class="TT3">
     <a href="#">我的资料</a>
     <a href="#">我的积分</a>
     <a href="#">我的主页</a>
     <a href="#" class="AA">消息(1)</a>    </li>
   </ul>
  </div>
 </div>

 <ul class="memberTabs MenberEditTitle2 clearfix"> 
  <li><a href="###" class="current">用户留言（3）</a></li>
  <li><a href="###">系统消息（1） </a></li> 
 </ul>
  

                            
 <div class="memberWrap">
 <ul class="commentListing">
    <li>
    <div class="userPhoto"><img src="images/MTou.png" /></div>
    <div class="comment clearfix">
     <p class="userInfo"><a href="#"><span>金铭</span></a>  提交于  2012-08-14 12:38:30       </p>
     <div class="con"><span class="PP2">非常感谢你的回答，我明白了。</span></div>
    <div class="ctrl"><a href="#"><span>已读</span></a><a href="#">删除</a></div>
    </div>
    </li>
       <li>
    <div class="userPhoto"><img src="images/MTou.png" /></div>
    <div class="comment clearfix">
     <p class="userInfo"><a href="#"><span>金铭</span></a>  提交于  2012-08-14 12:38:30       </p>
     <div class="con">
      去LBS听上去LBS听上去LBS听上去LB去LBS听上去LBS听上去LBS听上去LB去LBS听上去LBS听上去LBS听上去LB 
     去LBS听上去LBS听上去LBS听上去LB去LBS听上去LBSL</div>
     <div class="ctrl"><a href="#"><span class="tick">已读</span></a><a href="#">删除</a></div>
    </div>
    </li>
    </ul>
  </div>
 <ul class="memberTabs MenberEditTitle2">
   <li><a href="#">用户留言（3）</a></li>
   <li><a href="#"  class="current">系统消息（1） </a></li>
 </ul>
 <div class="memberWrap">
     <ul class="commentListing">
     　<li>
    <div class="userPhoto"><img src="images/MTou.png" /></div>
    <div class="comment clearfix">
     <p class="userInfo">管理员<a href="#"><span></span></a> 提交于  2012-08-14 12:38:30      </p>
     <div class="con"><span class="PP2">您的问题已经解决，别忘了点个赞哦。</span></div>
    <div class="ctrl"><a href="#"><span>已读</span></a><a href="#">删除</a></div>
    </div>
    </li>
     </ul>
  
 </div> 

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
