<?php 
header("Content-Type:text/html; charset=utf-8");
require_once("./config/config.php");
$cate = test_input($_GET[cate])?test_input($_GET[cate]):1;
$offset=1;
$sql ="SELECT title,des,img,time,source FROM pre_news WHERE cate ='".$cate."'  ORDER BY id DESC LIMIT 0,".$offset;
$result = mysqlconn($sql);
while($row = mysql_fetch_array($result,MYSQL_ASSOC)){
	$rows[] = $row;
}
if($rows != NULL){
	echo json_encode(array('status'=>$rows));
}else{
	echo json_encode(array('status'=>0));
}
?>