<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class AdWidget extends CWidget {
    public function run() {
        $ad = Ads::model()->findAll();
        $index = rand(0, count($ad)-1);
        $this->render('ad',array(
            'ad'=>$ad[$index],
        ));
    }

}
