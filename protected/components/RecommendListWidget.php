<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class RecommendListWidget extends CWidget {
    public function run() {
        $listCDbCriteria=new CDbCriteria;
        $listCDbCriteria->limit=5;
        $listCDbCriteria->order='addtime desc';
        $list=  Experience::model()->findAll($listCDbCriteria);
        $this->render('recommendList',array(
            'list'=>$list,
        ));
    }

}
