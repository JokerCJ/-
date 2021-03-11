<?php
$id=$_GET['id'];
include('conn.php');
mysqli_select_db($conn,$selectdb);
mysqli_query($conn,'set names utf8');
$res=mysqli_query($conn,"select file from posts where post_id='$id'");
$path='upload/';
while($row=mysqli_fetch_assoc($res)){
	$filename=$row['file'];}
$url=$path.$filename;
if(file_exists($url)){
	if(unlink($url)){
		$sql=mysqli_query($conn,"delete from posts where post_id='$id'");
		if($sql){
			echo "<script>alert('删除成功');window.location.href=document.referrer</script>";
		}
		else{
			echo "数据库内容删除失败";
		}
	}
	else{
		echo "删除失败";
	}
}
?>