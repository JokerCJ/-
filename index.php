<!DOCTYPE html>
<html lang="zh_CN">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>学习资料共享平台</title>
	<link href="/css/bootstrap.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
  	<style>
		body{
		  	font-size: 20px;
		  	color:black;
		  	margin:0;
	  		}
		.nav{
		  	height: 80px;
	 		}
	  	.content{
		  	background: #FFFFFF;
		  	padding: 12px;
		  	margin-top:10px;
	  			}
	  	a{
		  	color: inherit;
	  	 }
	  	.buttonstyle{
		  	margin-top: 1rem;
		  	margin-bottom: 1.2rem;
			margin-left: 0.5rem;
	  				}
	  	.div1{
		  	background-image: url("images/div1.png");
		  	background-size: 100% 100%;
		  	background-attachment:local;
	  		 }
	  	.div2{
		  	background-image: url("images/div2.jpg");
		  	background-size: 100% 100%;
		  	background-attachment:local;
	  		 }
	  	.divc{
			padding:1rem;
		  	background: rgba(255,255,255,0.85);
		  	font-size: 1.2rem;
		  	line-height: 2rem;
		  	border-radius: 1rem;
			margin-bottom: 0.5rem;
	  		 }
	  	div.page{
		  	text-align: center;
	  			}
 	  	div.page a{
 			text-decoration: none;
 			padding: 2px 5px 2px 5px;
 			margin: 2px;
		  	background-color: white;
		  	border-radius: 0.5rem;
 				  }
 		div.page span.current{
 			background-color:rgba(67,192,77,1.00);padding: 4px 4px 4px 4px;margin: 2px;color: #fff;
 			font-weight: bold;
			border-radius: 0.5rem;
 							 }
 		div.page form{
 			margin-top: 5px;
 					 }
		table{
		  	text-align: center;
		  	vertical-align:middle;
		  	font-size:1.2rem;
	  		 }
  	</style>	  
  </head>
  <body>
	<!-- body code goes here -->
	<!--网站主体部分-->
	<!--导航栏的DIV-->
	<div class="container-fluid">
		<div class="row nav">
			<nav class="navbar navbar-expand-md navbar-light bg-light col-sm-12 sticky-top">
  				<a class="navbar-brand" href="javascript:void(0);">学习资料共享平台</a>
  				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    				<span class="navbar-toggler-icon"></span>
  				</button>
  				<div class="collapse navbar-collapse" id="navbarSupportedContent">
    				<ul class="navbar-nav mr-auto">
      					<li class="nav-item active">
        					<a class="nav-link" href="javascript:void(0);">首页 <span class="sr-only">(current)</span></a>
      					</li>
      					<li class="nav-item">
        					<a class="nav-link" href="content.php">内容</a>
      					</li>
        				<li class="nav-item">
        					<a class="nav-link" href="about.php">关于</a>
      					</li>
    				</ul>
    			<form class="form-inline my-2 my-lg-0" action="search.php" method="get">
      				<input class="form-control mr-sm-2" type="search" placeholder="搜索" aria-label="Search" name="search" id="search" required="required">
      				<button class="btn btn-outline-success my-2 my-sm-0" type="submit" >搜索</button>
    			</form>
  				</div>
			</nav>
		</div>
	</div>
	<!--导航栏的DIV-->
	<div class="container-fluid">
		<div class="row div1">
			<!--注册登录部分-->
			<?php
			session_start();
			if($_SESSION["name"]){
				echo 
					'<div class="head agile">'.
        				'<div class="logo">'.
            				'<div class="logo-top wel">'.
                				'<img src="images/ujs.jpg"/>'.
                				'<h2>欢迎</h2>'.
							'</div>'.
            			'<div class="logo-bottom w3layouts">'.
							'<h2 align="center">王茄洪制作</h2>'.
            			'</div>'.
        			'</div>'.
        			'<div class="login w3">'.
                			'<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">'.
								'<div class="resp-tabs-container">'.
                    				'<h2 align="center">欢迎用户:'.$_SESSION["name"].'</h2><br/>'.
									'<p style="text-align:center">'.
									'<a href="logout.php" class="btn btn-primary buttonstyle">注销</a>'.
									'<a href="usercenter.php" class="btn btn-primary buttonstyle">个人中心</a>'.
									'</p>'.
								'</div>'.
                			'</div>'.
        			'</div>'.
        			'<div class="clear"></div>'.
    				'</div>'?>
					<?php
					}else{
					?>
					<div class="head agile">
					<div class="logo">
						<div class="logo-top wel">
							<img src="images/ujs.jpg"/>
							<h2>欢迎</h2>
						</div>
						<div class="logo-bottom w3layouts">
							<h2 align="center">王茄洪制作</h2>
						</div>
					</div>
					<div class="login w3">
						<div class="sap_tabs">
							<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
								<ul class="resp-tabs-list">
									<li class="resp-tab-item"><span>登录</span></li>
									<li class="resp-tab-item"><label>/</label><span>注册账号</span></li>
								</ul>
								<div class="resp-tabs-container">
									<div class="tab-1 resp-tab-content">
										<div class="login-top agileinfo">
											<form action="login.php" method="post">
												<input type="text" class="username" id="username" name="username" placeholder="用户名" required />
												<input type="password" class="password" id="password" name="password" placeholder="密码" required />
												<div class="bottom-w3l">
													<div class="submit">
														<input type="submit" name="login" value="登 录" />
													</div>
												</div>
											</form>
										</div>
									</div>
									<div class="tab-1 resp-tab-content">
										<div class="login-top agileits">
											<form action="sign_up.php" method="post">
												<input type="text" class="name active" id="username" name="username" placeholder="用户名" required />
												<input type="password" class="password" id="password" name="password" placeholder="密码" required />
												<input type="password" class="password" id="confirm" name="confirm" placeholder="重复密码" required />
												<div class="bottom-w3l">
													<div class="submit sub1">
														<input type="submit" name="login" value="注册" />
													</div>   
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="clear"></div>
						</div>
						<?php
						}
							?>
		</div>
	</div>
			<!--注册登录部分-->
			<!--最近更新部分-->
			<div class="container-fluid">
				<div class="row content div2">
					<div class="divc col-sm-6" style="margin-right: 3rem;">
						<h3 class="btn btn-success buttonstyle">最近更新</h3>
						<a href="content.php" class="btn btn-outline-success buttonstyle" style="float: right">更多</a>
						<!--数据库调用代码-->
						<?php
							 include('conn.php');
							 mysqli_select_db($conn,$selectdb);
							 $res=mysqli_query($conn,"select * from posts order by post_id desc limit 5");
							 //循环输出查询结果
							 while($row=mysqli_fetch_assoc($res)){
								 echo 
									    '<div class="table-responsive">'.
										'<table class="table table-hover">'.
										'<tr>'.
										'<td align="left">'.$row['post_title'].'</td>'.
										'<td align="center">'.$row['post_content'].'</td>'.
										'<td align="center">'.$row['category'].'</td>'.
										'<td align="right">'.$row['post_time'].'</td>'.
										'<td style="vertical-align:middle">'.
										'<a class="btn btn-primary" href="upload/'.$row['file'].'">下载</a>'.
										'</td>'.
										'</tr>'.
										'</table>'.
										'</div>';
							}
						?>
					</div>
						<!--数据库调用代码-->
						<!--最近更新部分-->
				<!--分类部分-->
				<div class="divc col-sm-5">
					<h3 class="btn btn-success buttonstyle">分类</h3>
					<!--数据库调用代码-->
					<?php
						/** 获取页面 **/
						$page= isset($_GET['p']) ? trim($_GET['p']) : 1;
						$PageSize=6;
						$ShowPage=3;
						//选择所要操作的数据库
						mysqli_select_db($conn,$selectdb);
						//设置数据库编码格式
						mysqli_query($conn,'SET NAMES UTF8');
						//编写sql获取分页数据：SELECT * FROM 表名 LIMIT 起始位置 , 显示条数
						$sql = "SELECT distinct category FROM posts order by post_id desc LIMIT ".($page-1)*$PageSize .",$PageSize";
						if(!$sql){
						echo "取出不成功";
						};
						//把sql语句传送到数据库
						$result = mysqli_query($conn,$sql);
						//循环输出数据库信息
						while($row = mysqli_fetch_assoc($result)){
							echo 
								'<div class="table-responsive">'.
								'<table class="table table-hover">'.
								'<tr>'.
								'<td align="center">'.
								'<a href="category.php?id='.$row['category'].'">'.$row['category'].'</a>'.'</td>'.
								'</tr>'.
								'</table>'.
								'</div>';
							}
							//释放结果
							mysqli_free_result($result);
							//获取数据总数
							$to_sql="SELECT COUNT(distinct category) FROM posts";
							$to_result=mysqli_fetch_array(mysqli_query($conn,$to_sql));
							$to=$to_result[0];
							//计算页数
							$to_pages=ceil($to/$PageSize);
							mysqli_close($conn);
							/** 3.显示数据+分页条 **/
							$page_banner="<div class='page'>";
							//计算偏移量
							$pageffset=($ShowPage-1)/2;
							if($page>1){
							$page_banner.="<a href='".$_SERVER['PHP_SELF']."?p=1'>首页</a>";
							$page_banner.="<a href='".$_SERVER['PHP_SELF']."?p=".($page-1)."'><上一页</a>";
							}
							//初始化数据
							$start=1;
							$end=$to_pages;
							if ($to_pages>$ShowPage){
							if($page>$pageffset+1){
							$page_banner.="...";
							}
							if ($page>$pageffset){
							$start=$page-$pageffset;
							$end=$to_pages>$page+$pageffset?$page+$pageffset:$to_pages;
							}else{
							$start=1;
							$end=$to_pages>$ShowPage?$ShowPage:$to_pages;
							}
							if ($page+$pageffset>$to_pages){
							$start=$start-($page+$pageffset-$end);
							}
							}
							for($i=$start;$i<=$end;$i++) {
							if ($page == $i) {
							$page_banner .= "<span class='current'>{$i}</span>";
							} else {
							$page_banner .= "<a href='" . $_SERVER['PHP_SELF'] . "?p=" . ($i) . "'>{$i}</a>";
							}
							}
							//尾部省略
							if ($to_pages>$ShowPage&&$to_pages>$page+$pageffset){
							$page_banner.="...";
							}
							if ($page<$to_pages){
								$page_banner.="<a href='".$_SERVER['PHP_SELF']."?p=".($page+1)."'>下一页></a>";
								$page_banner.="<a href='".$_SERVER['PHP_SELF']."?p=".($to_pages)."'>尾页</a>";
								}
								$page_banner.="共{$to_pages}页";
								$page_banner.="<form action='?' method='get'>";
								$page_banner.="到第<input type='text'size='2'name='p'>页";
								$page_banner.="<input type='submit'value='确定' class='btn btn-outline-success'>";
								$page_banner.="</form></div>";
								echo $page_banner;
							?>
					</div>
					<!--数据库调用代码-->
					</div>
					</div>
					<!--分类部分-->
					<!--网站主体部分-->
					<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
					<script src="/js/jquery-3.5.1.js"></script>
					<!-- Include all compiled plugins (below), or include individual files as needed -->
					<script src="/js/bootstrap.bundle.js"></script> 
					<script src="/js/bootstrap.js"></script>
					<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
					<script type="text/javascript">
						$(document).ready(function () {
							$('#horizontalTab').easyResponsiveTabs({
								type: 'default',  
								width: 'auto', 
								fit: true    
							});
						});
					</script>
  </body>
</html>
