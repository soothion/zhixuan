    <?php foreach ($comment as $v) {?>
 <li class="clearfix">
     <div class="userPhoto"><img src="<?php echo $v->user->thumb?$v->user->thumb:'upload/noThumb.jpg'?>" width="40px" height="40px"/></div>
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