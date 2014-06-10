<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class PriceWidget extends CWidget {
    public $course;
    public function run() {
        if($this->course->price)
        $this->render('price',array('course'=>$this->course));
    }

}
