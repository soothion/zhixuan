 <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/member.css" />  
 <style>
     .order-submit{width:100px;height:25px;line-height:25px;text-align: center;border:none;background:#E60C13;color:#FFF;};
     
 </style>
 <div class="InTitle"><h1><?php echo Yii::app()->user->name;?>－正在购买:<?php echo $course->title?></h1></div>
 <form action="<?php echo Yii::app()->createUrl('course/pay');?>" method="post">
<div class="mainPanel">
 <ul class="PaymentInfo">
  <li class="TT1">
   <p>付款用户</p><p><?php echo Yii::app()->user->name;?></p>
  </li>
  <li class="TT2">
   <p class="PP1">课程</p>
   <p class="PP2">
    <?php echo $course->title;?>
   <p class="PP3">金额</p>
   <p class="PP4">
    <span class="price"><?php echo $course->price?></span>元   </p>
    <p class="PP3">积分</p>
    <p class="PP4">
    <span class="price">10</span>0分   </p>
  </li>

  </ul>
     <ul class="PaymentInfo2">
  <li class="TT1"><p>请选择一种支付方式</p></li>
  <li class="TT2">
    <input type="hidden" name="id" value="<?php echo $_GET['id']?>"/>
    <input type="hidden" name="type" value="<?php echo $_GET['type']?>"/>
      <p class="PP1"><input type="radio" name="model" value="1"/></p>
    <p class="PP2">现金支付</p>
  </li>
  <li class="TT3">
   <p class="PP1">金额</p>
   <p class="PP2"><?php 
   if($_GET['type']==1) echo $course->price;
   else echo ($course->price)*2;
   ?>元</p>
   <p class="PP3">支付宝支付</p> 
   <p class="PP4">即将进入支付宝页面</p>
  </li>
  <li class="TT4">
   <p class="PP2"><input type="radio" name="model" value="2"/></p>
   <p class="PP3">积分支付</p>
  </li>

  <li class="TT5">
   <p class="PP1">积分</p>
   <p class="PP2"><?php 
   if($_GET['type']==1) echo $course->price/Yii::app()->params['score']['toRMB'];
   else echo ($course->price)*2/Yii::app()->params['score']['toRMB'];
   ?>分</p>
   <p class="PP3">积分支付</p> 
   <p class="PP4">点击将立即扣除积分</p>
  </li>
  
    <li class="TT3">
        <input type="submit" value="确认购买" class="order-submit"/>
   </li>
  </ul>
</div>
 </form>

