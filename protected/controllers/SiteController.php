<?php
/**
 * @author: zhangjingwei <zjwxiaobei@gmail.com>
 * @create_time: 2014-03-12
 * @description: 首页
 */

class SiteController extends IonicController{

	public function actionIndex()
    {
        $userInfo = array();
        if(Yii::app()->user->isGuest == false)
            $userInfo = unserialize(Yii::app()->user->getState('userInfo'))->attributes;
        $this->render('site',array('userInfo'=>$userInfo));
    }

    public function actionLogin()
    {
        if(Yii::app()->user->isGuest == false)
            $this->redirect('/');
        $errMsg = '';
        $showVerifyCode = 0;
        $ignoreLockout = 0;
        if(isset($_POST['username']) && isset($_POST['password']))
        {
            //验证码验证
            if(isset($_POST['verifyCode']))
            {
                $verifyCode = trim($_POST['verifyCode']);
                if(!empty($verifyCode))
                {
                    if($verifyCode != 1)
                    {
                        $errMsg = '验证码错误';
                        $showVerifyCode = 1;
                    }else
                    {
                        $ignoreLockout = 1;
                    }
                }else
                {
                    $errMsg = '验证码不能为空';
                    $showVerifyCode = 1;
                }
            }
            if(empty($errMsg) && empty($showVerifyCode))
            {
                $username = trim($_POST['username']);
                $password = trim($_POST['password']);
                if(!empty($username) && !empty($password))
                {
                    $identity = new UserIdentity($username,$password);
                    $identity->authenticate($ignoreLockout=1);
                    if($identity->errorCode===UserIdentity::ERROR_NONE)
                    {
                        $duration=isset($_POST['rememberMe']) ? 3600*24*7 : 0; // 7 days
                        Yii::app()->user->login($identity,$duration);
                        $this->redirect('/');
                    }elseif($identity->errorCode===UserIdentity::ERROR_USERNAME_INVALID)
                    {
                        $errMsg = '该用户名不存在';
                    }elseif($identity->errorCode===UserIdentity::ERROR_PASSWORD_INVALID)
                    {
                        if($ignoreLockout)
                        {
                            $showVerifyCode = 1;
                        }
                        $errMsg = '你输入的密码错误';
                    }elseif($identity->errorCode===UserIdentity::ERROR_UNKNOWN_IDENTITY)
                    {
                        $errMsg = '未知的用户身份';
                    }elseif($identity->errorCode===UserIdentity::ERROR_PASSWORD_LOCKOUT)
                    {
                        $errMsg = '密码错误三次,请输入验证码';
                        $showVerifyCode = 1;
                    }
                }
            }
        }
        $this->render('login',array('errMsg'=>$errMsg,'showVerifyCode'=>$showVerifyCode));    
    }

    public function actionLogout()
    {
        Yii::app()->user->logout();
        $this->redirect('/login');

    }

    public function actionForgot()
    {

    }

    public function actionEmailChange()
    {

    }
    /**
     * Activation handler
     * @param string $email     The user's email
     * @param int $id           The activation key
     */
    public function actionActivation($email=NULL, $id=NULL)
    {

    }
    /*
     * 注册页面
     */
    public function actionRegister()
    {

    }
    /*
     * 注册成功页面
     */
    public function actionRegisterSuccess()
    {

    }


}
