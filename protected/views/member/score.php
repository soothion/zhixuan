<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/member.css" />
<div class="InTitle"><h1>会员空间</h1></div>

<div class="memberContentWrapper" id="contentWrapper">
    <?php $this->widget('MemberWidget');?>

    <div class="userTitle"><h2><a href="###">我的积分</a></h2></div>
    <div class="userConWrap">
        <table width="600" border="0" cellspacing="0" cellpadding="0" class="commTable scoresList">
            <?php 
            if(!$list) echo '暂无信息';else
            foreach($list as $v){?>
            <tr>
                <td class="date"><?php echo date('Y-m-d',strtotime($v->addtime));?></td>
                <td class="tit"><?php echo $v->action?></td>
                <td class="status">剩余积分：<?php echo $v->score;?></td>
            </tr>
            <?php }?>
        </table>
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

    
</div>

<div id="score_detail" style="display:none;">
    <table width="480" border="0" cellspacing="4" cellpadding="8">
        <tr>
            <td><span >发布评论</span></td>
            <td>+5</td>
        </tr>
        <tr>
            <td><span >发布经验</span></td>
            <td>+20</td>
        </tr>
        <tr>
            <td><span class="PP2">解答困惑</span></td>
            <td>+100</td>
        </tr>
    </table>
</div>

