<script type="text/javascript" charset="utf-8" src="<?php echo Yii::app()->request->baseUrl; ?>/js/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="<?php echo Yii::app()->request->baseUrl; ?>/js/ueditor/ueditor.all.min.js"></script>
<script type="text/javascript" charset="utf-8" src="<?php echo Yii::app()->request->baseUrl; ?>/js/ueditor/lang/zh-cn/zh-cn.js"></script>
<div class="InTitle">
    <h1>有问必答</h1>
</div>
<div class="mainPanel">
    <div class="ProblemEdit">
        <div class="Lefts"> 
            <script id="editor" type="text/plain" style="width:420px;height:125px;"></script>
            <script type="text/javascript">
                var ue = UE.getEditor('editor');
            </script>
        </div>
        <div class="Rights">
            <ul class="ProblemSelect">
                <li class="TT1">
                    <p class="PP1">提交分类</p>
                    <p class="PP2">
                        <select name="type" id="ask-type"><option>请选择</option><?php foreach ($type as $v) { ?>
                            <option value="<?php echo $v->id ?>"><?php echo $v->title ?></option>
                            <?php } ?></select>
                    </p> 
                </li>
                <li class="TT1">
                    <p class="PP1">添加标签</p>
                    <p class="PP2">
                        <input type="text" name="tag" id="ask-tag"/>
                    </p>
                </li>
                <li class="TT2">多个标签请用空格隔开。</li>
                <li class="TT3">
                    您在注册后才能提交问题。<br/>
                    有问必答，24小时内给予解惑。
                </li>
                <li class="TT4"> 
                    <input type="button" value="提交" id="ask-submit"/>
                </li>
            </ul>
            <script>
                $(document).ready(function() {
                    $('#ask-submit').click(function() {
                        var content = UE.getEditor('editor').getContent();
                        var tid = $('#ask-type').val();
                        var tag = $('#ask-tag').val();
                        var data = {"content": content, "tid": tid, "tag": tag};

                        $.post("<?php echo Yii::app()->createUrl('ask/ask') ?>", data, function(result) {
                            alert(result);
                            location.reload();
                        });

                    });
                })
            </script>
        </div>
    </div> 
    <div class="questHeader">
        <p class="questNav">
            <a href="<?php echo Yii::app()->createUrl('ask', array('filter' => '0-0')) ?>">所有困惑(<?php echo $askCount ?>)</a>
        </p>
        <p class="questCategory">
            分类：<?php
            foreach ($type as $v) {
                echo '<a href="' . Yii::app()->createUrl('ask', array('filter' => $v->id . '-' . $filter[1])) . '">' . $v->title . '</a> ';
            }
            ?><br/>
            标签：            
                <?php
            foreach ($tag as $v) {
                echo '<a href="' . Yii::app()->createUrl('ask', array('filter' => $filter[0] . '-' . $v)) . '">' . $v . '</a> ';
            }
            ?>
        </p>
    </div>
    <?php foreach ($askList as $v) { ?>
        <div class="questWrapper">
            <ul class="questListing">
                <li>
                    <h3><a href="<?php echo Yii::app()->createUrl('ask/detail', array('id' => $v->id)); ?>"><?php echo Helper::truncate_utf8_string($v->content, 32) ?></a></h3>
                    <p class="intro"> <span><a href="<?php echo Yii::app()->createUrl('member/info', array('id' => $v->user->id)) ?>"><?php echo ($v->user->username); ?></a></span> 
                        发布于 <?php echo date('Y-m-d H:m:s', strtotime($v->addtime)) ?> 
                        分类：<span><?php echo $v->type->title ?></span> 
                        标签：<span><?php echo $v->tag ?></span> 
                        评论 (<?php echo count($v->comment) ?>) </p>
                    <p class="ctrl"> <span class="SP1"><a href="javascript:;" value="<?php echo $v->id?>" type="ask" class="zhixuanAgree">同感受 (<span><?php echo $v->agree; ?></span>)</a></span> <span class="SP2"><a href="javascript:;" class="reply-pop">向提问者询问</a></span> </p>
                    
                    <div class="askModule forQuetion clearfix" id="zw1457" style="display: none; ">
                            <form action="<?php echo Yii::app()->createUrl('ask/answer');?>" method="post">
                                <input name="aid" type="hidden" value="<?php echo $v->id?>">
                                <textarea name="content" id="zwcontent2" rows="3" cols="30" tabindex="4" class="askTxt txtArea">写下你的回复</textarea>
                                <div class="sbmDiv clearfix"><input name="" type="button" value="提交" class="btnTxt fr reply"></div> 
                            </form>
                    </div> 
                </li>
            </ul>
            <?php if($v->answer){?>
            <ul class="replyListing">
                <li>
                    <div class="userPhoto"><a href="<?php echo Yii::app()->createUrl('member/info', array('id' => $v->answer[0]->user->id)) ?>"><img src="<?php echo Yii::app()->request->baseUrl.'/'.$v->answer[0]->user->thumb; ?>" width="40px" /></a></div>
                    <div class="comment clearfix">
                        <p class="userInfo"><span><a href="<?php echo Yii::app()->createUrl('member/info', array('id' => $v->answer[0]->user->id)) ?>"><?php echo $v->answer[0]->user->username ?></a></span>  发表于  <?php echo date('Y-m-d H:m:s', strtotime($v->answer[0]->addtime)) ?></p>
                        <p class="con">
                            <?php echo $v->answer[0]->content ?> </p>
                    </div>
                    <div class="interaction clearfix">
                        <span class="i1"><a href="javascript:;" value="<?php echo $v->answer[0]->id?>" type="answer" class="zhixuanAgree">有启发 (<span><?php echo $v->answer[0]->agree ?></span>)</a></span> 
                        <span class="i2"><a <a href="javascript:;" value="<?php echo $v->answer[0]->id?>" type="answer" class="zhixuanLove">收藏(<span><?php echo count($v->answer[0]->love)?></span>)</a></span>
                        <span class="fr"><a href="javascript:;" class="reply-pop">向解惑者追问</a></span>
                    </div>
                    <div class="askModule forAnswer clearfix" id="zw1456" style="display: none; ">
                                <form action="<?php echo Yii::app()->createUrl('ask/answer');?>" method="post">
                                    <input name="aid" type="hidden" value="<?php echo $v->id?>">
                                    <textarea name="content" id="zwcontent" style="width:560px;" rows="3" cols="30" tabindex="4" class="askTxt txtArea">写下你的回复</textarea>
                                    <div class="sbmDiv clearfix"><input name="" type="button" value="提交" class="btnTxt fr reply"></div> 
                                </form>
                    </div>
                </li>        
            </ul>
            <?php }?>
        </div>
    <?php } ?>

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
