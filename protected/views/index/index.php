<div class="InTitle"><h1>创业课程</h1></div>
<div class="mainPanel">
    <div class="courseModule">
        <div class="courseCommended">
            <div class="courseCover"><a href="<?php echo Yii::app()->createUrl('course/detail', array('id' => $recommendCourse->id)) ?>"><img src="<?php echo Yii::app()->request->baseUrl.'/'.$recommendCourse->pic; ?>" width="642" height="296" /></a></div>
            <div class="intro"> <h3><a href="<?php echo Yii::app()->createUrl('course/detail', array('id' => $recommendCourse->id)) ?>"><?php echo $recommendCourse->title ?></a></h3>
                <div class="desp"><?php echo $recommendCourse->des; ?></div>
                <div class="voteCtrl"><a href="javascript:;" value="<?php echo $recommendCourse->id?>" type="course" class="zhixuanAgree">有启发(<span><?php echo $recommendCourse->agree; ?></span>)</a></div>
            </div>
        </div>
        <ul class="courseListing">
            <li>
                <div class="courseCover"><a href="<?php echo Yii::app()->createUrl('course/detail', array('id' => $freeCourse[0]->id)) ?>"><img src="<?php echo Yii::app()->request->baseUrl.'/'.$freeCourse[0]->pic; ?>" /></a></div>
                <div class="intro">
                    <span class="isFree"><?php echo $freeCourse[0]->price;?>元</span> <h3><a href="<?php echo Yii::app()->createUrl('course/detail', array('id' => $freeCourse[0]->id)) ?>"><?php echo $freeCourse[0]->title; ?></a></h3>     
                </div>
                <div class="voteCtrl"><a href="javascript:;" value="<?php echo $freeCourse[0]->id?>" type="course" class="zhixuanAgree">有启发(<span><?php echo $freeCourse[0]->agree; ?></span>)</a></div>
            </li>
            <li class="br">
                <div class="courseCover"><a href="<?php echo Yii::app()->createUrl('course/detail', array('id' => $freeCourse[1]->id)) ?>"><img src="<?php echo Yii::app()->request->baseUrl.'/'.$freeCourse[1]->pic; ?>" /></a></div>
                <div class="intro">
                    <span class="isFree"><?php echo $freeCourse[1]->price?>元</span> <h3><a href="<?php echo Yii::app()->createUrl('course/detail', array('id' => $freeCourse[1]->id)) ?>"><?php echo $freeCourse[1]->title; ?></a></h3>     
                </div>
                <div class="voteCtrl"><a href="javascript:;" value="<?php echo $freeCourse[1]->id?>" type="course" class="zhixuanAgree">有启发(<span><?php echo $freeCourse[1]->agree; ?></span>)</a></div>
            </li>
        </ul> <div class="clear"></div>
    </div>
    <div class="qaModule"> 
        <div class="head">
            <h2 class="fl">有问必答<span>已解答(1002)</span></h2>
            <a class="btnComm fr" id="btnQuest" href="<?php echo Yii::app()->createUrl('ask/index');?>">向智课堂提问      </a>

        </div>     
       

        <ul class="questListing">
            <?php foreach ($ask as $v) { ?>
                <li>
                    <h3><a href="<?php echo Yii::app()->createUrl('ask/detail', array('id' => $v->id)) ?>"><?php echo Helper::truncate_utf8_string($v->content, 32); ?></a></h3>
                    <p class="intro">
                        <span><a href="<?php echo Yii::app()->createUrl('member/info', array('id' => $v->user->id)) ?>"><?php echo $v->user->username; ?></a></span> 发布于 <?php echo date('Y-m-d H:m:s', strtotime($v->addtime)); ?>  分类：<span><?php echo $v->type->title; ?></span>  标签：<span><?php echo $v->tag; ?></span>   评论 (<?php echo count($v->comment); ?>)     
                    </p> 
                </li>
            <?php } ?>  
        </ul>


        <div class="InbtnProblemDiv"><a href="<?php echo Yii::app()->createUrl('ask') ?>">更多</a></div>
    </div>
</div>






