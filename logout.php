<?php
$gourl = $_SERVER['HTTP_REFERER'];
session_start();
session_destroy();
echo "<script>alert('注销成功！');window.location.href=document.referrer</script>";
?>