<?php	
	header("Content-Type: text/html; charset=utf-8");
	require_once("../config/config.php");
	session_start();
	//var_dump($_POST);echo '<br/>';var_dump($_SERVER);die();
	if($_SERVER['HTTP_REFERER'] == NULL && $_SERVER['HTTP_REFERER'] != $_SERVER["HTTP_HOST"].'/news/admin/login.html'){
		echo '<script>alert("请先登录");</script>';
		echo '<script>window.location.href="login.html";</script>';
		exit;
	}
	$user = test_input($_POST[user]);
	$password= test_input($_POST[password]);
	$usql = "SELECT `id` FROM pre_admin WHERE `user` = '".$user."'";
	$res = mysqlconn($usql);
	$users = mysql_fetch_array($res,MYSQL_ASSOC);
	if(isset($users[id]) || $users[id] != ''){
		$sql = "SELECT `password` FROM pre_admin WHERE `user` = '".$user."'";
		$result = mysqlconn($sql);
		$row = mysql_fetch_array($result,MYSQL_ASSOC);
		if(md5($password) != $row[password]){
			echo '<script>alert("密码错误");</script>';
			echo '<script>window.location.href="login.html";</script>';
			exit;
		}else{
			$_SESSION[user] = $user;
			//session_register("user");
		}
	}else{
		echo '<script>alert("用户名错误");</script>';
		echo '<script>window.location.href="login.html";</script>';
		exit;
	}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>首页</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/index.css">
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
<div class="content ind_con">
<!--header-->
	<div class="row">
		<div class="col-md-2 logo"  >
			<a href="##" title="logo" class="header_logo">logo</a>
		</div>
		<div class="col-md-10 logo" style="border-left:1px solid gray;">
			<ul style="height:53px;border-bottom:5px solid #2366A8;margin-left:-15px;">
					<li class="f_l top_li">
						<a href="###">首页</a>
					</li>
					<li class="f_l top_li">
						<a href="###">全局</a>
					</li>
					<li class="f_l top_li">
						<a href="###">界面</a>
					</li>
					<li class="f_l top_li">
						<a href="###">内容</a>
					</li>
					<li class="f_l top_li">
						<a href="###">用户</a>
					</li>
					<li class="f_l top_li">
						<a href="###">门户</a>
					</li>

					<li class="f_l top_li">
						<a href="###">论坛</a>
					</li>
					<li class="f_l top_li">
						<a href="###">群组</a>
					</li>
					<li class="f_r top_li">
						<a href="###">退出</a>
					</li>
					<li class="f_r top_li">
						<a href="###">登录</a>
					</li>

					<div class="clearfix"></div>
				</ul >
				<div style="margin-left:-15px;"> 
					<span style="line-height:40px;padding-left:10px;display:block;text-align:left;">首页[+]</span>
				</div>
		</div>
	</div>
	<div  class="row border_t " >
		<div class="col-md-2" >
			<ul class="menu">
				<li  class="menu_li"><a href="###">管理中心首页</a></li>
				<li  class="menu_li"><a href="###">常用操作管理</a></li>
				<div class="" style="z-index:5;">
					<ul class="add_ul">
						<li class="" style=""><a href="addnews.html">添加新闻</a></li>
						<li class=""><a href="show.php">新闻管理</a></li>
					</ul>
				</div>
				<li  class="menu_li"><a href="###">模块管理</a></li>
				<li  class="menu_li"><a href="###">首页</a></li>
				<li  class="menu_li"><a href="###">大转盘</a></li>
				<li  class="menu_li"><a href="###">站点信息</a></li>
				<li  class="menu_li"><a href="###">编辑用户</a></li>
				<li  class="menu_li" style="padding-bottom:1rem;"><a href="###">邮件设置</a></li>
			</ul>	
		</div>
		<div class="col-md-10 info">
			<h2>欢迎来到**网站  管理中心</h2>
			<table>
				<tr>
					<td colspan="2">系统信息</td>
				</tr>
				<tr>
					<td class="wid_250">**程序版本</td>
					<td class="wid_450">** 1.0版本</td>
				</tr>
				<tr>
					<td>服务器系统及php</td>
					<td>WINNT/PHP v5.2.6</td>
				</tr>
				<tr>
					<td>服务器软件</td>
					<td><?php echo apache_get_version();?></td>
				</tr>
				<tr>
					<td>上传许可</td>
					<td>200M</td>
				</tr>
				<tr>
					<td>当前数据库</td>
					<td>13.08MB</td>
				</tr>
				<tr>
					<td>当前附件尺寸</td>
					<td>【详情】</td>
				</tr>
			</table>
			<table>
				<tr>
					<td colspan="2">**开发团队</td>
				</tr>
				<tr>
					<td  class="wid_250">版权所有</td>
					<td  class="wid_450">***公司</td>
				</tr>
				<tr>
					<td>策划兼项目经理</td>
					<td>***</td>
				</tr>
				
			</table>
		</div>
	</div>
</div>
</body>
</html>