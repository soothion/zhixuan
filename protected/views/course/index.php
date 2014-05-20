<div class="InTitle"><h1>创业课程</h1></div>
<div class="IndexContent" id="contentWrapper">
 <div class="mainPanel">
   <div class="courseCommended">
<div class="courseCover"><img src="<?php echo $recommendCourse->pic;?>" width="642" height="296" /></div>
  <div class="intro"> <h3><a href="<?php echo Yii::app()->createUrl('course/detail',array('id'=>$recommendCourse->id))?>"><?php echo $recommendCourse->title?></a></h3>
   <div class="desp"><?php echo $recommendCourse->des;?></div>
   <div class="voteCtrl">有启发(<?php echo $recommendCourse->agree;?>)</div>
  </div>
  </div>
  <ul class="courseNav">
   <li class="TT1"><span>所有课程(<?php echo $courseCount?>)</span></li>
   <li class="TT2">分类：
       <?php foreach($type as $v){
       echo '<a href="'.Yii::app()->createUrl('course', array('filter'=>$v->id.'-'.$filter[1])).'">'.$v->title.'</a> ';
         }?></li>
   <li class="TT2">标签：</li>
  </ul>
  <ul class="courseListing">
      <?php foreach($courseList as $k=>$v){?>
   <li class="<?php if(!($k%2==0)) echo 'br';?>">
       <div class="courseCover"><a href="<?php echo Yii::app()->createUrl('course/detail',array('id'=>$v->id))?>"><img src="<?php echo $v->pic?>" /></a></div>
    <div class="intro">
    <span class="isFree"><?php echo ($v->free)==1?'免费':'收费';?></span> <h3><a href="<?php echo Yii::app()->createUrl('course/detail',array('id'=>$v->id))?>"><?php echo $v->title?></a></h3>     
    </div>
    <div class="voteCtrl">有启发(<?php echo $v->agree?>)</div>
   </li>
      <?php }?>
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
 <div class="experienceModule block">
  <h2><a href="index.htm">经验专栏</a></h2>
   <ul class="experienceListing">
   <li><a href="experience-detail.htm">做SEO的技巧......</a></li>
   <li><a href="experience-detail.htm">做SEO的技巧......</a></li>
   <li><a href="experience-detail.htm">做SEO的技巧......</a></li>
   <li><a href="experience-detail.htm">做SEO的技巧......</a></li>
   <li><a href="experience-detail.htm">做SEO的技巧......</a></li>
  </ul>
 </div>

  <div class="adBlock">
    <a href="#"><img src="images/GImages.png" /></a>
  </div> 
 </div>
</div>
