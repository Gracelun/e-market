<?php
session_start();
require('../include/config.php');//請求連資料庫
header('Content-type: text/html; charset=utf-8'); // 把PHP檔編碼設為UTF8

$account = $_POST['account'];
$password = $_POST['password'];
$name = $_POST['name'];
$sex = $_POST['sex'];
$birthday = $_POST['birthday'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$email = $_POST['email'];

// 新增會員註冊
 
$sql = "INSERT INTO member (NAME ,ACCOUNT, PASSWORD) VALUES ('$name','$account', '$password')";

if ($conn->query($sql) == TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

//查詢
$sql = "SELECT ID FROM `member` where `ACCOUNT` = '$account' && `PASSWORD` = '$password'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
	while($row = $result->fetch_assoc()) {
       
        $id = $row["ID"];
    }
} 

//新增會員資料
$sql = "INSERT INTO member_information (member_ID ,Name, sex, birthday , address, phone, email) VALUES ('$id','$name', '$sex', '$birthday', '$address', '$phone', '$email')";

if ($conn->query($sql) == TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}








?>



