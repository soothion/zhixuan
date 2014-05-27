
<div class="InTitle"><h1>搜索结果</h1></div>
<div class="mainPanel">
    <div class="searchTabs">
        <a class="<?php if ($model == 'Course') echo 'current'; ?>">课程</a><a class="<?php if ($model == 'Ask') echo 'current'; ?>">问题</a><a class="<?php if ($model == 'Experience') echo 'current'; ?>">专栏</a></div>
    <div class="searchResult">
        <?php if ($model == 'Course') { ?>
            <ul class="courseListing">
                <?php foreach ($list as $k => $v) { ?>
                    <li class="<?php if (!($k % 2 == 0)) echo 'br'; ?>">
                        <div class="courseCover"><a href="<?php echo Yii::app()->createUrl('course/detail', array('id' => $v->id)) ?>"><img src="<?php echo Yii::app()->request->baseUrl . '/' . $v->pic ?>" /></a></div>
                        <div class="intro">
                            <span class="isFree"><?php echo ($v->free) == 1 ? '免费' : '收费'; ?></span> <h3><a href="<?php echo Yii::app()->createUrl('course/detail', array('id' => $v->id)) ?>"><?php echo str_replace($key, '<em>'.$key.'</em>', $v->title)?></a></h3>     
                        </div>
                        <div class="voteCtrl">有启发(<?php echo $v->agree ?>)</div>
                    </li>
                <?php } ?>
            </ul> 
        <?php } ?>
        <?php if ($model == 'Ask') { ?>
            <ul class="questListing">
                <?php foreach ($list as $k => $v) { ?>
                    <li>
                        <h3><a href="<?php echo Yii::app()->createUrl('ask/detail', array('id' => $v->id)); ?>"><?php echo str_replace($key, '<em>'.$key.'</em>', Helper::truncate_utf8_string($v->content, 32))?></a></h3>
                        <p class="intro"> <span><?php echo ($v->user->username); ?></span> 
                            发布于 <?php echo date('Y-m-d H:m:s', strtotime($v->addtime)) ?> 
                            分类：<span><?php echo $v->type->title ?></span> 
                            标签：<span><?php echo $v->tag ?></span> 
                            评论 (<?php echo count($v->comment) ?>) </p>
                        <p class="ctrl"> <span class="SP1"><a href="javascript:;" value="<?php echo $v->id ?>" type="ask" class="zhixuanAgree">同感受 (<span><?php echo $v->agree; ?></span>)</a></span> <span class="SP2"><a href="<?php echo Yii::app()->createUrl('ask/detail', array('id' => $v->id)); ?>">回复</a></span> </p>
                    </li>
                <?php } ?>  
            </ul>
        <?php } ?>

        <?php if ($model == 'Experience') { ?>
            <ul class="experienceList">
                <?php foreach ($list as $k => $v) { ?>
                    <li>
                        <h3><?php echo str_replace($key, '<em>'.$key.'</em>', $v->title)?></h3>
                        <div class="cont clearfix">
                            <div class="photo"> <img src="<?php echo Yii::app()->request->baseUrl . '/' . $v->user->thumb ?>" /></div>
                            <div class="author"><em><a href="#"><?php echo $v->user->username ?></a></em>  <span>发表于 <?php echo date('Y-m-d H:m:s', strtotime($v->addtime)) ?> </span>       </div>
                            <div class="detail">
                                <?php echo Helper::truncate_utf8_string($v->content, 100) ?><a href="<?php echo Yii::app()->createUrl('experience/detail', array('id' => $v->id)) ?>">查看更多</a></div>    
                        </div>
                        <div class="interaction">
                            <span class="i1"><a href="javascript:;" value="<?php echo $v->id ?>" type="experience" class="zhixuanAgree">有启发 (<span><?php echo $v->agree ?></span>)</a></span>
                        </div>
                    </li>
                <?php } ?>  
            </ul>
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

