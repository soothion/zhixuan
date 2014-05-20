<div class="IndexContent" id="contentWrapper">
<div class="InTitleInfo"> 
 <p class="skipNav">
     <a href="<?php if($prev) echo Yii::app()->createUrl('course/detail', array('id'=>$prev->id))?>"><img src="images/WLeft.png" /></a>
  <a href="<?php echo Yii::app()->createUrl('course/detail', array('id'=>$course->id))?>"><img src="images/WCenter.png" /></a>
  <a href="<?php if($next) echo Yii::app()->createUrl('course/detail', array('id'=>$next->id))?>"><img src="images/WRightr.png" /></a>
 </p> <h1><?php echo $course->title?></h1>

</div>
 <div class="mainPanel">
     <div class="videoWindow"><img src="<?php echo $course->pic?>" width="642px" /></div>
   <div class="videoIntro">
    <div class="overview">
     <p class="PP1">
      <span>时长：<?php echo $course->time;?></span>   <span>分类：<?php echo $course->type->title;?></span>    <span>标签：<?php echo $course->tag?></span>     </p>
     <p class="PP3">
      <a href="#"><img src="images/GG1.png" /></a>
      <a href="#"><img src="images/GG2.png" /></a>     </p>
     <p class="PP2">分享：</p>
    </div>
    <div class="desp">
     <?php echo $course->des?> 
    </div>
    <div class="interaction">
     <span class="SP1"><a href="#">有启发(<?php echo $course->agree?>)</a></span>
     <span class="SP2"><a href="#">收藏(28)</a></span>    </div>
   </div>
   
   <div class="courseDiscus">
    <h3>本课讨论主题：<?php echo $course->theme;?></h3>
    <div class="overview">
     <p class="PP1">已有98名用户发表观点</p>
     <p class="PP2"><a href="#">点击查看</a>观点也有价值，只有付费用户才能查看。</p>
    </div>
   </div>
<div class="replyBoard">
 <h3 >发表观点</h3>
 <form action="" method="post" id="comment-form">
 <p class="txtArea"><textarea name="content"></textarea></p>
 <p class="ctrl"> 
  <span class="comment-msg"></span><input type="button" class="btnGuan" value="提交观点" />
 </p>
 </form>
</div>
<ul class="commentListing"></ul>
<script>
$(document).ready(function(){
    $.get("<?php echo Yii::app()->createUrl('course/comment', array('id'=>$course->id))?>",function(result){
        $('.commentListing').html(result);
    });
    $('.btnGuan').click(function(){
         $.ajax({  
                "type":"POST",  
                "url":"<?php echo Yii::app()->createUrl('course/comment', array('id'=>$course->id))?>",  
                "data":$("#comment-form").serialize(),  
                "success":function(data){$(".commentListing").html(data);},  
                });  
    })
    $('.list-page a').live('click',function(){
            $.ajax({  
                    "type":"get",  
                    "url":$(this).attr('href'),  
                    "success":function(data){$(".commentListing").html(data);},  
                   });  
            return false;       
    })
})
</script>
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
