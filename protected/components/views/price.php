<style>

    a.BtnGou{
        display:inline-block;
        font-family: 微软雅黑;
        font-size: 14px;
        color: white;
        background-color: #C8000D;
        line-height: 29px;
        text-align: center;
        width: 92px;
        height: 29px;
        border: 0px;
        margin: 0px;
        padding: 0px;
        cursor: pointer;}
</style>  
<div class="sideOrderModule block b1">
    <p class="tit">点播价 <span><?php echo $course->price?></span> 元</p>
    <p class="tips">购买后可在90天内无限观看</p>
    <p class="orderBtnRow"><a class="BtnGou" href="<?php echo Yii::app()->createUrl('course/order',array('type'=>1,'id'=>$course->id));?>" target="_blank">立即购买</a><span>己购人数:300人</span></p>
  </div>
  <div class="sideOrderModule block b1">
    <p class="tit">百人优先分享权<span><?php echo ($course->price)*Yii::app()->params['first']?></span> 元</p>
    <p class="tips ft_line">什么是优先分享权：支持智课堂 无限期分享课程收益</p>
    <p class="orderBtnRow"><a class="BtnGou" href="<?php echo Yii::app()->createUrl('course/order',array('type'=>2,'id'=>$course->id));?>" target="_blank">立即购买</a><span>己购人数:300人</span></p>
  </div>