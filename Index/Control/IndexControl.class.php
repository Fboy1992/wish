<?php
//默认前台控制器
class IndexControl extends Control{
	/**
	*默认前台方法
	*/
    public function index(){
    	// print_const();
    	//$a = M('wish');//M实例化数据库
    	// var_dump($a);die();

        //将所有愿望拿出来
        //select执行 SELECT `wid` , `content` , `name` , `time` FROM sf_wish
        $wish = M('wish')->select();
        if ($wish) {
            foreach ($wish as $k => $v) {
                $wish[$k]['content'] = $this->change_face($v['content']);
            }
            $this->assign('wish', $wish);
        }
        $this->display();

    }
    //异步发表愿望
    public function ajax_wish() {
    	//p方法是格式化的输出
    	// p($_POST);传递数据
    	$nickname = $this->_POST('nickname');
    	$content = $this->_POST('content');

    	//插入数据库,键值对
    	$data = array(
    		'name' => $nickname,
    		'content' => $content,
    		'time' => time() 
    	);
    	//M方法实例化数据库,add方法是插入数据
    	$id = M('wish')->add($data);

    	//生产随机数，让paper不同背景
    	$color = mt_rand(1,3);
        //格式化显示日期时间
    	$time = date('Y-m-d H:i:s');
        //匹配表情
        $con = $this->change_face($content);
        //存储一个字符串块
    	$html = <<<str
		<div class="paper a{$color}">
			<a href="javascript:void(0);" class="close">关闭</a>
			<h2>幸运号<span>【{$id}】</span></h2>
			<p id="content">{$con}</p>
			<p>许愿人:{$nickname}</p>
			<p>{$time}</p>
		</div>
str;
	//让js接收到echo的数据
	echo $html;
    }
    /**
    *替换表情
    */
    public function change_face($content) {
    	$preg = '/\[(\d*?)\]/';
        $con = preg_replace($preg, '<img src="'.__PUBLIC__.'/images/\1.gif"/>', $content);
        return $con;
    }
}


?>