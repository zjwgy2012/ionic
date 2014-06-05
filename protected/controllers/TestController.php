<?php
/**
 * @author: zhangjingwei <zjwxiaobei@gmail.com>
 * @create_time: 2014-03-12
 * @description: 首页
 */

class TestController extends CController{

	public function actionIndex()
    {
        echo '<pre>';echo 1111;
        //print_r(Yii:app()->request);
		//$this->render('site');
	}


}
