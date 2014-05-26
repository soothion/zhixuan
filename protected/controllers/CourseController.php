<?php

class CourseController extends Controller {

    public function actionIndex() {
        //首页推荐教程
        $recommendCourseCriteria = new CDbCriteria();
        $recommendCourseCriteria->order = 'recommend desc, addtime desc, id desc';
        $recommendCourse = Course::model()->find($recommendCourseCriteria);


        //首页教程列表
        $courseCriteria = new CDbCriteria();
        if (isset($_GET['filter'])) {
            $filter = explode('-', $_GET['filter']);
            if (!(int) $filter[0] == '0') {
                $courseCriteria->addCondition("tid=:tid");
                $courseCriteria->params[':tid'] = $filter[0];
            }
            if (!$filter[1] == '0') {
                $courseCriteria->addCondition('tag like :tag');
                $courseCriteria->params[':tag'] = '%' . $filter[1] . '%';
            }
        } else
            $filter = array(0, 0);
        $courseCriteria->limit = 6;
        $courseCriteria->order = 'recommend desc, addtime desc, id desc';
        $courseCount = Course::model()->count($courseCriteria);
        $pages = new CPagination($courseCount);
        $pages->pageSize = 6;
        $pages->applyLimit($courseCriteria);
        $courseList = Course::model()->findAll($courseCriteria);
        $courseCount = Course::model()->count();

        //获取所有分类
        $type = CourseType::model()->findAll();

        $tag = explode(' ', Tag::model()->find()->course);
        //渲染视图
        $this->render('index', array(
            'filter' => $filter,
            'recommendCourse' => $recommendCourse,
            'courseList' => $courseList,
            'courseCount' => $courseCount,
            'pages' => $pages,
            'type' => $type,
            'tag' => $tag,
        ));
    }

    public function actionDetail() {
        $id = $_GET['id'];
        $flag = 0; //是否允许浏览
        $course = Course::model()->findByPk($id);
        if ($course->free == 2) {
            if ($uid = Yii::app()->user->id) {
                if (Order::model()->find('cid=:cid AND uid=:uid AND status=1', array(':cid' => $id, 'uid' => $uid)))
                    $flag = 1; //设置允许浏览
            }
        }
        else {
            $flag = 1;
        }

        //获取下一篇课程
        $nextCDbCriteria = new CDbCriteria();
        $nextCDbCriteria->addCondition('id>:id');
        $nextCDbCriteria->order = 'id';
        $nextCDbCriteria->params = array(':id' => $id);
        $next = Course::model()->find($nextCDbCriteria);
        //获取上一篇课程
        $prevCDbCriteria = new CDbCriteria();
        $prevCDbCriteria->addCondition('id<:id');
        $prevCDbCriteria->order = 'id desc';
        $prevCDbCriteria->params = array(':id' => $id);
        $prev = Course::model()->find($prevCDbCriteria);

        //获取评论信息
        $commentCDbCriteria = new CDbCriteria();
        $commentCDbCriteria->addCondition('cid=:id');
        $commentCDbCriteria->params = array(':id' => $id);
        $commentCDbCriteria->order = 'addtime';
        $comment = Comment::model()->findAll($commentCDbCriteria);

        $this->data['course'] = $course;
        $this->render('detail', array(
            'course' => $course,
            'next' => $next,
            'prev' => $prev,
            'comment' => $comment,
            'model' => Comment::model(),
            'flag' => $flag,
        ));
    }

    public function actionComment() {
        //获取评论信息
        $id = $_GET['id'];
        $flag = 0; //是否允许浏览
        $course = Course::model()->findByPk($id);
        if ($course->free == 2) {
            if ($uid = Yii::app()->user->id) {
                if (Order::model()->find('cid=:cid AND uid=:uid AND status=1', array(':cid' => $id, 'uid' => $uid)))
                    $flag = 1; //设置允许浏览
            }
        }
        else {
            $flag = 1;
        }
        if (!$flag) {
            echo '购买后才能浏览！';
            die;
        }
        if (isset($_POST['content'])) {
            $comment = new Comment;
            $comment->content = $_POST['content'];
            $comment->cid = $id;
            $comment->uid = Yii::app()->user->id;
            $comment->save();
        }
        $commentCDbCriteria = new CDbCriteria();
        $commentCDbCriteria->addCondition('cid=:id');
        $commentCDbCriteria->params = array(':id' => $id);
        $commentCDbCriteria->order = 'addtime';
        $count = Comment::model()->count("cid=$id");
        $pages = new CPagination($count);
        $pages->pageSize = 20;
        $pages->applyLimit($commentCDbCriteria);
        $comment = Comment::model()->findAll($commentCDbCriteria);
        $this->renderPartial('comment', array(
            'comment' => $comment,
            'pages' => $pages,
        ));
    }

    public function actionOrder() {
        if (!Yii::app()->user->id)
            $this->redirect(array('index'));
        $id = $_GET['id'];
        $type = $_GET['type'];
        $course = Course::model()->findByPk($id);
        $this->render('order', array(
            'course' => $course,
        ));
    }

    public function actionPay() {
        $id = $_POST['id'];
        $uid = Yii::app()->user->id;
        $user = Users::model()->findByPk($uid);
        $model = $_POST['model']; //1为现金支付，2为积分支付
        $type = $_POST['type']; //1为点播价购买，2为优先权价格购买
        $course = Course::model()->findByPk($id);
        $price = $course->price;
        $criteria = new CDbCriteria;
        $criteria->condition = 'cid=:cid';
        $criteria->addCondition('uid=:uid');
        $criteria->addCondition('type=:type');
        $criteria->addCondition('model=:model');
        $criteria->params = array(':cid' => $id, ':uid' => $uid, ':type' => $type, ':model' => $model);
        if ($order = Order::model()->find($criteria)) {
            if ($order->status == 1) {
                $this->message('您已经购买过此产品！', Yii::app()->createUrl('course/detail', array('id' => $id)));
            }
        } else {
            //创建订单
            $order = new Order;
            $order->id = $id . '-' . $uid . '-' . $type . '-' . $model . '-' . time();
            $order->cid = $id;
            $order->uid = $uid;
            $order->type = $type;
            $order->model = $model;
            $order->price = $price;
            $order->status = 2; //1为已经付款，2为未付款
            $order->save();
        }
        if ($model == 2)
            $price = $price * 2;
        if ($model == 1) {
            //支付宝帐号：shzhixuan12580@163.com
            //合作者身份（pid): 2088901946732788 
            //安全校验码: 1gkmskldwz03m6rnm0wpl53g41j52bd7
            Yii::import('application.extensions.payment.Alipay');
            $alipay = new Alipay();
            $parameter = array(
                "service" => "create_direct_pay_by_user",
                "partner" => '2088901946732788',
                "payment_type" => 1,
                "notify_url" => Yii::app()->createUrl('course/notify'),
                "return_url" => Yii::app()->createUrl('course/return'),
                "seller_email" => 'shzhixuan12580@163.com',
                "out_trade_no" => $order->id,
                "subject" => "购买课程：" . $course->title,
                "total_fee" => $price,
                "body" => "购买课程：" . $course->title,
            );
            $security_code = '1gkmskldwz03m6rnm0wpl53g41j52bd7';
            $parameter['subject'] = "购买课程：" . $course->title;
            $parameter['total_fee'] = $price;
            $parameter['body'] = "购买课程：" . $course->title;
            $alipay->AlipayService($parameter, $security_code, 'MD5');
            $this->redirect($alipay->create_url());
        }
        if ($model == 2) {
            $price = $course->price / Yii::app()->params['score']['toRMB'];
            if ($price > $user->score) {
                throw new CHttpException(400, '积分不足！');
            } else {
                $score = new Score;
                $score->uid = $uid;
                $score->action = '购买课程：' . $course->title . '.-消耗积分' . $price;
                $score->score = Users::model()->findByPk($uid)->score - $price;

                $user->score = $score->score;
                $user->save();

                $order->status = 1;
                if ($score->save() && $user->save() && $order->save())
                    $this->message('购买成功！', Yii::app()->createUrl('course/detail', array('id' => $id)));
                else
                    $this->message('购买失败！', Yii::app()->request->requestUri);
            }
        }
    }

    public function actionReturn() {
        $alipay = Yii::app()->alipay;
        if ($alipay->verifyReturn()) {
            $order_id = $_GET['out_trade_no'];
            $order_fee = $_GET['total_fee'];

            if ($_GET['trade_status'] == 'TRADE_FINISHED' || $_GET['trade_status'] == 'TRADE_SUCCESS') {
                $order_id = explode('-', $order_id);
                $cid = $order_id[0];
                $uid = $order_id[1];
                $type = $order_id[2];
                $model = $order_id[3];
                $criteria = new CDbCriteria;
                $criteria->condition = 'cid=:cid';
                $criteria->addCondition('uid=:uid');
                $criteria->addCondition('type=:type');
                $criteria->addCondition('model=:model');
                $criteria->params = array(':cid' => $id, ':uid' => $uid, ':type' => $type, ':model' => $model);
                $order = Order::model()->find($criteria);
                if (!$order)
                    $this->message('订单不存在！');
                else {
                    $order->status = 1;
                    if ($order->save)
                        $this->message('交易成功！');
                    else
                        $this->message('交易失败，请联系管理员！');
                }
            } else {
                echo "trade_status=" . $_GET['trade_status'];
            }
        } else {
            $this->message("交易失败！");
        }
    }

    // Server side notification
    public function actionNotify() {
        $alipay = Yii::app()->alipay;
        if ($alipay->verifyReturn()) {
            $order_id = $_GET['out_trade_no'];
            $order_fee = $_GET['total_fee'];

            if ($_GET['trade_status'] == 'TRADE_FINISHED' || $_GET['trade_status'] == 'TRADE_SUCCESS') {
                $order_id = explode('-', $order_id);
                $cid = $order_id[0];
                $uid = $order_id[1];
                $type = $order_id[2];
                $model = $order_id[3];
                $criteria = new CDbCriteria;
                $criteria->condition = 'cid=:cid';
                $criteria->addCondition('uid=:uid');
                $criteria->addCondition('type=:type');
                $criteria->addCondition('model=:model');
                $criteria->params = array(':cid' => $id, ':uid' => $uid, ':type' => $type, ':model' => $model);
                $order = Order::model()->find($criteria);
                if (!$order)
                    $this->message('订单不存在！');
                else {
                    $order->status = 1;
                    if ($order->save)
                        $this->message('交易成功！');
                    else
                        $this->message('交易失败，请联系管理员！');
                }
            } else {
                echo "trade_status=" . $_GET['trade_status'];
            }
        } else {
            $this->message("交易失败！");
        }
    }

}
