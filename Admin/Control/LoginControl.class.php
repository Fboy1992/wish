<?php
/**
*
*登陆控制器
*
*/
class LoginControl extends Control {
	/**
	*登陆页显示
	*/
	public function index() {
		$this->display();
	}
	/**
	*验证码显示
	*/
	public function code() {
		$code = new code();
		$code->show();
	}
	/*
	*登陆
	*/
	public function login() {
		// p($_POST);
		// p($_SESSION);
		//接受$_POST传过来的值,并进行过滤，安全
		$code = $this->_POST('code', 'strtoupper');
		if ($code != $this->_SESSION('code')) $this->error('验证码错误');
		//存储$_POST的值
		$username = $this->_POST('username');
		$pwd = $this->_POST('passwd', 'md5');
		//实例化数据库
		$user = M('admin')->where(array('username'=>$username))->find();	//find只取一条
		//p($user);die;

		//用户和密码判断
		if (!$user || $pwd != $user['password']) $this->error('用户名或者密码错误');

		//echo 'success';
		//登陆凭证
		$_SESSION['username']=$username;	//$username是$user数据库中找到的
		$_SESSION['aid']=$user['aid'];
		//登陆成功
		$this->success('恭喜您，登陆成功,正在为您跳转...','Index/index');
	}
	/**
	* 退出
	*
	*/
	public function out() {
		session_unset();
		session_destroy();
		$this->success('恭喜你退出成功','Login/index');
	}
}