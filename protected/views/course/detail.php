<div class="InTitleInfo"> 
    <p class="skipNav">
        <a href="<?php if ($prev) echo Yii::app()->createUrl('course/detail', array('id' => $prev->id)) ?>"><img src="images/WLeft.png" /></a>
        <a href="<?php echo Yii::app()->createUrl('course/detail', array('id' => $course->id)) ?>"><img src="images/WCenter.png" /></a>
        <a href="<?php if ($next) echo Yii::app()->createUrl('course/detail', array('id' => $next->id)) ?>"><img src="images/WRightr.png" /></a>
    </p> <h1><?php echo $course->title ?></h1>

</div>
<div class="mainPanel">
    <div class="videoWindow">
        <div id="video" style="position:relative;z-index: 100;width:600px;height:400px;float: left;"><div id="a1"></div></div>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/ckplayer/ckplayer.js" charset="utf-8"></script>
        <script type="text/javascript">
            var flashvars = {
                f: 'http://movie.ks.js.cn/flv/other/1_0.flv',
                c: 0,
                b: 1
            };
            var params = {bgcolor: '#FFF', allowFullScreen: true, allowScriptAccess: 'always'};
            CKobject.embedSWF('<?php echo Yii::app()->request->baseUrl; ?>/js/ckplayer/ckplayer.swf', 'a1', 'ckplayer_a1', '642', '400', flashvars, params);
            /*
             CKobject.embedSWF(播放器路径,容器id,播放器id/name,播放器宽,播放器高,flashvars的值,其它定义也可省略);
             下面三行是调用html5播放器用到的
             */
            var video = ['http://movie.ks.js.cn/flv/other/1_0.mp4->video/mp4', 'http://www.ckplayer.com/webm/0.webm->video/webm', 'http://www.ckplayer.com/webm/0.ogv->video/ogg'];
            var support = ['iPad', 'iPhone', 'ios', 'android+false', 'msie10+false'];
            CKobject.embedHTML5('video', 'ckplayer_a1', 600, 400, video, flashvars, support);
        </script> 

    </div>
    <div class="videoIntro">
        <div class="overview">
            <p class="PP1">
                <span>时长：<?php echo $course->time; ?></span>   <span>分类：<?php echo $course->type->title; ?></span>    <span>标签：<?php echo $course->tag ?></span>     </p>
            <p class="PP3">
                <a href="#"><img src="images/GG1.png" /></a>
                <a href="#"><img src="images/GG2.png" /></a>     </p>
            <p class="PP2">分享：</p>
        </div>
        <div class="desp">
            <?php echo $course->des ?> 
        </div>
        <div class="interaction">
            <span class="SP1"><a href="javascript:;" value="<?php echo $course->id?>" type="course" class="zhixuanAgree">有启发(<span><?php echo $course->agree ?></span>)</a></span>
            <span class="SP2"><a href="#">收藏(28)</a></span>    </div>
    </div>

    <div class="courseDiscus">
        <h3>本课讨论主题：<?php echo $course->theme; ?></h3>
    </div>
    <div class="replyBoard">
        <h3 >发表观点(<?php echo count($course->comment) ?>)</h3>
        <form action="" method="post" id="comment-form">
            <p class="txtArea"><textarea name="content"></textarea></p>
            <p class="ctrl"> 
                <span class="comment-msg"></span><input type="button" class="btnGuan" value="提交观点" />
            </p>
        </form>
    </div>
    <ul class="commentListing"></ul>
    <script>
        $(document).ready(function() {
            $.get("<?php echo Yii::app()->createUrl('course/comment', array('id' => $course->id)) ?>", function(result) {
                $('.commentListing').html(result);
            });
            $('.btnGuan').click(function() {
                $.ajax({
                    "type": "POST",
                    "url": "<?php echo Yii::app()->createUrl('course/comment', array('id' => $course->id)) ?>",
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

