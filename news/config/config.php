<?php	
	function mysqlconn($sql){
		$db_host = "localhost";                                          
		$db_user = "root";                                                                                                //�������ݿ������
		$db_psw = "root";    
		$db_name="test"; 
		$conn=@mysql_connect($db_host,$db_user,$db_psw);
		@mysql_select_db($db_name,$conn);
		mysql_query("set names utf8");
		$result=@mysql_query($sql);
		return $result;
	}
	function test_input($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
?>