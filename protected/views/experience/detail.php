<div class="InTitle"><h1>经验专栏</h1></div>

 <div class="mainPanel">
 <div class="experienceDetail">
   <h3><?php echo $experience->title?></h3>
    <div class="cont clearfix">
     <div class="photo"> <img src="<?php echo $experience->user->thumb?>" /></div>
      <div class="author"><em><a href="#"><?php echo $experience->user->username;?></a></em>  <span>发表于 <?php echo date('Y-m-d H:m:s', strtotime($experience->addtime)) ?></span>       </div>
      <div class="detail">
          <?php echo $experience->content?>
      </div>    
    </div>
    <div class="interaction">
    <span class="i1"><a href="javascript:;" value="<?php echo $experience->id?>" type="experience" class="zhixuanAgree">有启发 (<span><?php echo $experience->agree ?></span>)</a></span>
    </div>
   </div>
 <ul class="pageNav">
     <li>上一篇：<?php if($prev){?><a href="<?php echo Yii::app()->createUrl('experience/detail',array('id'=>$prev->id));?>"><?php echo $prev->title?></a><?php } else echo '沒有了';?></li>
    <li>下一篇：<?php if($next){?><a href="<?php echo Yii::app()->createUrl('experience/detail',array('id'=>$next->id));?>"><?php echo $next->title?></a><?php } else echo '沒有了';?></li>
   </ul>
    <div class="replyModule">
        <h3>用户评论</h3>
        <form action="" method="post" id="comment-form">
            <p class="txtArea">
                <textarea name="content"></textarea>
            </p>
            <p class="ctrl">  <input type="button" class="btnTxt btnGuan" value="提交评论" /></p>
        </form>
    </div>
    <div class="commentModule clearfix">
        <ul class="commentListing"></ul>
        <script>
            $(document).ready(function() {
                $.get("<?php echo Yii::app()->createUrl('experience/comment', array('id' => $experience->id)) ?>", function(result) {
                    $('.commentListing').html(result);
                });
                $('.btnGuan').click(function() {
                    $.ajax({
                        "type": "POST",
                        "url": "<?php echo Yii::app()->createUrl('experience/comment', array('id' => $experience->id)) ?>",
                        "data": $("#comment-form").serialize(),
                        "success": function(data) {
                            $(".commentListing").html(data);
                        },
                    });
                })
                $('.list-page a').live('click', function() {
                    $.ajax({
                        "type": "get",
                        "url": $(this).attr('href'),
                        "success": function(data) {
                            $(".commentListing").html(data);
                        },
                    });
                    return false;
                })
            })
        </script>   
    </div>
     
  </div>





