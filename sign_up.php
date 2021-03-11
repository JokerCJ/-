<?php
header("content-type:text/html;charset=utf8");
include ('conn.php');
$username = $_POST['username'];
$password = $_POST['password'];
$confirm= $_POST['confirm'];
if ($password!=$confirm) {
    exit("两次输入的密码不相同!");
}
if (!$username || !$password || !$confirm) {
    exit("用户名和密码不能为空!");
}
mysqli_select_db($conn,$selectdb);
$usernameSQL = "select * from users where username='$username'";
$res = mysqli_query($conn,$usernameSQL);
$registerSQL = "insert into users (username,password) values ('$username','$password')";
//判断如果用户名被占用，则提示更换其他用户名；如果用户名未被占用，则向数据库插入用户名和密码
if (mysqli_num_rows($res)>0) {
    mysqli_close($conn) or die(mysqli_error());
    exit("用户名已经被占用,请更换其他用户名!");
}
else{
	mysqli_query($conn,$registerSQL);
}
//数据库再次查询用户信息
$userSQL = "select * from users where username='$username'";
$userRes = mysqli_query($conn,$userSQL);
if($user=mysqli_fetch_array($userRes)){
	echo "<script>alert('注册成功！');window.location.href=document.referrer;</script>";
}
   else{
   echo "<script>alert('注册失败！请重试');window.location.href=document.referrer;</script>";
}
mysqli_close($conn) or die(mysqli_error());
?>
