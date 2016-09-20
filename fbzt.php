<!doctype html>
<html>

<head>
<meta charset="UTF-8">
<title></title>
<meta name="viewport"
	content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
<link href="./static-lib/css/mui.min.css" rel="stylesheet" />
</head>

<body>
	<input id="zq" type="text" hidden="true" value="<?php echo $_GET['zhuanqu'];?>"></input>
	<ul class="mui-table-view">
		<li class="mui-table"><span class="mui-h4">主题:</span> <input
			id="zt" type="text" style="width: 200px; height: 25px;"></li>
		<li class="mui-table"><span class="mui-h4">表情:</span>
			<div id="icon">
				<input name="radio" type="radio" value="1" checked>icon1 <input
					name="radio" type="radio" value="2">icon2
			</div></li>
		<br />
		<li class="mui-table"><span class="mui-h4">内容:</span> <textarea
				id="textarea" rows="5" placeholder="请输入内容......"></textarea>
			字节0/2000</li>
		<br />
		<li class="mui-table">
			<button id="commit" type="button" class="mui-btn mui-btn-blue">提交</button>
		</li>
	</ul>
	<script src="./static-lib/js/mui.min.js"></script>
	<script type="text/javascript">
		mui.init()
		var commit = document.getElementById('commit');

		commit.addEventListener('tap', function() {
			var zhuti = document.getElementById('zt');
			var icons = document.getElementsByName('radio');
			var neirong = document.getElementById('textarea');
			var iconvalue = 0;
			for (var i = 0; i < icons.length; ++i) {
				if (icons[i].checked) {
					iconvalue = icons[i].value;
				}
			}

			mui.post('http://localhost:80/forumObject/fbzt_db.php', {
				zhuanqu: document.getElementById('zq').value,
				zhuti : zhuti.value,
				icon : iconvalue,
				content : neirong.value
			}, function(data) {
				document.write(data);
			}, 'html');
		});
	</script>
</body>

</html>