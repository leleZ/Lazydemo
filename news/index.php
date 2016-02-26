<?php 
header("Content-Type:text/html; charset=utf-8");
require_once("./config/config.php");
//点击加载更多时触发的函数
$loop = isset($_SESSION['loop'])?$_SESSION['loop']:1;
$offset=$loop * 1;
$cate = test_input($_GET[cate])?test_input($_GET[cate]):1;
$sql ="SELECT title,des,img,time,source FROM pre_news WHERE cate ='".$cate."'  ORDER BY id DESC LIMIT 0,".$offset;
$result = mysqlconn($sql);
while($row = mysql_fetch_array($result,MYSQL_ASSOC)){
		$rows[] = $row;
	}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>百度新闻</title>
<link rel="stylesheet" type="text/css" href="css/index.css">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/index.js"></script>
<link href="css/foucs.css" rel="stylesheet" />
<script src="js/jquery.foucs.js" type="text/javascript"></script>
</head>
<body>
<div class="container">
	<div class="news_header">
		<div class="news_top">
			<div class="news_toolbar">
				<div class="f_l">
					<div data-href="http://m.baidu.com/?from=1000376a" class="btn-toolbar btn-baidu f_l"></div>
					<div class="btn-toolbar btn-userhome f_l"></div>
					<div class="clearfix"></div>
				</div>
				<div class="f_r">
					<div data-href="" class="btn-toolbar btn-search f_l"></div>
					<div class="btn-toolbar btn-add f_l"></div>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="news_cate">
			<table>
				<tr>
					<td><a onclick="changecontent(1);">推荐</a></td> 
					<td><a onclick="changecontent(2);">百家</a></td>
					<td><a onclick="changecontent(3);">本地</a></td>
					<td><a onclick="changecontent(4);">图片</a></td>
					<td><a onclick="changecontent(5);">娱乐</a></td>
					<td><a onclick="changecontent(6);">社会</a></td>
				</tr>
				<tr>
					<td><a onclick="changecontent(7);">军事</a></td>
					<td><a onclick="changecontent(8);">科技</a></td>
					<td colspan="2"><a onclick="changecontent(9);">互联网</a></td>
					<td><a onclick="changecontent(10);">女人</a></td>
					<td><a onclick="changecontent(11);">更多</a></td>
					
				</tr>	
			</table>
			
		</div>
	</div>
	<!--主体部分开始-->
	<div class="news_content">
		<!--轮播图部分开始-->
		
			
			<div id="main">
		        <div id="index_b_hero">
		            <div class="hero-wrap">
		                <ul class="heros clearfix">
		                    <li class="hero">
		                        <a href="" target="_blank" title="第一张图的说明">
		                            <img src="images/ban1.jpg" class="thumb" style="width:100%;" alt="" />
		                        </a>
		                    </li>
		                    <li class="hero">
		                        <a href="" target="_blank" title="第二张图的说明">
		                            <img src="images/ban2.jpg" class="thumb" style="width:100%;" alt="" />
		                        </a>
		                    </li>
		                    <li class="hero">
		                        <a href="" target="_blank" title="第三张图的说明">
		                            <img src="images/ban3.jpg" class="thumb" style="width:100%;" alt="" />
		                        </a>
		                    </li>
		                    <li class="hero">
		                        <a href="" target="_blank" title="第4张图的说明">
		                            <img src="images/ban4.jpg" class="thumb" style="width:100%;" alt="" />
		                        </a>
		                    </li>
		                </ul>
		            </div>
		            <div class="helper">
		                <div class="mask-left">
		                </div>
		                <div class="mask-right">
		                </div>
		                
		            </div>
		        </div>
    		</div>
		    <script type="text/javascript">
		        $.foucs({ direction: 'right' });
		    </script>

		
		<!--轮播图部分结束-->

		<!--热点部分开始-->
		<div class="ui-hotword">
			<div class="hotword-l f_l">
				<span>热点</span>
			</div>
			<div class="hotword-r f_l">
				<ul>
					<li>
						<span>中日海外高铁竞争</span>
					</li>
				</ul>
			</div>
			<div class="clearfix"></div>
		</div>
		<!--热点部分结束-->

		<!--新闻图文列表开始-->
		<div class="news_news">
				<?php foreach ($rows as $v) {?>
					<div class="news_list">
						<div class="news_left_img f_l"><img height="68px" width="auto" src="admin/<?php echo $v['img'];?>"></div>
						<div class="news_right f_l">
							<div class="news_title"><?php echo $v['title'];?></div>
							<div class="news_abs"><?php echo $v['des'];?></div>
							<div class="news_right_bottom">
								<div class="news_time f_l"><?php echo $v['time'];?></div>
								<div class="news_cate f_r"><?php echo $v['source'];?></div>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				<?php }?>		
		</div>

		<!--新闻图文列表结束-->
		<div class="more">
			<div class="refresh"  onclick="additem(<?php echo $cate;?>);">点击加载更多</div>
		</div>
	</div>
</div>
</body>
</html>