<?php
session_start();
require('../include/config.php');//請求連資料庫
header('Content-type: text/html; charset=utf-8'); // 把PHP檔編碼設為UTF8



// 更新
$name = $_POST['name'];
$sex = $_POST['sex'];
$birthday = $_POST['birthday'];
$address = $_POST['address'];
$phone = $_POST['phone'];

$sql = "UPDATE member_information SET `Name` = '$name',`sex` = '$sex',`birthday` = '$birthday',`address` = '$address',`phone` = '$phone' WHERE  `member_ID`= '".$_SESSION['userID']."'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>