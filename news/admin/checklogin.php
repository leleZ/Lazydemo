<?php	
	header("Content-Type: text/html; charset=utf-8");
	session_start();
	if($_SESSION[user]){
		echo json_encode(array('status' => '0'));
	}else{
		echo json_encode(array('status' => '1'));
	}
?>