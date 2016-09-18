<?php
    session_start();
    include_once 'conn.php';

    $furl = getenv("HTTP_PEFERER");
    if (isset($_POST['uname'])) {

        $username = $_POST['uname'];
        $rname = $_POST['rname'];
        $pwd = $_POST['pwd'];
        $cpwd = $_POST['cpwd'];
        $gender = $_POST['gender'];
        $borthday = $_POST['borthday'];
        $tel = $_POST['tel'];
        $qq = $_POST['qq'];
        $email = $_POST['email'];
        $homepage = $_POST['homepage'];
        $addr = $_POST['addr'];
        $icon = $_POST['icon'];
        
        $sql = "select * from mr_user where username='$username';";
        $rel = mysql_query($sql);
        
        $count = mysql_num_rows($rel);
        if (0 != $count) {
            echo $username."账号已被注册";
        }else {
			        		
            $password = "";
            if ($pwd == $cpwd) {
            $password = md5($pwd);
            }
			
            $sql = "insert into mr_user (`username`,`password`,`zsxm`,`sex`,`shengri`,`lxdh`,`qq`,`tx`,`email`,`grzy`,`lxdz`)
                 values ('$username','$password','$rname','$gender',NOW(),$tel,$qq,'$icon','$email','$homepage','$addr');";
            if (mysql_query($sql)) {
                $_SESSION['username'] = $username;
                $_SESSION['password'] = $pwd;
				echo "<font class=\"red\">您的注册信息如下!</font><br>";
                echo "<li>用户名：<font color=red>".$username."</font><br>";
				echo "<li>E-Mail：<font color=red>".$email."</font><br>";
				echo "<li><font color=red>".$username."</font>恭喜您注册成功！";
				echo "<meta http-equiv=\"Refresh\" content=\"3;url=regist.html\">5秒钟后转入主页，请稍等...";
            }else{
				echo "<font class='#ff0000'>注册失败！！！</font>";
				echo mysql_error();
			}
                     

        }
    }
?>