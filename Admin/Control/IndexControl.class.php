<?php
/**
*后台默认控制器
*
**/
class IndexControl extends Control{
	/*
	*构造函数
	*/
	public function __construct() {
		if(!isset($_SESSION['aid']) || !isset($_SESSION['username'])) {
			go('Login/index');
		}
	}
	/**
	* 后台默认方法
	**/
    public function index(){
       
       $this->display();
    }
    /*
    * 后台显示默认欢迎界面
    */
    public function copy() {
    	$this->display();
    }
    /**
    * 查看愿望
    */
    public function check() {
    	//
    	$db = M('wish');
    	//分页
    	$page = new page($db->count(), 10, 4, 1);
    	//别忘了执行show方法
    	$this->assign('page', $page->show());
    	$wish = $db->select($page->limit());

    	//$wish = $db->select();
    	//p($wish); die;
    	foreach ($wish as $k => $v) {
    		$wish[$k]['content'] = $this->change_face($v['content']);
    	}
    	$this->assign('wish', $wish);
    	$this->display();
    }
    /**
    *替换表情
    */
    public function change_face($content) {
    	$preg = '/\[(\d*?)\]/';
        $con = preg_replace($preg, '<img src="'.__PUBLIC__.'/images/\1.gif"/>', $content);
        return $con;
    }
    /**
    * 删除愿望
    */
    public function del() {
    	$wid = $this->_GET('wid', 'intval');
    	M('wish')->where(array('wid'=>$wid))->delete();
    	$this->success('删除成功');
    }
    /**
    * 修改后台密码
    **/
    public function passwd() {
    	if (IS_POST) {
    		$passwdF = $this->_POST('passwdF');
    		$passwdS = $this->_POST('passwdS');

    		if (strlen($passwdF)<6) $this->error('密码不得小于6位');
    		if ($passwdF != $passwdS) $this->error('两次密码不相同');

    		$aid = session('aid');
    		M('admin')->where(array('aid'=>$aid))->save(array('password'=>md5($passwdF)));

    		$this->success('密码修改成功');
    	}
    	$this->display();
    }
}
?>