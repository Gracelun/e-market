<?php
session_start();
require('../include/config.php');//請求連資料庫
header('Content-type: text/html; charset=utf-8'); // 把PHP檔編碼設為UTF8



$password = $_POST['oldpassword'];
$newpassword = $_POST['newpassword'];
$sql = "SELECT * FROM `member` where `PASSWORD` = '$password' && `ID` = '".$_SESSION['userID']."'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
	$sql = "UPDATE member SET `PASSWORD` = '$newpassword' where `ID` = '".$_SESSION['userID']."'";

	if ($conn->query($sql) === TRUE) {
	    echo "Record updated successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
} else {
    echo "Error:密碼錯誤 ";
}




?>