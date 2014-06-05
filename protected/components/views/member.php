<div class="userProfileContainer clearfix">
    <div class="userPhotoFrame"> <img src="<?php echo Yii::app()->baseUrl . '/' . $user->thumb ?>" width="72" height="73" /> </div>
    <div class="userProfileDescribe">
        <div class="userTitleSection"> <span class="snsEntLink"><a href="#"><img src="<?php echo Yii::app()->baseUrl.'/'?>images/T1.png" /></a><a href="#"><img src="<?php echo Yii::app()->baseUrl.'/'?>images/T2.png" /></a></span> <span class="lab"><?php if ($user->level == 1) echo '普通';if ($user->level == 2) echo '高级'; ?>会员</span> <span class="name"> <?php echo $user->username ?></span> </div>
        <div class="scoreWrap"> <span class="score">积分:<?php echo $user->score ?></span> <a href="#">查看积分规则</a> </div>
        <div class="userProfileNav"> <a href="<?php echo Yii::app()->createUrl('member/info', array('id' => $_GET['id'])) ?>">我的资料</a> <a href="<?php echo Yii::app()->createUrl('member/score', array('id' => $_GET['id'])) ?>">我的积分</a> <a href="<?php echo Yii::app()->createUrl('member/index', array('id' => $_GET['id'])) ?>">我的主页</a> <a href="<?php echo Yii::app()->createUrl('member/message', array('id' => $_GET['id'])) ?>">消息</a> <?php if(Yii::app()->user->id==$_GET['id']){?><a href="<?php echo Yii::app()->createUrl('member/set',array('id'=>$_GET['id']));?>">设置</a><?php }?></div>
    </div>
</div>