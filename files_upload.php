<?php
header('content-type:text/html;charset=utf-8');
session_start();
$title=$_POST['post_title'];
$content=$_POST['post_content'];
$category=$_POST['category'];
$author=$_SESSION["name"];
$nowtime= date('Y-m-d' );
if($_FILES["file"]["size"] < 20480000000)
{
    if ($_FILES["file"]["error"] > 0)
    {
        echo "错误：: " . $_FILES["file"]["error"] . "<br>";
    }
    else
    {
        //echo "上传文件名: " . $_FILES["file"]["name"] . "<br>";
        //echo "文件类型: " . $_FILES["file"]["type"] . "<br>";
        //echo "文件大小: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
        //echo "文件临时存储的位置: " . $_FILES["file"]["tmp_name"] . "<br>";
        
        // 判断当前目录下的 upload 目录是否存在该文件
        // 如果没有 upload 目录，你需要创建它，upload 目录权限为 777
        if (file_exists("upload/" . $_FILES["file"]["name"]))
        {
            echo $_FILES["file"]["name"] . " 文件已经存在。 ";
        }
        else
        {
            // 如果 upload 目录不存在该文件则将文件上传到 upload 目录下
            move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $_FILES["file"]["name"]);
            //echo "文件存储在: " . "upload/" . $_FILES["file"]["name"];
			//链接数据库
        include('conn.php');
        //定义变量，存储文件上传路径，之后将变量写进数据库相应字段即可
        $file = $_FILES["file"]["name"];
        $sql = "INSERT INTO posts (post_title,post_content,post_time,post_author,category,file)
            VALUES
            ('$title','$content','$nowtime','$author','$category','$file')";

        if (!mysqli_query($conn,$sql)) {
            die('Error: ' . mysqli_error($conn));
        }
		echo "<script>alert('发布成功');window.location.href='usercenter.php'</script>";
        }
    }
}
else
{
    echo "非法的文件格式";
}
        ?>