/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var zhixuan={};
zhixuan.agreeFlag=0;
zhixuan.loveFlag=0;
zhixuan.agree=function(type,id){
    if(type=='ask'){
        data={"aid":id};
        url="<?php echo Yii::app()->createUrl('ask/agree')?>";
        $.post(url,data,function(result){
            alert(result);
        });
    }
}
