<?php if(!$comment) exit('暂无人发表评论');?>  
    <?php foreach ($comment as $v) {?>
 <li class="clearfix">
     <div class="userPhoto"><a href="<?php echo Yii::app()->createUrl('member/info', array('id' => $v->user->id)) ?>"><img src="<?php echo  Yii::app()->request->baseUrl.'/'.$v->user->thumb?>" width="40px" height="40px"/></a></div>
 <div class="comment clearfix">
     <p class="userInfo"><span><?php echo $v->user->username?></span>  发表于  <?php echo date('Y-m-d H:m:s',  strtotime($v->addtime));?>       </p>
  <p class="con">
   <?php echo $v->content?> 
  </p>
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
        'maxButtonCount' => 13,
        'htmlOptions' => array('class' => 'list-page'),
            )
    );
?>