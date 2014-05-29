<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class MemberWidget extends CWidget {
    public function run() {
        $id=$_GET['id'];
        $user=Users::model()->findByPk($id);
        $this->render('member',array('user'=>$user));
    }

}
