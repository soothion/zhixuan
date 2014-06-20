<div class="InTitle"><h1>创业课程</h1></div>
<div class="mainPanel">
    <div class="courseCommended">
        <div class="courseCover"><a href="<?php echo Yii::app()->createUrl('course/detail', array('id' => $recommendCourse->id)) ?>"><img src="<?php echo Yii::app()->request->baseUrl.'/'.$recommendCourse->pic; ?>" width="642" height="296" /></a></div>
        <div class="intro"> <h3><a href="<?php echo Yii::app()->createUrl('course/detail', array('id' => $recommendCourse->id)) ?>"><?php echo $recommendCourse->title ?></a></h3>
            <div class="desp"><?php echo Helper::truncate_utf8_string($recommendCourse->content, 100) ?></div>
            <div class="voteCtrl">有启发(<?php echo $recommendCourse->agree; ?>)</div>
        </div>
    </div>
    <ul class="courseNav">
        <li class="TT1"><span><a href="<?php echo Yii::app()->createUrl('course',array('filter'=>'0-0'))?>">所有课程(<?php echo $courseCount ?>)</span></li>
        <li class="TT2">分类：
            <?php
            foreach ($type as $v) {
                echo '<a href="' . Yii::app()->createUrl('course', array('filter' => $v->id . '-' . $filter[1])) . '">' . $v->title . '</a> ';
            }
            ?></li>
        <li class="TT2">标签：
            <?php
            foreach ($tag as $v) {
                echo '<a href="' . Yii::app()->createUrl('course', array('filter' => $filter[0]. '-' . $v)) . '">' . $v . '</a> ';
            }
            ?>
        </li>
    </ul>
    <ul class="courseListing">
<?php foreach ($courseList as $k => $v) { ?>
            <li class="<?php if (!($k % 2 == 0)) echo 'br'; ?>">
                <div class="courseCover"><a href="<?php echo Yii::app()->createUrl('course/detail', array('id' => $v->id)) ?>"><img src="<?php echo Yii::app()->request->baseUrl.'/'.$v->pic ?>" /></a></div>
                <div class="intro">
                    <span class="isFree"><?php echo $v->price.'元'; ?></span> <h3><a href="<?php echo Yii::app()->createUrl('course/detail', array('id' => $v->id)) ?>"><?php echo $v->title ?></a></h3>     
                </div>
                <div class="voteCtrl">有启发(<?php echo $v->agree ?>)</div>
            </li>
<?php } ?>
    </ul> 

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
