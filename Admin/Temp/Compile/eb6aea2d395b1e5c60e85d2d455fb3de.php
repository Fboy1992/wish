<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_WARNING",false);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>登陆页</title>
	<link rel="stylesheet" href="http://localhost/wish/Admin/Tpl/Public/css/sf_copy.css" />
	<link rel="shortcut icon" href="http://localhost/wish/Admin/Tpl/Public/images/favicon.ico"/>
</head>
<body>
	<div id="tb">
		<table id="table" border="1" rules="all">
			<tr class="th">
				<td colspan="2" border="1" >欢迎光临<span>爱的许愿墙</span>管理后台</td>
			</tr>
			<tr>
				<td>用户名</td>
				<td><?php echo $_SESSION['username'];?></td>
			</tr>
			<tr>
				<td>登陆IP</td>
				<td><?php echo ip::getClientIp() ?></td>
			</tr>
			<tr class="th">
				<td colspan="2" border="1">服务器信息</td>
			</tr>
			<tr>
				<td>服务器环境</td>
				<td><?php echo $_SERVER['SERVER_SOFTWARE'];?></td>
			</tr>
			<tr>
				<td>PHP版本</td>
				<td><?php echo PHP_VERSION;?></td>
			</tr>
			<tr>
				<td>服务器IP</td>
				<td><?php echo $_SERVER['SERVER_ADDR'];?></td>
			</tr>
			<tr>
				<td>数据库信息</td>
				<td><?php echo mysql_get_client_info()?></td>
			</tr>
		</table>
	</div>
</body>
</html>