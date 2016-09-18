<?php
    include_once 'conn.php';
    if (isset($_POST['uname']) && $_POST['uname'] != null) {
        $uname = $_POST['uname'];
        $sql = "select * from mr_user where username = '".$uname."';";

        $rel= mysql_query($sql);
        
        $count = mysql_num_rows($rel);

        if ($count != 0) {
            echo "<script>alert('用户名已存在');history.back();</script>";
			//echo "{\"rel\":false}";
        }else{
            echo "<script>alert('恭喜可使用');history.back();</script>";
			//echo "{\"rel\":true}";
        }
    }
?>