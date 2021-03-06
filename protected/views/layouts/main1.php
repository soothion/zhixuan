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
                    <form action="<?php echo Yii::app()->createUrl('index/search')?>" method="get" id="search-form">
                        <input type="hidden" name="model" id="search-model" value="course"/>
                    <p class="searchType" onclick="OnClickDownMuen()">
                        <span id="DownText">课程</span> 
                    </p>
                        <p class="keyword"><input type="text" name="key" /></p>
                    <p class="btnSearch"><input type="image" src="<?php echo Yii::app()->request->baseUrl?>/images/Seach.png" id="search-submit" /></p> 

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
                    $(document).ready(function(){
                        $('.dropMenu').click(function(){
                            $('#DownText').html($(this).html());
                            $('#search-model').val($(this).attr('model'));
                            $('#MuenNavDown').toggle();
                        })
                        $('#search-submit').click(function(){
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
