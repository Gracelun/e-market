<?php
require('../include/config.php');//請求連資料庫
require('../library/lib_sendMail.php');
header('Content-type: text/html; charset=utf-8'); // 把PHP檔編碼設為UTF8


$email = $_POST['resendEmail'];
$sql = "SELECT * FROM `member` LEFT JOIN `member_information` ON `member`.`ID` = `member_information`.`member_ID` WHERE `email` = '$email'";
$result = $conn->query($sql);
if($result->num_rows == 1 ){
	while($row = $result->fetch_assoc()) {
	        $name = $row["Name"];
	        $email = $row["email"];
	        $token = $row["token"];
    }
	$mail = new mail();
	$mail->sendMail($name, $email, $token);
}else{
	echo '沒有'.$email.'用戶';
}




?>