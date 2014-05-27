<div class="InTitle"><h1>经验专栏</h1></div>

 <div class="mainPanel">
 <div class="experienceTopModule">
  <div class="left">
  <img src="<?php echo Yii::app()->request->baseUrl.'/'?>images/experience_cover.jpg" />
  </div>
  <div class="right">
   <div class="wrap">
   <h2>欢迎投稿</h2>
   <div class="con">你的投稿若被登录，将获得积分。<br />
     积分可以用来购买课程。<br />
     不过只有高级会员才能投稿。<br />
     <a href="#" class="ft_line">去升级会员？</a></div>
   </div>
  </div>
 </div>
  <ul class="experienceList">
  <?php foreach($experienceList as $v){?>
  <li>
    <h3><?php echo $v->title?></h3>
    <div class="cont clearfix">
     <div class="photo"> <img src="<?php echo Yii::app()->request->baseUrl.'/'.$v->user->thumb?>" /></div>
      <div class="author"><em><a href="#"><?php echo $v->user->username?></a></em>  <span>发表于 <?php echo date('Y-m-d H:m:s', strtotime($v->addtime)) ?> </span>       </div>
      <div class="detail">
      <?php echo Helper::truncate_utf8_string($v->content, 100)?><a href="<?php echo Yii::app()->createUrl('experience/detail',array('id'=>$v->id))?>">查看更多</a></div>    
    </div>
    <div class="interaction">
    <span class="i1"><a href="javascript:;" value="<?php echo $v->id?>" type="experience" class="zhixuanAgree">有启发 (<span><?php echo $v->agree ?></span>)</a></span>
    </div>
  </li>
  <?php }?>
   

    <?php
    $this->widget('CLinkPager', array(
        'header' => '',
        'firstPageLabel' => '首页',
        'lastPageLabel' => '末页',
        'prevPageLabel' => '上一页',
        'nextPageLabel' => '下一页',
        'pages' => $pages,
        'maxButtonCount' => 6,
        'htmlOptions' => array('class' => 'list-page Pages'),
            )
    );
    ?>
 </div>
