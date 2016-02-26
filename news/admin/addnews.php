<?php	
	header("Content-Type: text/html; charset=utf-8");
	require_once("../config/config.php");
	//var_dump($_POST);die();
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
				exit;
			}else{
				$filename=md5(time().$_FILES["file"]["name"].rand(1,9999));
				$movename=$upload . $filename . "." . substr($_FILES["file"]["type"],6);
				if (file_exists($movename)){
					echo $movename . " already exists. ";
					exit;
				  }else{
					  $_SESSION['filepath'] = $movename;				 
					  move_uploaded_file($_FILES["file"]["tmp_name"],$movename);
					  $imgpath=$_SESSION['filepath'];
				  }
			}
		  }else{
			  echo "Invalid file";
			  exit;
		  }
	}else{
		echo '<script>alert("no upload");</script>';
		echo '<script>window.location.href="addnews.html";</script>';
		exit;
	}
	$imgpath = substr($imgpath,2);
	$time=time();
	$title=test_input($_POST['title']);
	$describe=test_input($_POST['describe']);
	$source=test_input($_POST['source']);
	$content=test_input($_POST['content']);
	$author=test_input($_POST['author']);
	$cate=test_input($_POST['cate']);
	if( $title == NULL ||  $describe == NULL || $source == NULL || $content == NULL || $author == NULL || $cate == '0'){
		echo '<script>alert("请将信息填写完整");</script>';
		echo '<script>window.location.href="addnews.html";</script>';
		exit;
	}
	$sql = "insert into pre_news values(0,'$title','$describe','$imgpath','$time','$source','$cate','$author','$content');";
	$re1=mysqlconn($sql);
	if($re1){
		echo '<script>alert("add success");</script>';
		echo '<script>window.location.href="show.php";</script>';

	}else{
		echo '<script>alert("add fail");</script>';
		echo '<script>window.location.href="addnews.html";</script>';
	}
?>