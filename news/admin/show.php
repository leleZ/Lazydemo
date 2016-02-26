<?php	
	header("Content-Type: text/html; charset=utf-8");
	require_once("../config/config.php");
	date_default_timezone_set('PRC');
	session_start();
	if($_SESSION[user]){
		$sql = "select id,title,time,source from pre_news order by id desc";
		$result=mysqlconn($sql);
		while ($row = mysql_fetch_array($result,MYSQL_ASSOC)) {
			$rows[]=$row;
		}	
	}else{
		echo '<script>alert("您还没有登录，请先登录");</script>';
		echo '<script>window.location.href="login.html";</script>';
	}
	
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>新闻列表</title>
    <meta name="keywords" content="新闻列表">
    <meta name="description" content="新闻列表">
    <link rel="stylesheet" type="text/css" href="css/index1.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/index.js"></script>	
    <!-- font.js手机字体适配 -->
</head>

<body>
    <div class="contain">
	<table>
	<tr class="top">
		<td colspan="8">新闻列表</td>
	</tr>
    <tr>
	  <td>编号</td>
      <td>标题</td>
      <td>时间</a></td>
      <td>来源</td>
	  <td>编辑</td>
    </tr>
   <?php foreach($rows as $v){?>
    <tr>
	  <td><?php echo $v[id];?></td>
      <td><?php echo $v[title];?></td>
      <td><?php echo date("Y-m-d H:i:s",$v[time]);?></td>
      <td><?php echo $v[source];?></td>
	  <td><a href="editnews.php?id=<?php echo $v[id];?>">修改</a>|<a href="delete.php?id=<?php echo $v[id];?>">删除</a></td>
    </tr>
	<?php }?>
	<tr>
		<td colspan="8">
			<a href="addnews.html">继续添加</a>
		</td>
	</tr>

  </table>
    </div>
</body>

</html>