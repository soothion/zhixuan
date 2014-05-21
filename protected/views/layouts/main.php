<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="en" />

        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/global.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/component.css" />             
        <?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>

        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    </head>
    <body>
        <div id="header">
            <div class="wrapper">
                <div class="logo"><a href="<?php echo Yii::app()->createUrl('index') ?>"><img src="images/Logo.png" /> </a> <img src="images/slogan.png" class="slogan"/>
                </div>
                <ul class="globalNav">
                    <li><a href="<?php echo Yii::app()->createUrl('course') ?>">创业课程</a></li>
                    <li><a href="<?php echo Yii::app()->createUrl('ask') ?>">有问必答</a></li>
                    <li><a href="<?php echo Yii::app()->createUrl('experience') ?>">经验专栏</a></li>
                </ul>
                <div class="searchBar">
                    <p class="searchType" onclick="OnClickDownMuen()">
                        <label id="DownText">课程</label> 
                    </p>
                    <p class="keyword"><input type="text" /></p>
                    <p class="btnSearch"><input name="" type="image" src="images/Seach.png" /></p> 

                    <div class="dropdown" id="MuenNavDown" style=" display:none">
                        <p class="dropMenu" onclick="OnClickDownMuenText('课程')"><a href="#">课程</a></p>
                        <p class="dropMenu" onclick="OnClickDownMuenText('问题')"><a href="#">问题</a></p>
                        <p class="dropMenu" onclick="OnClickDownMuenText('专栏')"><a href="#">专栏</a></p>
                    </div>
                </div>
                <script type="text/javascript">
                    function OnClickDownMuen() {
                        if (document.getElementById("MuenNavDown").style.display == "none") {
                            document.getElementById("MuenNavDown").style.display = ""
                        }
                        else {
                            document.getElementById("MuenNavDown").style.display = "none"
                        }
                    }
                    function OnClickDownMuenText(Tages) {
                        document.getElementById("DownText").innerHTML = Tages;
                        document.getElementById("MuenNavDown").style.display = "none"
                    }
                </script>
            </div>
        </div>
        <?php if (isset($this->breadcrumbs)): ?>
            <?php
            $this->widget('zii.widgets.CBreadcrumbs', array(
                'links' => $this->breadcrumbs,
            ));
            ?><!-- breadcrumbs -->
        <?php endif ?>
        <div class="IndexContent" id="contentWrapper">
            <?php echo $content; ?>
            <!--右侧栏开始-->
            <div class="sideBar">
                <div class="adBlock"><img src="images/corese_ad.png" width="308" height="270" /></div>

                <ul class="CourseLogin block"  id="MenberLogins">
                    <?php if(Yii::app()->user->isGuest){?>
                    <form action="" method="" id="login-form">
                        <span class="login-info"></span>
                    <li class="TT1">用户名</li><li class="TT2"><input type="text" name="username"/></li>
                    <li class="TT1">密&nbsp;&nbsp;&nbsp;&nbsp;码</li><li class="TT2"><input type="password" name="password"/></li>
                    <li class="TT3">
                        <a href="javascript:;" class="login-submit">登录  </a>   
                        <a href="#">马上注册</a>     
                        <a href="#">忘记密码？</a>
                    </li>
                    <li class="TT4">
                        <p class="PP1">社交工具登录</p>
                        <p class="PP2">
                            <a href="#"><img src="images/G1.png" /></a>
                            <a href="#"><img src="images/G2.png" /></a>
                        </p> 
                    </li>
                    </form>
                    <?php } else{?>
                    <li class="TT1">欢迎您：</li><li class="TT1"><?php echo Yii::app()->user->username;?></li>
                    <li class="TT1"><a href="<?php echo Yii::app()->createUrl('index/logout');?>">退出  </a> </li>
                    <?php }?>
                </ul>
                <script type="text/javascript">
                    function OnClickLogin() {
                        document.getElementById("MenberInfos").style.display = "";
                        document.getElementById("MenberLogins").style.display = "none";
                    }
                </script>
                <div class="CourseLoginInfo" id="MenberInfos" style=" display:none">
                    <div class="Lefts"><a href="#"><img src="Images/Tou.png" /></a></div>
                    <div class="Rights"> 
                        <ul class="CourseLoginInfoText">
                            <li class="TT1">
                                <p class="PP1"><span>高级会员</span> 袁荣</p> 
                            </li>
                            <li class="TT3">
                                <a href="#"><img src="Images/TT1.png" /></a>
                                <a href="#"><img src="Images/TT2.png" /></a>
                            </li>
                            <li class="TT2">积分:500<br/><a href="#">查看积分规则</a></li>  
                        </ul>
                    </div>
                    <div class="Centers">
                        <a href="#">我的资料</a>
                        <a href="#">我的积分</a>
                        <a href="#">我的主页</a>
                        <a href="#">消息(1)</a>
                    </div>
                </div>
                <div class="experienceModule block">
                    <h2><a href="index.htm">经验专栏</a></h2>
                    <ul class="experienceListing">
                        <li><a href="experience-detail.htm">做SEO的技巧......</a></li>
                        <li><a href="experience-detail.htm">做SEO的技巧......</a></li>
                        <li><a href="experience-detail.htm">做SEO的技巧......</a></li>
                        <li><a href="experience-detail.htm">做SEO的技巧......</a></li>
                        <li><a href="experience-detail.htm">做SEO的技巧......</a></li>
                    </ul>
                </div>

                <div class="adBlock">
                    <a href="#"><img src="images/GImages.png" /></a>
                </div> 
            </div>
            <!--右侧栏结束-->
        </div>
        <div class="clear"></div>

        <div id="footer">
            <div class="wrapper">
                <p class="botNav">
                    <a href="#">关于智选</a><a href="#">使用帮助</a><a href="#">意见反馈</a><a href="#">加入我们</a>
                </p>
                <p class="copyright">沪ICP备11022737</p>
            </div>
        </div><!-- footer -->
        </div><!-- page -->
<script>
$('.login-submit').click(function(){
    var data=$('#login-form').serialize();
    var url="<?php echo Yii::app()->createUrl('index/login');?>";
    $.post(url,data,function(result){
        $('.login-info').html(result);
    })
});
$(".zhixuanAgree").bind("click", function() {
    var id=$(this).attr('value');
    var type=$(this).attr('type');
    var $this=$(this);
    data={"id":id,"type":type}
    url="<?php echo Yii::app()->createUrl('index/agree')?>";
    $.post(url,data,function(data){
        $this.children('span').html(data);
    });  
});

$(".zhixuanLove").bind("click", function() {
    var id=$(this).attr('value');
    var type=$(this).attr('type');
    var $this=$(this);
    data={"id":id,"type":type}
    url="<?php echo Yii::app()->createUrl('index/love')?>";
    $.post(url,data,function(data){
        $this.children('span').html(data);
    });  
});
</script>
    </body>
</html>
