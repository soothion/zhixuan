<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
Yii::app()->bootstrap->register();//载入boostrap
?>

<div class="container">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div id="mainmenu">
            <?php $this->widget('bootstrap.widgets.TbNavbar', array(
                'type'=>'inverse', // null or 'inverse'
                'brand'=>'智选后台管理系统',
                'brandUrl'=>array('/admin'),
                'collapse'=>true, // requires bootstrap-responsive.css
                'items'=>array(
                    array(
                        'class'=>'bootstrap.widgets.TbMenu',
                        'items'=>array(
                            array('label'=>'用户管理', 'url'=>array('/admin/users/index')),
                            array('label'=>'课程管理', 'url'=>'/admin/course/index', 'items'=>array(
                                array('label'=>'课程列表', 'url'=>array('/admin/course/index')),
                                array('label'=>'课程添加', 'url'=>array('/admin/course/create')),
                            )),
                            array('label'=>'问答管理', 'url'=>'/admin/ask/index', 'items'=>array(
                                array('label'=>'问答列表', 'url'=>array('/admin/ask/index')),
                            )),
                            array('label'=>'答案管理', 'url'=>array('/admin/answer/index')),
                            array('label'=>'经验管理', 'url'=>'/admin/experience/index', 'items'=>array(
                                array('label'=>'经验列表', 'url'=>array('/admin/experience/index')),
                                array('label'=>'经验添加', 'url'=>array('/admin/experience/create')),
                            )),
                            array('label'=>'广告管理', 'url'=>'/admin/ads/index', 'items'=>array(
                                array('label'=>'广告列表', 'url'=>array('/admin/ads/index')),
                                array('label'=>'广告添加', 'url'=>array('/admin/ads/create')),
                            )),
                            array('label'=>'文章管理', 'url'=>'/admin/article/index', 'items'=>array(
                                array('label'=>'文章列表', 'url'=>array('/admin/article/index')),
                                array('label'=>'文章添加', 'url'=>array('/admin/article/create')),
                            )),
                            array('label'=>'评论管理', 'url'=>array('/admin/comment/index')),
                            array('label'=>'管理员管理', 'url'=>'/admin/admin/index', 'items'=>array(
                                array('label'=>'管理员列表', 'url'=>array('/admin/admin/index')),
                                array('label'=>'管理员添加', 'url'=>array('/admin/admin/create')),
                                array('label'=>'退出系统', 'url'=>array('/admin/admin/create')),
                            )),
                        ),
                    ),
                ),
            )); ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
