<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/member.css" />
<script>
    $(function(){
            var tabTitle = ".memberTabs li";
            var tabContent = ".dd";
            $(tabTitle + ":first").addClass("current");
            $(tabContent).not(":first").hide();
            $(tabTitle).unbind("click").bind("click", function(){
            $(this).siblings("li").removeClass("current").end().addClass("current");
            var index = $(tabTitle).index( $(this) );
            $(tabContent).eq(index).siblings(tabContent).hide().end().fadeIn(0);
            });
    });
</script>
<div class="InTitle"><h1>会员空间</h1></div>

<div class="memberContentWrapper">
    <?php $this->widget('MemberWidget');?>

    <ul class="memberTabs MenberEditTitle2"> 
        <li><a href="###">我购买的课程(<?php echo count($order)?>)</a></li>
        <li><a href="###">我的问题(<?php echo count($ask)?>) </a></li>
        <li><a href="###">我的解惑(<?php echo count($answer)?>)</a></li>
        <li><a href="###">我的投稿(<?php echo count($experience)?>)</a></li>
        <li><a href="###">我的收藏(<?php echo count($love)?>)</a></li>
    </ul>
    <div class="userConWrap dd">
        <table width="600" border="0" cellspacing="0" cellpadding="0" class="commTable courseList">
            <?php 
            if(!$order) echo '暂无信息';else
            foreach($order as $v){?>
            <tr>
                <td class="date"><?php echo date('Y-m-d',  strtotime($v->addtime))?></td>
                <td class="tit"><?php echo $v->course->title?></td>
                <td class="payInfo">支付：<?php echo $v->price;if($v->model==1) echo '元';else echo '积分';?></td>
                <td class="status"><?php if($v->type==1) echo '普通购买';if($v->type==2) echo '优先传播课程购买'?></td>
            </tr>
            <?php }?>
        </table>
    </div>
    
    <div class="userConWrap u1 dd" >
     <ol>
         <?php 
         if(!$ask) echo '暂无信息';else
         foreach($ask as $v){?>
     <li><h3><a href="<?php echo Yii::app()->createUrl('ask/detail',array('id'=>$v->id));?>"><?php echo $v->content?></a></h3>
         <div class="date"> <?php echo date('Y-m-d H:m',  strtotime($v->addtime))?></div>  
     </li>
    <?php }?>
     </ol>
   </div>
    
    <div class="userConWrap u1 dd" >
     <ol>
         <?php
         if(!$answer) echo '暂无信息';else
         foreach($answer as $v){?>
         <li><h3><a href="<?php echo Yii::app()->createUrl('ask/detail',array('id'=>$v->aid));?>"><?php echo Helper::truncate_utf8_string($v->ask->content, 20)?></a></h3>
         <div class="date"> <?php echo date('Y-m-d H:m',  strtotime($v->addtime))?></div>  
     </li>
    <?php }?>
     </ol>
   </div>
    

    
    <div class="userConWrap u1 dd" >
     <ol>
         <?php 
         if(!$experience) echo '暂无信息';else
         foreach($experience as $v){?>
     <li><h3><a href="<?php echo Yii::app()->createUrl('experience/detail',array('id'=>$v->id));?>"><?php echo $v->title?></a></h3>
         <div class="date"> <?php echo date('Y-m-d H:m',  strtotime($v->addtime))?></div>  
     </li>
    <?php }?>
     </ol>
   </div>
    
     <div class="userConWrap u1 dd" >
     <ol>
         <?php 
         if(!$love) echo '暂无信息';else
         foreach($love as $v){?>
         <li><h3>
             <?php if($v->aid){?><a href="<?php echo Yii::app()->createUrl('ask/detail',array('id'=>$v->aid))?>"><?php echo Helper::truncate_utf8_string($v->ask->content, 20)?></a><?php }?>
             <?php if($v->cid){?><a href="<?php echo Yii::app()->createUrl('course/detail',array('id'=>$v->cid))?>"><?php echo Helper::truncate_utf8_string($v->course->title, 20)?></a><?php }?>
             <?php if($v->eid){?><a href="<?php echo Yii::app()->createUrl('ask/detail',array('id'=>$v->eid))?>"><?php echo Helper::truncate_utf8_string($v->experience->title, 20)?></a><?php }?>
             </h3>
         <div class="date"><?php echo date('Y-m-d H:m',  strtotime($v->addtime))?></div>  
     </li>
    <?php }?>
     </ol>
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

