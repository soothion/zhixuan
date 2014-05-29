
<link href="<?php echo Yii::app()->request->baseUrl ?>/css/member.css" rel="stylesheet" type="text/css" />
<div class="InTitle clearfix"><div class="getPwdFlow fr"><ul>
            <li class="<?php if ($step == 1) echo 'focus' ?>"><span>1</span>输入帐户名和邮箱        </li>
            <li class="<?php if ($step == 2) echo 'focus' ?>"> <span>2</span>重置密码     </li>
            <li>       <span>3</span>完成</li>
        </ul></div> <h1 class="png">找回密码</h1>
</div>
<div class="MenberContent" id="contentWrapper">
    <div class="conWrap">
        <form action="" method="post">
            <?php if ($step == 1) { ?>
                <ul class="MenberLoginWrite"><li class="TT1">
                        <p class="PP1">*用户名：</p>
                        <p class="PP2"><input type="text" name="reset[username]"/></p> 
                    </li>
                    <li class="TT5"><!--备注文字--></li>

                    <li class="TT1">
                        <p class="PP1">*邮箱：</p>
                        <p class="PP2"><input type="text" name="reset[email]" /></p>
                    </li>

                    <li class="TT2"> 
                        <input type="submit" value="提交" class="BtnJiao" />
                    </li>
                </ul>  
            <?php } ?>


            <?php if ($step == 2) { ?>
                <ul class="MenberLoginWrite"><li class="TT1">
                        <p class="PP1">新密码：</p>
                        <p class="PP2"><input type="password" name="reset[password]"/></p> 
                    </li>
                    <li class="TT5"><!--备注文字--></li>

                    <li class="TT1">
                        <p class="PP1">确认密码：</p>
                        <p class="PP2"><input type="password" name="reset[repeat]" /></p>
                    </li>

                    <li class="TT2"> 
                        <input type="submit" value="提交" class="BtnJiao" />
                    </li>
                </ul>  
            <?php } ?>



        </form>
    </div>
</div>
