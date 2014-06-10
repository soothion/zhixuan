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

<div class="memberContent" id="contentWrapper">
 <?php $this->widget('MemberWidget');?>

 <ul class="memberTabs clearfix"> 
  <li><a href="###">用户留言（<?php echo count($note);?>）</a></li>
  <?php if(Yii::app()->user->id==$_GET['id']){?><li><a href="###">系统消息（<?php echo count($system);?>） </a></li> <?php }?>
 </ul>
  

                            
 <div class="memberWrap dd">
 <ul class="commentListing">
     <?php
     if(!$note) echo '暂无信息';else
     foreach($note as $v){?>
    <li>
        <div class="userPhoto"><img src="<?php echo Yii::app()->baseUrl.'/'.$v->from->thumb?>" /></div>
    <div class="comment clearfix">
        <p class="userInfo"><a href="<?php echo Yii::app()->createUrl('member/index',array('id'=>$v->from->id))?>"><span><?php echo $v->from->username?></span></a>提交于<?php echo date('Y-m-d H:m:s',  strtotime($v->addtime));?>       </p>
     <div class="con"><span class="PP2"><?php echo $v->content;?></span></div>
     <div class="ctrl"><a href="javascript:;"><span class="read"><?php echo $v->read?'已读':'未读'?></span></a><a href="javascript:;" class="del">删除</a></div>
    </div>
    </li>
     <?php }?>
    </ul>
  </div>
<?php if(Yii::app()->user->id==$_GET['id']){?>
 <div class="memberWrap dd">
 <ul class="commentListing">
     <?php 
     if(!$note) echo '暂无信息';else
     foreach($system as $v){?>
    <li>
    <div class="userPhoto"><img src="<?php echo Yii::app()->baseUrl.'/'.$v->from->thumb?>" /></div>
    <div class="comment clearfix">
        <p class="userInfo"><a href="javascript:;"><span><?php echo $v->from->username?></span></a>提交于<?php echo date('Y-m-d H:m:s',  strtotime($v->addtime));?>       </p>
     <div class="con"><span class="PP2"><?php echo $v->content;?></span></div>
     <div class="ctrl"><a href="javascript:;"><span class="read"><?php echo $v->read?'已读':'未读'?></span></a><a href="javascript:;" class="del">删除</a></div>
    </div>
    </li>
     <?php }?>
    </ul>
  </div>
<?php }?>
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
