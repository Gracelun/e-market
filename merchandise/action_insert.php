<?php
session_start();
require('../library/lib_store.php');
header('Content-type: text/html; charset=utf-8'); // 把PHP檔編碼設為UTF8

// In your "php.ini" file, search for the file_uploads directive, and set it to On: " file_uploads = On "

if(isset($_POST["submit"])) {
    
}

$member_id = $_SESSION['userID'];
if (isset($_POST["create"])){
	$store = new store($member_id);

	$name = $_POST['name'];
	$introduction = $_POST['introduction'];
	$price = $_POST['price'];
	
	$target_dir = "../upload/user/" . $member_id . "/";
	$uploadfile = $target_dir . basename($_FILES["photo"]["name"]);

	if (move_uploaded_file($_FILES['photo']['tmp_name'], $uploadfile)) {
	   echo "File is valid, and was successfully uploaded.\\\\n";
	   $store -> setProduct($name, $introduction, $price, $uploadfile, $member_id);
	} else {
	   echo "Possible file upload attack!\\\\n";
	}

	// header('Location: backstage_productmanage.php');
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



