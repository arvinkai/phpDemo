<?php
include_once 'conn.php';

if (isset($_POST['zhuti']) && $_POST['zhuti'] != null) {
    if (!isset($_SESSION['username'])) {
        echo "请登录！！";
        return;
    }
    
    if ($_SESSION['username'] == "") {
        echo "请登录！！";
        return;
    }
    $username = $_SESSION['username'];
    $zhuanqu = $_POST['zhuanqu'];
    $zhuti = $_POST['zhuti'];
    $icon = $_POST['icon'];
    $content = $_POST['content'];
    
    $sql = "INSERT INTO mr_zqlb (`zq`,`xq`,`zhuti`,`neirong`,`username`,`fbsj`) VALUES('$zhuanqu', '$icon','$zhuti','$content','$username',NOW());";
    $rel = mysql_query($sql);
    if ($rel) {
        echo "发布成功！";
    }else {
        echo "发布失败！";
    }
}else{
    echo '主题不能为空！';
    return ;
}
?>