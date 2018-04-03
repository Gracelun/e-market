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
<form action = "action_insert.php" method="POST">
	  account:<br>
	  <input type="text" name="account" value="tttt">
	  <br>
	  password:<br>
	  <input type="text" name="password" value="12345">
	  <br>
	  name:<br>
	  <input type="text" name="name" value="tttt">
	  <br>
	  sex:<br>
	  <input type="text" name="sex" value="女">
	  <br>
	  phone:<br>
	  <input type="text" name="phone" value="0912123456">
	  <br>
	  birthday:<br>
	  <input type="text" name="birthday" value="1994-01-02">
	  <br>
	  address:<br>
	  <input type="text" name="address" value="123">
	  <br>
	  email:<br>
	  <input type="text" name="email" value="s1015346@gm.pu.edu.tw">
	  <br>
	  <br><br>
	  <input type="submit" value="submit">
	</form>
</body>
</html>