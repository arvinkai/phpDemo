<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">

<title></title>
<meta name="viewport"
	content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
<link href="../static-lib/css/mui.min.css" rel="stylesheet" />

</head>

<body>
<?php
include_once("conn.php");
$page = (isset($_GET['page'])) ? $_GET['page'] : "1";
$zhuti = (isset($_GET['zhuti'])) ? $_GET['zhuti'] : "PHP";
?>

<td width="776" height="30">&nbsp;&nbsp;&nbsp;&nbsp;主题:【<?php echo $zhuti?>】</td>

<?php
// $sql = "select * from mr_zqlb where id='" . $_GET['zhuanqu'] . "'";
$sql = "select * from mr_zqlb where `id`='2';";
$rel = mysql_query($sql);
$ztrow = mysql_fetch_array($rel);
?>

<tr>
<?php
$update = "update mr_zqlb set fwjl=fwjl+1 where id='" . $_GET['zhuanqu'] . "'";
//$update = "update mr_zqlb set `fwjl`=fwjl+1 where `id`='2'";
$rel = mysql_query($update);
$sql = "select * from mr_user where `username`='".$ztrow['username']."'";
$rel = mysql_query($sql);
$row = mysql_fetch_array($rel);
?>
</tr>

	<table width="136" height="145" border="0" cellpadding="0"
		cellspacing="0">
		<tr>
			<td height="24" align="center" valign="middle"><?php echo $ztrow['username'];?></td>
		</tr>
		<tr>
			<td height="64" align="center" valign="middle"><?php echo $row['tx'];?></td>
		</tr>
		<tr>
			<td height="26" align="center" valign="middle">我是:<?php echo $row['sex']?'女':'男';?>生</td>
		</tr>
		<tr>
			<td height="30" align="center" valign="middle"><?php echo $ztrow['xq'];?></td>
		</tr>
	</table>

	<td width="643" align="left" valign="top"></td>

	<table width="100%" border="0" align="center" cellpadding="0"
		cellspacing="0">
		<tr>
			<td width="80%" height="24">&nbsp;Email:<?php echo $row['email'];?>&nbsp;QQ:<?php echo $row['qq'];?>&nbsp;发表时间:
	<?php echo $ztrow['fbsj'];?></td>
			<td width="20%"><a
				href="hftj.php?zhuti=<?php urlencode($zhuti);?>&zhuanqu=<?php echo $_GET['zhuanqu'];?>">回复</a></td>
		</tr>
		<tr>
			<td width="505"><?php echo $ztrow['neirong'];?></td>
		</tr>
	</table>


<?php 
    $page_size=2;
    $sql = "select * from mr_hflb where ljid='".$_GET['zhuanqu']."';";
	//$sql = "select * from mr_hflb where ljid='1';";
    $rel =mysql_query($sql);
    $message_count = mysql_num_rows($rel);
    if (0 < $message_count) {
?>
</br>
<b class="mui-h3">回复内容：</b>
<ul class="mui-table-view mui-table-view-striped mui-table-view-condensed">
<?php
    $page_count = ceil($message_count/$page_size);
    $offset = ($page-1)*$page_size;
    $sql = "select * from mr_hflb where ljid='".$_GET['zhuanqu']."'order by id
	desc limit $offset,$page_size;";
	//$sql = "select * from mr_hflb where ljid='1'order by id desc limit $offset,$page_size;";
    $rel = mysql_query($sql);
    while ($myrow = mysql_fetch_array($rel)) {
?>



<?php 
    $sql = "select * from mr_user where username='".$myrow['username']."';";
    $userrel = mysql_query($sql);
    $xq = mysql_fetch_array($userrel);
?>
	<li class="mui-table-view-cell">
		<div class="mui-table">
			<div class="mui-table-cell mui-col-xs-10">
				<h5>用户：<?php echo $myrow['username']?></h5>
				<p class="mui-h6"><?php echo $myrow['hfnr'];?></p>
			</div>
			<div class="mui-table-cell mui-col-xs-2 mui-text-right">
			<p class="mui-h5">Email:<?php echo $xq['email'];?></p>
			<p class="mui-h5">QQ:<?php echo $xq['qq'];?></p>
				<span class="mui-h5">发表时间：<?php echo $myrow['hfsj'];?></span>
			</div>
		</div>
	</li>
<?php 
    }
?>
</ul>
<ul class="mui-pagination" style="padding-left:50%">
	<li class="mui-disabled">
		<!-- <span> &laquo; </span> -->
		<a href="ztf.php?zhuti=<?php echo $zhuti;?>&zhuanqu=<?php echo $_GET['zhuanqu'];?>&page=<?php echo $page-1?>">&raquo;</a>
	</li>
	<?php
		for($i=1; $i<=$page_count; ++$i){
			if(1 == $i){
			?>
			<li class="mui-active">
				<a href="ztf.php?zhuti=<?php echo $zhuti;?>&zhuanqu=<?php echo $_GET['zhuanqu'];?>&page=<?php echo $i;?>"><?php echo $i;?></a>
			</li>						
	<?php
			}else{
	?>
	<li>
		<a href="ztf.php?zhuti=<?php echo $zhuti;?>&zhuanqu=<?php echo $_GET['zhuanqu'];?>&page=<?php echo $i;?>"><?php echo $i;?></a>
	</li>
	<?php
			}
		}
	?>
	<li>
		<a href="ztf.php?zhuti=<?php echo $zhuti;?>&zhuanqu=<?php echo $_GET['zhuanqu'];?>&page=<?php echo $page+1;?>">&raquo;</a>
	</li>
</ul>
<?php 
    }else{
?>
<table width="776" height="40" border="0" align="center" cellpadding="0" cellspacing="0" background="">
<tr>
<td height="20" colspan="3">无回复</td>
</tr>
</table>
<?php
    }
?>
</body>
</html>