<?php
session_start();
require('../include/config.php');//請求連資料庫
header('Content-type: text/html; charset=utf-8'); // 把PHP檔編碼設為UTF8
?>
<!DOCTYPE html>
<html>
<head>
	<title>會員註冊</title>
</head>
<body>
<form action = "actioninsert.php" method="POST">
	  account:<br>
	  <input type="text" name="account" value="">
	  <br>
	  password:<br>
	  <input type="text" name="password" value="">
	  <br>
	  name:<br>
	  <input type="text" name="name" value="">
	  <br>
	  sex:<br>
	  <input type="text" name="sex" value="">
	  <br>
	  phone:<br>
	  <input type="text" name="phone" value="">
	  <br>
	  birthday:<br>
	  <input type="text" name="birthday" value="">
	  <br>
	  address:<br>
	  <input type="text" name="address" value="">
	  <br>
	  email:<br>
	  <input type="text" name="email" value="">
	  <br>
	  <br><br>
	  <input type="submit" value="submit">
	</form>
</body>
</html>