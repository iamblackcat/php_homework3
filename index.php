<!DOCTYPE html>
<html>
<head>
	<title>留言板</title>
</head>
<body>
	<script type="text/javascript" src="./scripts/checkInput.js"></script>
	<h1 align="center">留言板</h1>
	<form method="POST" name="form" onsubmit="return checkInput()" enctype="multipart/form-data">
	<tr>
		<td>姓名：</td>
		<td><input type="text" name="uname" id="uname"></td>
	</tr><br>

	<tr>
		<td>主题：</td>
		<td><input type="text" name="title" id="title"></td>
	</tr><br>

	<tr>
		<td>正文：</td>
		<td><textarea name="content" rows="6" cols="35" id="content"></textarea></td>
	</tr><br>

	<tr>
		<td>图片：</td>
		<td><input type="file" name="picture" id="picture"></td>
	</tr>
	<tr>
		<td><input type="submit" name="submit" value="发表留言"></td>
	</tr>
		
	</form>

</body>
</html>