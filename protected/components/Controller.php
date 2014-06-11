<?php

/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController {

    /**
     * @var string the default layout for the controller view. Defaults to '//layouts/column1',
     * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
     */
    public $layout = '//layouts/column1';

    /**
     * @var array context menu items. This property will be assigned to {@link CMenu::items}.
     */
    public $menu = array();

    /**
     * @var array the breadcrumbs of the current page. The value of this property will
     * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
     * for more details on how to specify this property.
     */
    public $breadcrumbs = array();
    public $data = array();

    public function checkAuth($action,$id=0) {
        if (!$id){
            $id=Yii::app()->user->id;
            if(!$id)
                return false;
        }
        $user = Users::model()->findByPk($id);
        if (!$user->auth == '') {
            $auth = explode('|', $user->auth);
        } else {
            $config = Config::model()->find();
            if ($user->level == 1)
                $auth = explode('|', $config->auth1);
            else if ($user->level == 2)
                $auth = explode('|', $config->auth2);
        }
        if (in_array($action, $auth))
            return true;
        else
            return false;
    }

    public function message($message = '成功', $url = 'javascript:history.back();', $status = 'success', $time = 3) {

        $back_color = '#ff0000';

        if ($status == 'success') {
            $back_color = 'blue';
        }

        if (is_array($url)) {
            $route = isset($url[0]) ? $url[0] : '';
            $url = $this->createUrl($route, array_splice($url, 1));
        }
        if ($url) {
            $url = "window.location.href='{$url}'";
        } else {
            $url = "history.back();";
        }
        echo <<<HTML
        <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
        <html xmlns="http://www.w3.org/1999/xhtml"><head>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
        <div>
        <div style="background:#C9F1FF; margin:0 auto; height:100px; width:600px; text-align:center;">
                    <div style="margin-top:50px;">
                    <h5 style="color:{$back_color};font-size:14px; padding-top:20px;" >{$message}</h5>
                    页面正在跳转请等待<span id="sec" style="color:blue;">{$time}</span>秒
                    </div>
        </div>
        </div>
                    <script type="text/javascript">
                    function run(){
                        var s = document.getElementById("sec");
                        if(s.innerHTML == 0){
                        {$url}
                            return false;
                        }
                        s.innerHTML = s.innerHTML * 1 - 1;
                    }
                    window.setInterval("run();", 1000);
                    </script>
HTML;
        die;
    }

}
