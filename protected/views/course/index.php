<div class="InTitle"><h1>创业课程</h1></div>
<div class="mainPanel">
    <div class="courseCommended">
        <div class="courseCover"><img src="<?php echo $recommendCourse->pic; ?>" width="642" height="296" /></div>
        <div class="intro"> <h3><a href="<?php echo Yii::app()->createUrl('course/detail', array('id' => $recommendCourse->id)) ?>"><?php echo $recommendCourse->title ?></a></h3>
            <div class="desp"><?php echo $recommendCourse->des; ?></div>
            <div class="voteCtrl">有启发(<?php echo $recommendCourse->agree; ?>)</div>
        </div>
    </div>
    <ul class="courseNav">
        <li class="TT1"><span>所有课程(<?php echo $courseCount ?>)</span></li>
        <li class="TT2">分类：
            <?php
            foreach ($type as $v) {
                echo '<a href="' . Yii::app()->createUrl('course', array('filter' => $v->id . '-' . $filter[1])) . '">' . $v->title . '</a> ';
            }
            ?></li>
        <li class="TT2">标签：</li>
    </ul>
    <ul class="courseListing">
<?php foreach ($courseList as $k => $v) { ?>
            <li class="<?php if (!($k % 2 == 0)) echo 'br'; ?>">
                <div class="courseCover"><a href="<?php echo Yii::app()->createUrl('course/detail', array('id' => $v->id)) ?>"><img src="<?php echo $v->pic ?>" /></a></div>
                <div class="intro">
                    <span class="isFree"><?php echo ($v->free) == 1 ? '免费' : '收费'; ?></span> <h3><a href="<?php echo Yii::app()->createUrl('course/detail', array('id' => $v->id)) ?>"><?php echo $v->title ?></a></h3>     
                </div>
                <div class="voteCtrl">有启发(<?php echo $v->agree ?>)</div>
            </li>
<?php } ?>
    </ul> 

</div>
