<script type="text/javascript" charset="utf-8" src="<?php echo Yii::app()->request->baseUrl; ?>/js/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="<?php echo Yii::app()->request->baseUrl; ?>/js/ueditor/ueditor.all.min.js"></script>
<script type="text/javascript" charset="utf-8" src="<?php echo Yii::app()->request->baseUrl; ?>/js/ueditor/lang/zh-cn/zh-cn.js"></script>

<div class="InTitle">
  <h1>有问必答</h1>
</div>
<div class="mainPanel">
  <ul class="questListing">
    <li>
      <h3><?php echo CHtml::encode($ask->content); ?></h3>
      <p class="intro"> <span><?php echo $ask->user->username; ?></span> 发布于 <?php echo date('Y-m-d H:m:s', strtotime($ask->addtime)) ?> 分类：<span><?php echo $ask->type->title ?></span> 标签：<span><?php echo $ask->tag ?></span> 评论 (<?php echo count($ask->comment) ?>) </p>
      <p class="voteCtrl"> <span class="v1"><a href="javascript:;" value="<?php echo $ask->id?>" type="ask" class="zhixuanAgree">同感受 (<span><?php echo $ask->agree ?></span>)</a></span>　<span class="SP2"><a href="javascript:;" class="reply-pop">向提问者追问</a></span> </p>
      
        <div class="askModule forQuetion clearfix" id="zw1457" style="display: none; ">
          <form action="<?php echo Yii::app()->createUrl('ask/answer');?>" method="post">
              <input name="aid" type="hidden" value="<?php echo $ask->id?>">
              <textarea name="content" style="width:610px;" id="zwcontent2" rows="3" cols="30" tabindex="4" class="askTxt txtArea">写下你的回复</textarea>
              <div class="sbmDiv clearfix"><input name="" type="button" value="提交" class="btnTxt fr reply"></div> 
          </form>
        </div> 
      
    </li>
  </ul>
  <ul class="replyListing">
    <?php foreach ($ask->answer as $v) { ?>
    <li>
        <div class="userPhoto"><img src="<?php echo Yii::app()->request->baseUrl.'/'.$v->user->thumb; ?>" width="40px" /></div>
      <div class="comment clearfix">
        <p class="userInfo"><span><?php echo $v->user->username ?></span> 发表于 <?php echo date('Y-m-d H:m:s', strtotime($ask->addtime)) ?></p>
        <p class="con"> <?php echo $v->content ?> </p>
      </div>
      <div class="interaction clearfix"> 
          <span class="i1"><a href="javascript:;" value="<?php echo $v->id?>" type="answer" class="zhixuanAgree">有启发 (<span><?php echo $v->agree ?></span>)</a></span> 
          <span class="i2"><a <a href="javascript:;" value="<?php echo $v->id?>" type="answer" class="zhixuanLove">收藏(<span><?php echo count($v->love)?></span>)</a></span> 
          <span class="fr"><a href="javascript:;" class="reply-pop">回复</a></span>
      </div>
      <div class="askModule forAnswer clearfix" id="zw1456" style="display: none; ">
              <form action="<?php echo Yii::app()->createUrl('ask/answer');?>" method="post">
                  <input name="aid" type="hidden" value="<?php echo $ask->id?>">
                  <textarea name="content" id="zwcontent" style="width:578px;" rows="3" cols="30" tabindex="4" class="askTxt txtArea">写下你的回复</textarea>
                  <div class="sbmDiv clearfix"><input name="" type="button" value="提交" class="btnTxt fr reply"></div> 
              </form>
     </div>  
    </li>
    <?php } ?>
  </ul>
  <div class="btnProblemDivX"> <span class="SP1"><a href="javascript:;" class="toggleList">查看所有解惑</a></span> </div>
  <script type="text/javascript">
$(document).ready(function() {
    $('.replyListing li:gt(0)').hide();
    $('.toggleList').click(function() {
        $('.replyListing li:gt(0)').toggle();
    });
})
    </script>
    
    
<script>
          $(document).ready(function() {
              $('.reply').click(function() {
                  var data = $(this).parent().parent().serialize();
                  $.post("<?php echo Yii::app()->createUrl('ask/answer') ?>", data, function(result) {
                      alert(result);
                      location.reload();
                  });

              });
              
              $('.reply-pop').click(function(){
                  $(this).parent().parent().next().toggle();
              });
          })
</script> 


  <div class="ProblemEditX">
    <div class="Lefts"><!--<img src="images/EText.png" height="135px" width="420px" />--> 
      <script id="editor" type="text/plain" style="width:420px;height:82px;"></script> 
      <script type="text/javascript">
                var ue = UE.getEditor('editor');
            </script> 
    </div>
    <div class="Rights">
      <ul class="ProblemSText">
        <li class="TT1"> 只有高级会员（原解惑者）才能解
          惑。解惑将获得积分。<br/>
          积分可以用来购买课程。<br/>
          <a href="#">去升级会员？</a> </li>
        <li class="TT2">
          <input type="button" class="btnJieHuo" value="提交解惑" id='answer-submit' />
        </li>
      </ul>
      <script>
                $(document).ready(function() {
                    $('#answer-submit').click(function() {
                        var content = UE.getEditor('editor').getContent();
                        var aid =<?php echo $ask->id; ?>;
                        var data = {"content": content, "aid": aid};
                        $.post("<?php echo Yii::app()->createUrl('ask/answer') ?>", data, function(result) {
                            alert(result);
                            location.reload();
                        });

                    });
                })
            </script> 
    </div>
  </div>
  <div class="replyModule">
    <h3>用户评论</h3>
    <form action="" method="post" id="comment-form">
      <p class="txtArea">
        <textarea name="content"></textarea>
      </p>
      <p class="ctrl">
        <input type="button" class="btnTxt btnGuan" value="提交评论" />
      </p>
    </form>
  </div>
    <ul class="commentListing">
    </ul>
    <script>
            $(document).ready(function() {
                $.get("<?php echo Yii::app()->createUrl('ask/comment', array('id' => $ask->id)) ?>", function(result) {
                    $('.commentListing').html(result);
                });
                $('.btnGuan').click(function() {
                    $.ajax({
                        "type": "POST",
                        "url": "<?php echo Yii::app()->createUrl('ask/comment', array('id' => $ask->id)) ?>",
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
