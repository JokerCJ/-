<!Doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="/css/bootstrap.css" rel="stylesheet">
	<title>发布内容</title>
	<style>
	body{
		  	font-size: 20px;
		  	color:black;
		  	margin:0;
	  }
	.nav{
		  height: 80px;
	  }
	.div1{
		  height:856px;
		  background-image: url("images/div1.png");
		  background-size: 100% 100%;
		  background-attachment:local;
	  }	
	.divc{
		  margin-top: 6rem;
		  margin-bottom: 6rem;
		  padding:1rem;
		  border-radius: 1rem;
		  font-size: 1.2rem;
		  line-height: 2rem;
		  background-color:rgba(255,255,255,0.60);
	  }
	.divc form input{
		  margin-top: 4rem;
	  }
	</style>
  </head>
  <body>
		<!-- body code goes here -->
		<!--导航栏部分-->
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
        					<a class="nav-link" href="content.php">信息</a>
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
		<!--导航栏部分-->
		<div class="container-fluid">
			<div class="row div1">		
				<div class="divc col-sm-6 offset-sm-3">	
					<h3 class="btn btn-primary">发布内容</h3><br/>
						<form action="files_upload.php" method="post" enctype="multipart/form-data">
    						<input type="text" class="form-control col-sm-6 offset-sm-3" name="post_title" id="post_title" placeholder="请输入标题" required="required">
    						<input type="textarea" class="form-control col-sm-6 offset-sm-3" name="post_content"id="post_content" placeholder="输入简短的说明" required="required">
    						<input type="file" class="form-control-file col-sm-6 offset-sm-3" name="file" id="file" required="required"><br> 
							<label for="category">选择分类</label>
							<select multiple class="form-control" name="category" id="category" required="required">
							  <option value="哲学">哲学</option>
							  <option value="经济学">经济学</option>
							  <option value="法学">法学</option>
							  <option value="教育学">教育学</option>
							  <option value="文学">文学</option>
							  <option value="历史学">历史学</option>
							  <option value="理学">理学</option>
							  <option value="工学">工学</option>
							  <option value="农学">农学</option>
							  <option value="医学">医学</option>
							  <option value="军事学">军事学</option>
							  <option value="管理学">管理学</option>
							  <option value="艺术学">艺术学</option>
							</select>
							<input type="submit" name="submit" class="btn btn-success col-sm-6 offset-sm-3" value="提交">
						</form>
				</div>
			</div>
		</div>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
		<script src="/js/jquery-3.5.1.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="/js/bootstrap.bundle.js"></script> 
		<script src="/js/bootstrap.js"></script>
  </body>
</html>