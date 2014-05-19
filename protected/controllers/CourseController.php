<?php

class CourseController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}
        public function actionDetail()
        {
            $id=$_GET['id'];
            echo $id;
        }
}