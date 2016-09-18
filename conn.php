<?php
require_once 'config.php';

$id = mysql_connect($DB_host, $DB_username, $DB_pw);
mysql_select_db($DB_name,$id);
mysql_query("set character set 'utf8'");//读库 
mysql_query("set names 'utf8'");//写库
//mysql_query('set names utf-8');
?>