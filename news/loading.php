<?php 
	header("Content-Type:text/html; charset=utf-8");
	require_once("./config/config.php");
	$page = test_input($_GET['page']);
	$cate = test_input($_GET['cate']);
	$offset = 1;
	$end = $offset * ($page);
	$sql="SELECT title,des,time,source,img FROM pre_news WHERE cate = '".$cate."' ORDER BY id DESC LIMIT ".$end.",".$offset;
	$result=@mysqlconn($sql);
	while($row = mysql_fetch_array($result,MYSQL_ASSOC)){
		$rows[] = $row;
	}
	if($rows != NULL){
		echo json_encode(array('status'=>$rows));
	}else{
		echo json_encode(array('status'=>0));
	}
?>