<?php
	$username = $_POST['username'];//获取login.index中提交的用户名
	$password = $_POST['password'];//获取login.index中提交的密码
	//连接本地数据库
	include('conn.php');
	mysqli_select_db($conn,$selectdb);//在所有的数据库中选择叫 testweb的数据库
	$result = mysqli_query($conn,"select * from users where username = '$username' and password ='$password'") or die("Failed to query database ".mysql_error());
	//在 testweb 数据库下的 users 表单下查询所有的用户名和密码，否则die，报错 
	$row = mysqli_fetch_array($result);//值传给数组
	if($row['username']===$username && $row['password'] ===$password){
		session_start();
		$name=$row['username'];
		$_SESSION["name"]=$name;
		//header('location:index.php');
		echo "<script>alert('登录成功！');window.location.href=document.referrer</script>";
		//如果有用户名和密码匹配，则echo上述内容，并且跳转至主页
	}else{
		echo "<script>alert('登录失败！请重新登录');window.location.href=document.referrer</script>";
		//如果没有，则echo上述内容，并且重新跳转至登录页面
	}
?>