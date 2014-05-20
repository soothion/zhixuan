<div class="InTitle"><h1>创业课程</h1></div>

<div class="IndexContent" id="contentWrapper">
 <div class="mainPanel">
  <div class="courseModule">
  <div class="courseCommended">
  <div class="courseCover"><img src="<?php echo $recommendCourse->pic;?>" width="642" height="296" /></div>
  <div class="intro"> <h3><a href="<?php echo Yii::app()->createUrl('course/detail',array('id'=>$recommendCourse->id))?>"><?php echo $recommendCourse->title?></a></h3>
   <div class="desp"><?php echo $recommendCourse->des;?></div>
   <div class="voteCtrl">有启发(<?php echo $recommendCourse->agree;?>)</div>
  </div>
  </div>
  <ul class="courseListing">
   <li>
    <div class="courseCover"><a href="<?php echo Yii::app()->createUrl('course/detail',array('id'=>$freeCourse[0]->id))?>"><img src="<?php echo $freeCourse[0]->pic;?>" /></a></div>
    <div class="intro">
    <span class="isFree">免费</span> <h3><a href="<?php echo Yii::app()->createUrl('course/detail',array('id'=>$freeCourse[0]->id))?>"><?php echo $freeCourse[0]->title;?></a></h3>     
    </div>
    <div class="voteCtrl">有启发(<?php echo $freeCourse[0]->agree;?>)</div>
    </li>
    <li class="br">
    <div class="courseCover"><a href="<?php echo Yii::app()->createUrl('course/detail',array('id'=>$freeCourse[1]->id))?>"><img src="<?php echo $freeCourse[1]->pic;?>" /></a></div>
    <div class="intro">
    <span class="isFree">免费</span> <h3><a href="<?php echo Yii::app()->createUrl('course/detail',array('id'=>$freeCourse[1]->id))?>"><?php echo $freeCourse[1]->title;?></a></h3>     
    </div>
    <div class="voteCtrl">有启发(<?php echo $freeCourse[1]->agree;?>)</div>
   </li>
  </ul> <div class="clear"></div>
  </div>
  <div class="qaModule"> 
    <div class="head">
      <h2 class="fl">有问必答<span>已解答(1002)</span></h2>
      <a href="#" class="btnComm fr">向智课堂提问      </a>
      
      </div>
  


  <ul class="questListing">
<?php foreach($ask as $v){?>
   <li>
    <h3><a href="<?php echo Yii::app()->createUrl('ask/detail',array('id'=>$v->id))?>"><?php echo Helper::truncate_utf8_string($v->content,32);?></a></h3>
    <p class="intro">
     <span><?php echo $v->user->username;?></span> 发布于 <?php echo date('Y-m-d H:m:s',strtotime($v->addtime));?>  分类：<span><?php echo $v->type->title;?></span>  标签：<span><?php echo $v->tag;?></span>   评论 (<?php echo count($v->comment);?>)     
    </p> 
   </li>
<?php }?>  
  </ul>


      <div class="InbtnProblemDiv"><a href="<?php echo Yii::app()->createUrl('ask')?>">更多</a></div>
  </div>
 </div>
 <div class="sideBar">
  <div class="adBlock"><img src="images/corese_ad.png" width="308" height="270" /></div>
   
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
 <div class="CourseLoginInfo" id="MenberInfos" style=" display:none">
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

 


