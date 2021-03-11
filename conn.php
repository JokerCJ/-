<?php
$conn=mysqli_connect('localhost','joker','123456');
$selectdb=mysqli_select_db($conn,'testweb');
if(!$conn){
 			echo "数据库连接失败";
 			exit;
				}
?>