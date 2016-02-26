<?php	
	header("Content-Type: text/html; charset=utf-8");
	require_once("../config/config.php");
	if($_FILES["file"]["tmp_name"]){
		$upload = "./upload/";
		if(!is_dir($upload)){
		mkdir($upload,0777);
		}
		if ((($_FILES["file"]["type"] == "image/gif")
		|| ($_FILES["file"]["type"] == "image/jpeg")
		|| ($_FILES["file"]["type"] == "image/png")
		|| ($_FILES["file"]["type"] == "image/pjpeg")))
		  {
		  if ($_FILES["file"]["error"] > 0){
				echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
			}else{
				$filename=md5(time().$_FILES["file"]["name"].rand(1,9999));
				$movename=$upload . $filename . "." . substr($_FILES["file"]["type"],6);
				if (file_exists($movename)){
					echo $movename . " already exists. ";
				  }else{
					  $_SESSION['filepath'] = $movename;				 
					  move_uploaded_file($_FILES["file"]["tmp_name"],$movename);
					  $imgpath=$_SESSION['filepath'];
					  $imgpath = substr($imgpath,2);
				  }
			}
		  }else{
			  echo "Invalid file";
		  }
	}
	$id=test_input($_POST[id]);
	$time=time();
	$title=test_input($_POST['title']);
	$describe=test_input($_POST['describe']);
	$source=test_input($_POST['source']);
	$content=test_input($_POST['content']);
	$author=test_input($_POST['author']);
	$cate=test_input($_POST['cate']);
	if( $imgpath){
		$sql = "update pre_news set title='".$title."',des='".$describe."',author='".$author."',content='".$content."',time='".$time."',cate='".$cate."',img='".$imgpath."',source='".$source."' where id ='".$id."';";
	}else{
		$sql = "update pre_news set title='".$title."',des='".$describe."',author='".$author."',content='".$content."',time='".$time."',cate='".$cate."',source='".$source."' where id ='".$id."';";
	}
	$re1=mysqlconn($sql);
	if($re1>0){
		echo '<script>alert("update success");</script>';
		echo '<script>window.location.href="show.php";</script>';
	}
?>