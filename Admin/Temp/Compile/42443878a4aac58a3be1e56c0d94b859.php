<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_WARNING",false);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>登陆页</title>
	<link rel="stylesheet" href="http://localhost/wish/Admin/Tpl/Public/css/sf_login.css" />
	<link rel="shortcut icon" href="http://localhost/wish/Admin/Tpl/Public/images/favicon.ico"/>
	<script src="http://localhost/wish/Admin/Tpl/Public/js/jquery.js"></script>
	<script src="http://localhost/wish/Admin/Tpl/Public/js/sf_login.js"></script>
</head>
<body>
	<div id="top">	
	</div>
	<div id="divBox">
		<h2>爱的许愿墙后台登陆</h2>
		<form action="<?php echo U('login');?>" method="POST" id="login">
			<dl>
				<dd>用户名：<input type="text" name="username" id="username" /></dd>
				<dd>密　码：<input type="password" name="passwd" id="psd" /></dd>
				<dd>验证码：<input type="" name="code" id="verify" /></dd>
				<!--验证码-->
				<dd><img src="<?php echo U('code');?>" alt="" id="verify_img"/></dd>
				<dd><input type="submit" id="sub" value="登陆"/></dd>
			</dl>
			
		</form>
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