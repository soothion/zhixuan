<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/member.css" />
<script>
    $(function() {
        var tabTitle = ".memberTabs li";
        var tabContent = ".dd";
        $(tabTitle + ":first").addClass("current");
        $(tabContent).not(":first").hide();
        $(tabTitle).unbind("click").bind("click", function() {
            $(this).siblings("li").removeClass("current").end().addClass("current");
            var index = $(tabTitle).index($(this));
            $(tabContent).eq(index).siblings(tabContent).hide().end().fadeIn(0);
        });
    });
</script>
<div class="InTitle"><h1>会员空间</h1></div>

<div class="memberContentWrapper" id="contentWrapper">
    <?php $this->widget('MemberWidget'); ?>
    <div class="userInfoWrap">
        <form action="" method="post" enctype="multipart/form-data">
        <ul class="memberTabs">
            <li ><a href="###">编辑个人资料</a></li>
            <li><a href="###">绑定设置</a></li>
        </ul>
        <div class="userInfoDetailContainer clearfix dd">
            <div class="userInfoMain">   
                <div class="userPhotoSelector">
                    <span class="tit">更改头像：</span>
                    <span class="photo"><img src="<?php echo Yii::app()->baseUrl . '/' . $user->thumb ?>" width="70"/></span>
                    <div class="control">
                        <input type="file" value="选择文件" name="thumb" class="BtnFile" style="width:200px;background:none;color:inherit;" />
                        <br/>
                        仅支持JPG,GIF,BMP,JPRG,PNG格式， 
                        大小不超过1M    </div>
                </div>
                <ul class="userInfoListing">
                    <li>
                        <span class="tit">用户名：</span>
                        <span class="infoEditor"><input name="set[username]" type="text" value="<?php echo $user->username ?>" class="inp"/></span>
                    <li>
                        <span class="tit">邮箱：</span>
                        <span class="infoEditor"><input name="set[email]" type="text" value="<?php echo $user->email ?>" class="inp"/></span>
                        <span class="hide">隐藏<input type="checkbox" name="set[config][0]" <?php if($config[0]) echo 'checked';?>/></span>     </li>  
                    <li>
                        <span class="tit">原始密码：</span>
                        <span class="infoEditor"><input name="set[oldpassword]" type="password" value="" class="inp"/></span>
                    </li>
                    <li>
                        <span class="tit">新密码：</span>
                        <span class="infoEditor"><input name="set[newpassword]" type="password" value="" class="inp"/></span>
                    </li>
                </ul>
            </div>

            <div class="userInfoSide">
                <ul class="userInfoListing">
                    <li>
                        <span class="tit">真实姓名：</span>
                        <span class="infoEditor"><input name="set[name]" type="text" value="<?php echo $user->name ?>" class="inp"/></span>
                    </li>
                    <li>
                        <span class="tit">一句话描述：</span>
                        <span class="infoEditor"><input name="set[introduction]" type="text" value="<?php echo $user->introduction; ?>" class="inp"/></span>
                    </li>
                    <li class="desp">
                        <span class="tit">专业描述：</span>
                        <span class="infoEditor"><textarea  class="inp" name="set[major]"><?php echo $user->major ?></textarea>
                        </span>

                    </li>
                    <li>
                        <span class="tit">就职单位：</span>
                        <span class="infoEditor"><input name="set[company]" type="text" value="<?php echo $user->company ?>" class="inp"/></span>
                        <span class="hide">隐藏<input type="checkbox" name="set[config][1]" <?php if($config[1]) echo 'checked';?>/></span>     
                    </li>
                    <li>
                        <span class="tit">职位：</span>
                        <span class="infoEditor"><input name="set[job]" type="text" value="<?php echo $user->job ?>" class="inp"/></span>
                        <span class="hide">隐藏<input type="checkbox" name="set[config][2]" <?php if($config[2]) echo 'checked';?>/></span>     
                    </li> 
                    <li>
                        <span class="tit">年龄：</span>
                        <span class="infoEditor">
                            <input name="set[age]" type="text" value="<?php echo $user->age; ?>" class="inp"/></span>
                        <span class="hide">隐藏<input type="checkbox" name="set[config][3]" <?php if($config[3]) echo 'checked';?>/></span>     
                    </li>
                    <li>
                        <span class="tit">手机：</span>
                        <span class="infoEditor">
                            <input name="set[tel]" type="text" value="<?php echo $user->tel ?>" class="inp"/></span>
                        <span class="hide">隐藏<input type="checkbox" name="set[config][4]" <?php if($config[4]) echo 'checked';?>/></span>     
                    </li>
                    <li>
                        <span class="tit">QQ：</span>
                        <span class="infoEditor">
                            <input name="set[qq]" type="text" value="<?php echo $user->qq; ?>" class="inp"/></span>
                        <span class="hide">隐藏<input type="checkbox" name="set[config][5]" <?php if($config[5]) echo 'checked';?>/></span>     
                    </li>  
                </ul>
            </div>
        </div>

        <div class="accountBinding dd">
            <ul class="userInfoListing">
                <li>
                    <span class="tit">新浪微博 </span>
                    <span class="infoEditor"><input name="set[sina]" type="text" value="<?php echo $user->sina ?>" class="inp"/></span>

                </li>  
                <li>
                    <span class="tit">腾讯QQ </span><span class="change">
                        <input name="set[qq]" type="text" value="<?php echo $user->qq; ?>" /></span></li>  
                <li>
                    <span class="tit">人人网</span><span class="change">
                        <input name="set[renren]" type="text" value="<?php echo $user->renren ?>" /></span></li>
            </ul>
        </div>
        <div style="margin-left:130px;"><input type="submit" value="保存"/></div>
        </form>
    </div>



</div>


