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
                <div class="logo"><a href="<?php echo Yii::app()->createUrl('index') ?>"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/Logo.png" /> </a> <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/slogan.png" class="slogan"/>
                </div>
                <ul class="globalNav">
                    <li><a href="<?php echo Yii::app()->createUrl('course') ?>">创业课程</a></li>
                    <li><a href="<?php echo Yii::app()->createUrl('ask') ?>">有问必答</a></li>
                    <li><a href="<?php echo Yii::app()->createUrl('experience') ?>">经验专栏</a></li>
                </ul>
                <div class="searchBar">
                    <form action="<?php echo Yii::app()->createUrl('index/search') ?>" method="get" id="search-form">
                        <input type="hidden" name="model" id="search-model" value="course"/>
                        <p class="searchType" onclick="OnClickDownMuen()">
                            <span id="DownText">课程</span> 
                        </p>
                        <p class="keyword"><input type="text" name="key" /></p>
                        <p class="btnSearch"><input type="image" src="<?php echo Yii::app()->request->baseUrl ?>/images/Seach.png" id="search-submit" /></p> 

                        <div class="dropdown" id="MuenNavDown" style=" display:none">
                            <p class="dropMenu" model="course">课程</p>
                            <p class="dropMenu" model="ask">问题</p>
                            <p class="dropMenu" model="experience">经验</p>
                        </div>
                    </form>
                </div>
                <script type="text/javascript">
                    function OnClickDownMuen() {
                        $('#MuenNavDown').toggle();
                    }
                    $(document).ready(function() {
                        $('.dropMenu').click(function() {
                            $('#DownText').html($(this).html());
                            $('#search-model').val($(this).attr('model'));
                            $('#MuenNavDown').toggle();
                        })
                        $('#search-submit').click(function() {
                            $('#search-form').submit();
                        })
                    })

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
                <div class="adBlock"><img src="<?php echo Yii::app()->request->baseUrl ?>/images/corese_ad.png" width="308" height="270" /></div>

                <ul class="CourseLogin block"  id="MenberLogins">
                    <?php if (Yii::app()->user->isGuest) { ?>
                        <form action="" method="" id="login-form">
                            <span class="login-info"></span>
                            <li class="TT1">用户名</li><li class="TT2"><input type="text" name="username"/></li>
                            <li class="TT1">密&nbsp;&nbsp;&nbsp;&nbsp;码</li><li class="TT2"><input type="password" name="password"/></li>
                            <li class="TT3">
                                <a href="javascript:;" class="login-submit">登录  </a>   
                                <a href="<?php echo Yii::app()->createUrl('index/register'); ?>">马上注册</a>     
                                <a href="<?php echo Yii::app()->createUrl('index/reset') ?>">忘记密码？</a>
                            </li>
                            <li class="TT4">
                                <p class="PP1">社交工具登录</p>
                                <p class="PP2">
                                    <a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/G1.png" /></a>
                                    <a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/G2.png" /></a>
                                </p> 
                            </li>
                        </form>
                    <?php } else { ?>
                        <?php $user = Users::model()->findByPk(Yii::app()->user->id); ?>
                        <div class="CourseLoginInfo" id="MenberInfos">
                            <div class="Lefts"><a href="#"><img src="<?php echo Yii::app()->request->baseUrl . '/' . $user->thumb; ?>"width="55px" /></a></div>
                            <div class="Rights"> 
                                <ul class="CourseLoginInfoText">
                                    <li class="TT1">
                                        <p class="PP1"><span><?php if ($user->level == 1) echo '普通';if ($user->level == 2) echo '高级'; ?>会员</span> <?php echo Yii::app()->user->name ?></p> 
                                    </li>

                                    <li class="TT2">积分:<?php echo $user->score; ?><br/><a href="#">查看积分规则</a></li>  
                                </ul>
                            </div>
                            <div class="Centers">
                                <a href="<?php echo Yii::app()->createUrl('member/info', array('id' => $user->id)) ?>" target="_blank">我的资料</a>
                                <a href="<?php echo Yii::app()->createUrl('member/score', array('id' => $user->id)) ?>" target="_blank">我的积分</a>
                                <a href="<?php echo Yii::app()->createUrl('member/index', array('id' => $user->id)) ?>" target="_blank">我的主页</a>
                                <a href="<?php echo Yii::app()->createUrl('member/message', array('id' => $user->id)) ?>" target="_blank">消息</a>
                                <a href="<?php echo Yii::app()->createUrl('index/logout'); ?>">退出  </a> 
                            </div>
                        <?php } ?>

                </ul>

                <?php
                if ($this->getAction()->getId() == 'detail' && Yii::app()->controller->id == 'course')
                    $this->widget('PriceWidget', array('course' => $this->data['course']));
                ?>

<?php $this->widget('RecommendListWidget') ?>

                <div class="adBlock">
<?php $this->widget('AdWidget'); ?>
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
            $('.login-submit').click(function() {
                var data = $('#login-form').serialize();
                var url = "<?php echo Yii::app()->createUrl('index/login'); ?>";
                $.post(url, data, function(result) {
                    $('.login-info').html(result);
                })
            });
            $(".zhixuanAgree").bind("click", function() {
                var id = $(this).attr('value');
                var type = $(this).attr('type');
                var $this = $(this);
                data = {"id": id, "type": type}
                url = "<?php echo Yii::app()->createUrl('index/agree') ?>";
                $.post(url, data, function(data) {
                    $this.children('span').html(data);
                });
            });

            $(".zhixuanLove").bind("click", function() {
                var id = $(this).attr('value');
                var type = $(this).attr('type');
                var $this = $(this);
                data = {"id": id, "type": type}
                url = "<?php echo Yii::app()->createUrl('index/love') ?>";
                $.post(url, data, function(data) {
                    $this.children('span').html(data);
                });
            });
        </script>
    </body>
</html>
