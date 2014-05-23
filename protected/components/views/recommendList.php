<div class="experienceModule block">
    <h2><a href="<?php echo Yii::app()->createUrl('experience')?>">经验专栏</a></h2>
    <ul class="experienceListing">
        <?php foreach($list as $v){?>
        <li><a href="<?php echo Yii::app()->createUrl('experience/detail',array('id'=>$v->id));?>"><?php echo Helper::truncate_utf8_string($v->title, 20)?></a></li>
        <?php }?>
    </ul>
</div>