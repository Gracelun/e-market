<!DOCTYPE html>
<?php
session_start();
header('Content-type: text/html; charset=utf-8'); // 把PHP檔編碼設為UTF8
require('../include/config.php');//請求連資料庫

if(isset($_SESSION['isLogin'])){
	echo 'HELLO '.$_SESSION['userName'];

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
	        echo "$name<br /> $sex <br /> $birthday <br /> $address <br /> $phone <br />";
	        echo '<a href="/e-market/member/modifypassword.php">修改密碼</a>';
	    }
	}
}else{
	echo '請先登入';
}
?>

<html>
<head>
	<title></title>
</head>
<body>

<a href="../member/member_infor.php"><button type="button">編輯個人資料</button></a>
</body>
</html>
