
<div class="InTitle"><h1>搜索结果</h1></div>
 <div class="mainPanel">
  <div class="searchTabs">
   <a class="<?php if($model=='course') echo 'current';?>">课程</a><a class="<?php if($model=='ask') echo 'current';?>">问题</a><a class="<?php if($model=='experience') echo 'current';?>">专栏</a></div>
  <div class="searchResult">
    <?php if($model=='course'){?>
       <ul class="courseListing">
<?php foreach ($list as $k => $v) { ?>
            <li class="<?php if (!($k % 2 == 0)) echo 'br'; ?>">
                <div class="courseCover"><a href="<?php echo Yii::app()->createUrl('course/detail', array('id' => $v->id)) ?>"><img src="<?php echo $v->pic ?>" /></a></div>
                <div class="intro">
                    <span class="isFree"><?php echo ($v->free) == 1 ? '免费' : '收费'; ?></span> <h3><a href="<?php echo Yii::app()->createUrl('course/detail', array('id' => $v->id)) ?>"><?php echo $v->title ?></a></h3>     
                </div>
                <div class="voteCtrl">有启发(<?php echo $v->agree ?>)</div>
            </li>
<?php } ?>
    </ul> 
    <?php }?>
    
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

 