<?php
include_once 'conn.php';

    if (isset($_POST['username']) && isset($_POST['password']) && $_POST['username'] != null && $_POST['password'] != null) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM mr_user WHERE `username`='$username'";
        $rel = mysql_query($sql);
        if ($rel) {
            $user = mysql_fetch_array($rel);
            $userPassword = $user['password'];
            $password = md5($password);
            if ($userPassword == $password) {
                $_SESSION['username'] = $username;
                $_SESSION['pwd'] = $password;
                $_SESSION['isLogin'] = true;
                echo "<script>alert('登陆成功');</script>";
            }
        }else {
            echo "<script>alert('登陆失败');</script>";
            echo mysql_error();
        }
    }
    echo "<script>location='index.php';</script>"
	
?>