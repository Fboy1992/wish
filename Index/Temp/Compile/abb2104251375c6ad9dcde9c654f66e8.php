<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_WARNING",false);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>爱的许愿墙</title>
	<script type='text/javascript'>
		HOST = 'http://localhost';
		ROOT = 'http://localhost/wish';
		WEB = 'http://localhost/wish/index.php';
		URL = 'http://localhost/wish';
		HDPHP = 'http://localhost/wish/hdphp';
		HDPHPDATA = 'http://localhost/wish/hdphp/Data';
		HDPHPTPL = 'http://localhost/wish/hdphp/Lib/Tpl';
		HDPHPEXTEND = 'http://localhost/wish/hdphp/Extend';
		APP = 'http://localhost/wish/index.php';
		CONTROL = 'http://localhost/wish/index.php/Index';
		METH = 'http://localhost/wish/index.php/Index/index';
		TPL = 'http://localhost/wish/Index/Tpl';
		CONTROLTPL = 'http://localhost/wish/Index/Tpl/Index';
		STATIC = 'http://localhost/wish/Index/Tpl/Static';
		PUBLIC = 'http://localhost/wish/Index/Tpl/Public';
		COMMON = 'http://localhost/wish/Common';
		TEMPLATE = 'http://localhost/wish/Template';
</script>
	<link rel="stylesheet" href="http://localhost/wish/Index/Tpl/Public/css/sf_wish.css" />
	<link rel="shortcut icon" href="http://localhost/wish/Index/Tpl/Public/images/favicon.ico"/>
	<script src="http://localhost/wish/Index/Tpl/Public/js/jquery.js"></script>
	<script src="http://localhost/wish/Index/Tpl/Public/js/send_form.js"></script>
</head>
<body>
	<div id="top">	
	</div>
	<div id="header">
		<div class="cont">
			<h2>爱的许愿墙
				<span>www.xuyanqiang.com</span>
			</h2>
			<div class="add" id="add">
				<img src="http://localhost/wish/Index/Tpl/Public/images/heart.jpg" alt="许愿+" />
				<p>我要许愿</p>
			</div>

		</div>
	</div>
	<div id="bd">
		<div id="page">
			<?php if(isset($wish) && !empty($wish)):$_id_n=0;$_index_n=0;$lastn=min(1000,count($wish));
$hd["list"]["n"]["first"]=true;
$hd["list"]["n"]["last"]=false;
$_total_n=ceil($lastn/1);$hd["list"]["n"]["total"]=$_total_n;
$_data_n = array_slice($wish,0,$lastn);
if(count($_data_n)==0):echo "";
else:
foreach($_data_n as $key=>$n):
if(($_id_n)%1==0):$_id_n++;else:$_id_n++;continue;endif;
$hd["list"]["n"]["index"]=++$_index_n;
if($_index_n>=$_total_n):$hd["list"]["n"]["last"]=true;endif;?>
<!--n就相等于foreach 中$value list是框架提供的标签-->
				<div class="paper a<?php echo mt_rand(1,3)?>">
					<a href="javascript:void(0);" class="close">关闭</a>
					<h2>幸运号<span>【<?php echo $n['wid'];?>】</span></h2>
					<p id="content"><?php echo $n['content'];?></p>
					<p>许愿人:<?php echo $n['name'];?></p>
					<p><?php echo date('Y-m-d H:i:s',$n['time']);?></p><!--两个@符代表将$n.time传过来-->
				</div>
			<?php $hd["list"]["n"]["first"]=false;
endforeach;
endif;
else:
echo "";
endif;?>
		</div>
		<div id="send_form" style="display:none;">
			<h2>写下你的愿望</h2>
			<a href="javascript:void(0);" id='close'>X</a>
			<form action="" name="send_wish">
				<p class="nick">昵称：</p>
				<input type="text" name="nickname" class="nick_input" />
				<p class="wish">愿望：（输入文字不得大于<b>50</b>个字）</p>
				<textarea name="content"></textarea>
				<div id="phiz">
					<img src="http://localhost/wish/Index/Tpl/Public/images/1.gif"/>
					<img src="http://localhost/wish/Index/Tpl/Public/images/2.gif"/>
					<img src="http://localhost/wish/Index/Tpl/Public/images/3.gif"/>
					<img src="http://localhost/wish/Index/Tpl/Public/images/4.gif"/>
					<img src="http://localhost/wish/Index/Tpl/Public/images/5.gif"/>
					<img src="http://localhost/wish/Index/Tpl/Public/images/6.gif"/>
					<img src="http://localhost/wish/Index/Tpl/Public/images/7.gif"/>
					<img src="http://localhost/wish/Index/Tpl/Public/images/8.gif"/>
					<img src="http://localhost/wish/Index/Tpl/Public/images/9.gif"/>
					
				</div>
				<span class="submit">
					许下愿望
				</span>
			</form>
		</div>
	</div>
	<div id="footer">
		<span class="footer_one">
		</span>
		<span class="footer_two">
			许一个愿.暖一颗心
		</span>
		<span class="footer_three">
		</span>
	</div>
</body>
</html>