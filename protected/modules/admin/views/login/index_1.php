<div class="header">
    <div class="logo"></div>
</div>
<div class="middle">
    <div class="container">
        <p class="block-heading"><i class="glyphicon glyphicon-user"></i> 管理员登陆</p>
        <?php $form = $this->beginWidget('CActiveForm',array(
            'id' => 'id-form',
            'action' => $this->createUrl('login'),
            'method' => 'post',
            'enableClientValidation' => true,
            'clientOptions' => array(
                'validateOnSubmit' => true
            ),
            'htmlOptions'=>array(
                'class' => 'form-horizontal',
                'role' => 'form'
            )
        )); ?>
            <div class="form-group">
                <label for="inputUsername" class="col-sm-2 control-label">用户名</label>
                <div class="col-xs-3">
                    <input type="username" class="form-control" id="inputUsername" placeholder="用户名">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword" class="col-sm-2 control-label">密码</label>
                <div class="col-xs-3">
                    <input type="password" class="form-control" id="inputPassword" placeholder="密码">
                </div>
            </div>
            <div class="form-group">
                <label for="inputVerify" class="col-sm-2 control-label">验证码</label>
                <div class="col-xs-2" style="padding-right:0px">
                    <input type="verify" class="form-control" id="inputVerify" placeholder="验证码">
                </div>
                <div class="col-xs-2" style="padding-left:0px">
                    <?php $this->widget('CCaptcha', array('buttonLabel' => '看不清？')); ?>
                </div>
            </div>

            <div class="form-actions">
                <input type="submit" value=" 登 陆 " class="btn btn-primary">
                &nbsp;&nbsp; </div>
        <?php $this->endWidget(); ?>
        <footer>
            © XX市XXXXXXX有限公司 2013
        </footer>
    </div>
</div>