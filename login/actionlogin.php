<?php
session_start();
// 登入邏輯
require('../include/config.php');//請求連資料庫

//將使用者輸入之帳號密碼存入變數
$account = $_POST['account'];
$password = $_POST['password'];

// 搜尋資料庫資料
$sql = "SELECT * FROM `member` LEFT JOIN `member_information` ON `member`.`ID` = `member_information`.`member_ID` WHERE `email` = '$account' && `PASSWORD` = '$password'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
	while($row = $result->fetch_assoc()) {
        $name = $row["Name"];
        $id = $row["ID"];
        $authorize = $row["authorize"];
    }
    if($authorize == 1){
    	$_SESSION['isLogin'] = True;
		$_SESSION['userName'] = $name;
		$_SESSION['userID'] = $id;
		header('Location: ../index.php');
    }else{
    	echo "請至信箱取得認證信";
    	echo '<a href="/e-market/member/reSendemail.php">重發驗證信</a>';
    }
	
} else {
	    echo "帳號或密碼錯誤。";
}


// 新增
// $sql = "INSERT INTO member (NAME, ACCOUNT, PASSWORD, EMAIL) VALUES ('John', 'John', '0000', 'john@example.com')";

// if ($conn->query($sql) == TRUE) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }

// 更新
// $sql = "UPDATE member SET ACCOUNT = 'Doe' WHERE id = 2";

// if ($conn->query($sql) === TRUE) {
//     echo "Record updated successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }

// 刪除
// $sql = "DELETE FROM member WHERE id = 4";

// if ($conn->query($sql) === TRUE) {
//     echo "Record deleted successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }

$conn->close();


























// if(isset($_POST['login'])){
// 	$account = $_POST['account'];
// 	$password = $_POST['password'];

// 	print('account: '.$account.'<br/>');
// 	print('password: '.$password);

// 	$_SESSION["isLogin"] = time();
// }else{
// 	print('not exist');
// 	header('Location: index.php');
// }

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>