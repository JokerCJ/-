<!DOCTYPE html>
<html lang="zh_CN">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>关于</title>
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
			  background: rgba(255,255,255,1.00);
			  padding: 12px;
			  margin-top:10px;
		  }
		  a{ 
			  color: inherit; 
		  } 
		  .buttonstyle{
			  margin-top: 20px;
			  margin-bottom: 1.2rem;
			  margin-left: 0.5rem;
		  }
		  .div1{
			  background-image: url("images/div1.png");
			  background-size: 100% 100%;
			  background-attachment:local;
		  }
		  .div2{
			  height:300px;
			  background-image: url("images/div2.jpg");
			  background-size: 100% 100%;
			  background-attachment:local;
		  }
		  .divc{
			  text-align: center;
			  padding:1rem;
		  	  background: rgba(255,255,255,0.85);
		  	  font-size: 1.2rem;
		  	  line-height: 2rem;
		  	  border-radius: 1rem;
			  margin-bottom: 0.5rem;
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
					<li class="nav-item">
						<a class="nav-link" href="index.php">首页 <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="content.php">内容</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="javascript:void(0);">关于</a>
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
					</div>
				<div class="container-fluid">
				<div class="row">
				<div class="col-sm-12 content div2">
				<div class="divc">王茄洪制作<br/>
				   计算机设计大赛作品<br/>
				   基于BootStrap响应式框架 + PHP + MySQL制作<br/>
				   可以在PC + iPad + 手机等多平台使用				
				</div>
			</div>	
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
