<?php	
	header("Content-Type: text/html; charset=utf-8");
	require_once("../config/config.php");
	$id=test_input($_GET[id]);
	$sql = "delete from pre_news where id='".$id."';";
	$re1=@mysqlconn($sql);
	if($re1){
		echo '<script>alert("delete success!");</script>';
		echo '<script>window.location.href="show.php";</script>';
	}
?>