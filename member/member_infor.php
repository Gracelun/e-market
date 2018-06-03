<?php
session_start();

require('../include/config.php');//請求連資料庫
header('Content-type: text/html; charset=utf-8'); // 把PHP檔編碼設為UTF8
echo '會員資料編輯';

if(isset($_SESSION['isLogin'])){
	

	// 搜尋資料庫資料
	$sql = "SELECT * FROM `member_information` where `member_ID` = '".$_SESSION['userID']."'";

	$result = $conn->query($sql);

	if ($result->num_rows == 1) {
		while($row = $result->fetch_assoc()) {
	        $name = $row["Name"];
	        $sex = $row["sex"];
	        $birthday = $row["birthday"];
	        $address = $row["address"];
	        $phone = $row["phone"];
	    }
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>會員資料編輯</title>
</head>
<body>
	<form action = "actionupdate.php" method="POST">
	  name:<br>
	  <input type="text" name="name" value="<?= $name ?>">
	  <br>
	  sex:<br>
	  <input type="text" name="sex" value="<?= $sex ?>">
	  <br>
	  phone:<br>
	  <input type="text" name="phone" value="<?= $phone ?>">
	  <br>
	  birthday:<br>
	  <input type="text" name="birthday" value="<?= $birthday ?>">
	  <br>
	  address:<br>
	  <input type="text" name="address" value="<?= $address ?>">
	  <br><br>
	  <input type="submit" value="修改">
	</form>
</body>
</html>


