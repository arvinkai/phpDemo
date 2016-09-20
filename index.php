<?php
include_once 'conn.php';
?>
<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<meta name="viewport"
	content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
<title></title>
<script src="../static-lib/js/mui.min.js"></script>
<link href="../static-lib/css/mui.min.css" rel="stylesheet" />
</head>

<body>
	<header class="mui-bar mui-bar-nav">
		<div class="mui-pull-left" style="padding-top: 10px;">
			<label class="mui-h4" style="color: lightgrey;">论坛DEMO</label>
		</div>
		<?php
if (isset($_SESSION['isLogin'])) {
    ?>
    		<?php
    if (! $_SESSION['isLogin']) {
        ?>
	    <div class="mui-pull-right" style="padding-top: 10px;">
			<label class="mui-h5" style="padding-top: 15px;">用户名:</label> <input
				id="username" placeholder="输入用户名" style="width: 100px;"
				maxlength="20" /> <label class="mui-h5" style="padding-top: 15px;">密码:</label>
			<input id="pwd" placeholder="输入密码" style="width: 100px;"
				maxlength="20" />

			<button id="login" style="padding: 3px;">登陆</button>
			<a href="regist.html">注册</a>
		</div>
		<?php
    } else {
        ?>
	    <div class="mui-pull-right" style="padding-top: 10px;">
			<a href="#"><?php echo $_SESSION['username'];?></a> <a
				href="logout.php">退出</a>
		</div>
		<?php
    }
    ?>
		    <?php
} else {
    ?>
    	    <div class="mui-pull-right" style="padding-top: 10px;">
			<label class="mui-h5" style="padding-top: 15px;">用户名:</label> <input
				id="username" placeholder="输入用户名" style="width: 100px;"
				maxlength="20" /> <label class="mui-h5" style="padding-top: 15px;">密码:</label>
			<input id="pwd" placeholder="输入密码" style="width: 100px;"
				maxlength="20" />

			<button id="login" style="padding: 3px;">登陆</button>
			<a href="regist.html">注册</a>
		</div>
    <?php
}
?>
		
	</header>

	<ul class="mui-table-view" style="margin-top: 47px;">
		<li class="mui-table-view-cell mui-media"><a
			href="zthf.php?zhuanqu=1">
				<div class="mui-media-body mui-pull-right">创建时间: 2016-01-01</div>
				<div class="mui-media-body">
					幸福
					<p class="mui-ellipsis">能和心爱的人一起睡觉，是件幸福的事情；可是，打呼噜怎么办？</p>
				</div>
		</a></li>
		<li class="mui-table-view-cell mui-media"><a
			href="zthf.php?zhuanqu=2">
				<div class="mui-media-body mui-pull-right">创建时间: 2016-01-01</div>
				<div class="mui-media-body">
					木屋
					<p class="mui-ellipsis">想要这样一间小木屋，夏天挫冰吃瓜，冬天围炉取暖.</p>
				</div>
		</a></li>
		<li class="mui-table-view-cell mui-media"><a
			href="zthf.php?zhuanqu=3">
				<div class="mui-media-body mui-pull-right">创建时间: 2016-01-01</div>
				<div class="mui-media-body">
					CBD
					<p class="mui-ellipsis">烤炉模式的城，到黄昏，如同打翻的调色盘一般.</p>
				</div>
		</a></li>
	</ul>

	<script type="text/javascript" charset="utf-8">
		mui.init();
		var username = document.getElementById('username');
		var password = document.getElementById('pwd');
		
		document.getElementById('login').addEventListener('tap',function(){
			if (username.value == "" || password.value == "") {
				alert('请输入用户名密码！');
				return;
			}
			
			mui.post('login.php',{
				username: username.value,
				password: password.value
			},function(data){
				document.write(data);
			},'html');
		});
		</script>
</body>

</html>