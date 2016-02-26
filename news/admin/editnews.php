<?php
	
	header("Content-Type: text/html; charset=utf-8");
	require_once("../config/config.php");
	session_start();
	if($_SESSION[user]){
		$id=$_GET[id];
		$sql = "select * from pre_news where id='".$id."';";
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
<title>修改新闻</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/index.css">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/index.js"></script>
</head>
<body>
<div>
<?php foreach($rows as $v){?>
	<form action="edit.php" method="post" enctype="multipart/form-data">
		<table class="row news">
			<tr class="news_tr">
				<td colspan="2" class="news_top">修改新闻内容</td>
			</tr>
			<tr class="news_tr">
				<td  class="col-md-2"><laber >新闻标题</laber></td>
				<td  class="col-md-10"><input name="title" value="<?php echo $v[title];?>" type="text" /></td>
			</tr>
			<input name="id" type ="hidden" value="<?php echo $v[id];?>" />
			<tr class="news_tr">
				<td  class="col-md-2"><laber>作者</laber></td>
				<td  class="col-md-10"><input name="author" value="<?php echo $v[author];?>" readonly="readonly" type="text"/></td>
			</tr>
			<tr class="news_tr">
				<td  class="col-md-2"><laber>来源：</laber></td>
				<td  class="col-md-10"><input name="source" value="<?php echo $v[source];?>" /></td>
			</tr>
			<tr class="news_tr">
				<td  class="col-md-2"><laber>分类</laber></td>
				<td  class="col-md-10">
					<select name="cate" id="sel">
						<option value="1" <?php if($v[cate] == 1){ echo selected;}?>>推荐</option>
						<option value="2" <?php if($v[cate] == 2){ echo selected;}?>>百家</option>
						<option value="3" <?php if($v[cate] == 3){ echo selected;}?>>本地</option>
						<option value="4" <?php if($v[cate] == 4){ echo selected;}?>>图片</option>
						<option value="5" <?php if($v[cate] == 5){ echo selected;}?>>娱乐</option>
						<option value="6" <?php if($v[cate] == 6){ echo selected;}?>>社会</option>
						<option value="7" <?php if($v[cate] == 7){ echo selected;}?>>军事</option>
						<option value="8" <?php if($v[cate] == 8){ echo selected;}?>>科技</option>
						<option value="9" <?php if($v[cate] == 9){ echo selected;}?>>互联网</option>
						<option value="10" <?php if($v[cate] == 10){ echo selected;}?>>女人</option>
						<option value="11" <?php if($v[cate] == 11){ echo selected;}?>>更多</option>
					</select>
				</td>
			</tr>
			<tr class="news_tr">
				<td  class="col-md-2"><laber>图片</laber></td>
				<td  class="col-md-10"><img src="<?php echo $v[img];?>" style="width:100px;height:auto;"/><input type="file"  name="file" value="上传图片" /></td>
			</tr>
			<tr class="news_tr">
				<td  class="col-md-2"><laber>概述</laber></td>
				<td  class="col-md-10"><textarea cols="175" rows="10" name="describe"><?php echo $v[des];?></textarea></td>
			</tr>
			<tr class="news_tr">
				<td  class="col-md-2"><laber>内容</laber></td>
				<td  class="col-md-10"><textarea cols="175" rows="20" name="content"><?php echo $v[content];?></textarea></td>
			</tr>	
			<tr class="news_tr">
				<td colspan="2" class="news_top"> 
					<input type="submit" value="确认修改" class="btn_submit" />
				</td>
			</tr>
		</table>
	
	</form>
<?php } ?>
</div>	
</body>
</html>
