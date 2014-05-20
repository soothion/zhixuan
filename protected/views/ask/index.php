 <script type="text/javascript" charset="utf-8" src="<?php echo Yii::app()->request->baseUrl; ?>/js/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="<?php echo Yii::app()->request->baseUrl; ?>/js/ueditor/ueditor.all.min.js"> </script>
    <script type="text/javascript" charset="utf-8" src="<?php echo Yii::app()->request->baseUrl; ?>/js/ueditor/lang/zh-cn/zh-cn.js"></script>
<div class="InTitle"><h1>有问必答</h1></div>
<div class="IndexContent" id="contentWrapper">
 <div class="mainPanel">
  <div class="ProblemEdit">
   <div class="Lefts"> 
    <script id="editor" type="text/plain" style="width:420px;height:125px;"></script>
    <script type="text/javascript">
    var ue = UE.getEditor('editor');
    </script>
   </div>
   <div class="Rights">
    <ul class="ProblemSelect">
     <li class="TT1">
      <p class="PP1">提交分类</p>
      <p class="PP2">
       <select name="type" id="ask-type"><option>请选择</option><?php foreach ($type as $v) {?>
        <option value="<?php echo $v->id?>"><?php echo $v->title?></option>
       <?php }?></select>
      </p> 
     </li>
     <li class="TT1">
      <p class="PP1">添加标签</p>
      <p class="PP2">
       <input type="text" name="tag" id="ask-tag"/>
      </p>
     </li>
     <li class="TT2">多个标签请用空格隔开。</li>
     <li class="TT3">
      您在注册后才能提交问题。<br/>
      有问必答，24小时内给予解惑。
     </li>
     <li class="TT4"> 
      <input type="button" value="提交" id="ask-submit"/>
     </li>
    </ul>
    <script>
        $(document).ready(function(){
          $('#ask-submit').click(function(){
              var content=UE.getEditor('editor').getContent();
              var type=$('#ask-type').val();
              var tag=$('#ask-tag').val();
              var data={"content":content,"type":type,"tag":tag};

              $.post("<?php echo Yii::app()->createUrl('ask/ask')?>", data, function(data){
                 location.reload();
              });

          });
        })
    </script>
   </div>
  </div> 
  <div class="questHeader">
   <p class="questNav">
       <a href="<?php echo Yii::app()->createUrl('ask',array('filter'=>'0-0'))?>">所有困惑(<?php echo $askCount?>)</a>
   </p>
   <p class="questCategory">
    分类：<?php foreach($type as $v){
       echo '<a href="'.Yii::app()->createUrl('ask', array('filter'=>$v->id.'-'.$filter[1])).'">'.$v->title.'</a> ';
         }?><br/>
    标签：
   </p>
  </div>
     <?php foreach($askList as $v){?>
  <div class="questWrapper">
    <ul class="questListing">
      <li>
        <h3><a href="<?php echo Yii::app()->createUrl('ask/detail',array('id'=>$v->id));?>"><?php echo Helper::truncate_utf8_string($v->content,32)?></a></h3>
        <p class="intro"> <span><?php echo ($v->user->username);?></span> 
            发布于 <?php echo date('Y-m-d H:m:s',  strtotime($v->addtime))?> 
            分类：<span><?php echo $v->type->title?></span> 
            标签：<span><?php echo $v->tag?></span> 
            评论 (<?php echo count($v->comment)?>) </p>
        <p class="ctrl"> <span class="SP1"><a href="#">同感受 (<?php echo $v->agree;?>)</a></span> <span class="SP2"><a href="#">回复</a></span> </p>
      </li>
    </ul>
  </div>
     <?php }?>

<?php
    $this->widget('CLinkPager', array(
        'header' => '',
        'firstPageLabel' => '首页',
        'lastPageLabel' => '末页',
        'prevPageLabel' => '上一页',
        'nextPageLabel' => '下一页',
        'pages' => $pages,
        'maxButtonCount' => 6,
        'htmlOptions' => array('class' => 'list-page Pages'),
            )
    );
?>



 </div>
 <div class="sideBar">
   <ul class="CourseLogin block"  id="MenberLogins">
   <li class="TT1">用户名</li><li class="TT2"><input type="text" /></li>
   <li class="TT1">密&nbsp;&nbsp;&nbsp;&nbsp;码</li><li class="TT2"><input type="text" /></li>
   <li class="TT3">
    <a href="javascript:OnClickLogin()">登录  </a>   
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
  </ul>
  <script type="text/javascript">
      function OnClickLogin() {
          document.getElementById("MenberInfos").style.display = "";
          document.getElementById("MenberLogins").style.display = "none";
      }
  </script>
 <div class="CourseLoginInfo block" id="MenberInfos" style=" display:none">
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
</div>
