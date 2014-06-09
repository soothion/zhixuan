<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBddC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="en" />

        <!-- blueprint CSS framework -->
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/admin/style.css" media="screen, projection" />

        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    </head>

    <body>
        <?php
        Yii::app()->bootstrap->register(); //载入boostrap
        ?>
      
        
        <div class="mainmenu">
            <dl>
                <dt>内容管理</dt>
                <dd <?php if (Yii::app()->controller->getId() == 'users'): ?>class="current"<?php endif; ?>><a href="<?php echo $this->createUrl('/admin/users/index'); ?>" >用户管理</a></dd>
                <dd <?php if (Yii::app()->controller->getId() == 'course'): ?>class="current"<?php endif; ?>><a href="<?php echo $this->createUrl('/admin/course/index'); ?>" >课程管理</a></dd>
                <dd <?php if (Yii::app()->controller->getId() == 'ask'): ?>class="current"<?php endif; ?>><a href="<?php echo $this->createUrl('/admin/ask/index'); ?>" >问答管理</a></dd>
                <dd <?php if (Yii::app()->controller->getId() == 'answer'): ?>class="current"<?php endif; ?>><a href="<?php echo $this->createUrl('/admin/answer/index'); ?>" >答案管理</a></dd>
                <dd <?php if (Yii::app()->controller->getId() == 'experience'): ?>class="current"<?php endif; ?>><a href="<?php echo $this->createUrl('/admin/experience/index'); ?>">经验管理</a></dd>
                <dd <?php if (Yii::app()->controller->getId() == 'comment'): ?>class="current"<?php endif; ?>><a href="<?php echo $this->createUrl('/admin/comment/index'); ?>">评论管理</a></dd>
                <dd <?php if (Yii::app()->controller->getId() == 'ads'): ?>class="current"<?php endif; ?>><a href="<?php echo $this->createUrl('/admin/ads/index'); ?>">广告管理</a></dd>
                <dd <?php if (Yii::app()->controller->getId() == 'article'): ?>class="current"<?php endif; ?>><a href="<?php echo $this->createUrl('/admin/article/index'); ?>">文章管理</a></dd>
            </dl>
            <dl>
                <dt>系统管理</dt>
                <dd <?php if (Yii::app()->controller->getId() == 'index'): ?>class="current"<?php endif; ?>><a href="<?php echo $this->createUrl('/admin/index/index'); ?>" >系统设置</a></dd>
                <dd <?php if (Yii::app()->controller->getId() == 'admin'): ?>class="current"<?php endif; ?>><a href="<?php echo $this->createUrl('/admin/admin/index'); ?>" >管理员管理</a></dd>
                <dd><a href="<?php echo $this->createUrl('/admin/admin/index'); ?>" >更改密码</a></dd>
                <dd><a href="<?php echo $this->createUrl('/admin/admin/logout'); ?>" >退出系统</a></dd>

            </dl>
        </div>
        <div class="right">    
            <div class="container">

                <?php if (isset($this->breadcrumbs)): ?>
                    <?php
                    $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
                        'links' => $this->breadcrumbs,
                    ));
                    ?><!-- breadcrumbs -->
                <?php endif ?>

                <?php echo $content; ?>

                <div class="clear"></div>


            </div><!-- page -->
        </div>

    </body>
</html>
