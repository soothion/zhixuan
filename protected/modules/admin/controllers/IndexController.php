<?php

class IndexController extends Controller {

    public function actionIndex() {
        $model = Config::model()->findByPk(1);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Config'])) {
            $model->attributes = $_POST['Config'];
            $model->id=1;
            if ($model->save())
                $this->redirect(array('index', 'id' => $model->id));
        }

        $this->render('index', array(
            'model' => $model,
        ));
    }
    
    

}
