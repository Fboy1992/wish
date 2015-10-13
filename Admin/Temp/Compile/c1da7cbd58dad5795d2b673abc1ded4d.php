<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_WARNING",false);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>登陆页</title>
	<link rel="stylesheet" href="http://localhost/wish/Admin/Tpl/Public/css/sf_passwd.css" />
	<link rel="shortcut icon" href="http://localhost/wish/Admin/Tpl/Public/images/favicon.ico"/>
	<script src="http://localhost/wish/Admin/Tpl/Public/js/sf_passwd.js"></script>
</head>
<body>
	<form id="tb" action="<?php echo U('passwd');?>" method="post"> 
		<table id="table" border="1" rules="all">
			<tr>
				<td colspan="2" class="th">修改密码</td>
			</tr>
			<tr>
				<td>用户名</td>
				<td><?php echo $_SESSION['username'];?></td>
			</tr>
			<tr>
				<td>密码</td>
				<td><input type="password" name="passwdF" id="p1" /></td>
			</tr>
			<tr>
				<td>密码确认</td>
				<td><input type="password" name="passwdS" id="p2" /></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" value="确认" class="sub"/></td>
			</tr>
			
		</table>
	</form>
</body>
</html>