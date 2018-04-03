<?php
session_start();
require('../library/lib_member.php');
require('../library/lib_sendMail.php');
header('Content-type: text/html; charset=utf-8'); // 把PHP檔編碼設為UTF8

$account = $_POST['account'];
$password = $_POST['password'];
$name = $_POST['name'];
$sex = $_POST['sex'];
$birthday = $_POST['birthday'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$email = $_POST['email'];

$member = new member();
// 新增會員註冊
$insert = $member->create($name, $account, $password);
if ($insert == true){
	$id = $member->getInfo($account, $password);
	if($id != FALSE){
		echo "ID = $id";
		$member->insertInfo($id, $name, $sex, $birthday, $address, $phone, $email);
		$token = $member->updateToken($id, $account, $password);

		$mail = new mail();
		$mail->sendMail($name, $email, $token);

		// header('Location: authorize.php');
	}else{
		echo "不存在此用戶";
	}
}else{
	echo "Error: 用戶已存在";
}

// //新增會員資料
// $sql = "INSERT INTO member_information (member_ID ,Name, sex, birthday , address, phone, email) VALUES ('$id','$name', '$sex', '$birthday', '$address', '$phone', '$email')";

// if ($conn->query($sql) == TRUE) {
//     echo "New record created successfully";
//     // $token = date("Y/m/d").$account.$password;
//     // $tokenn = md5($token);
//     // $sql = "INSERT INTO member (token) VALUES ('$tokenn')";
//     // header('Location: ../sendMail/index.php');
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }








?>



