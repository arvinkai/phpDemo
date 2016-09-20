<?php
include_once 'conn.php';
$_SESSION['username'] = "";
$_SESSION['password'] = "";
$_SESSION['isLogin'] = false;
//session_destroy();
echo "<script>location='index.php'</script>"
?>