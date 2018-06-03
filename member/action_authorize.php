<?php
if(isset($_GET['authorize'])){
	require_once "../include/config.php";
	$authorize = $_GET['authorize'];
	$sql = "SELECT * FROM `member` where `token` = '$authorize'";
	$result = $conn->query($sql);
	if($result->num_rows == 1 ){
		$sql = "UPDATE member SET `authorize` = '1' WHERE `token` = '$authorize'";

	   if ($conn->query($sql) === TRUE) {
	       echo "authorize = 1";
	   } else {
	       echo "Error: " . $sql . "<br>" . $conn->error;
	   }
	}else{
		header('Location: reSendemail.php');
        //如果token對不上
	}
	
}else{
	header('Location: ../index.php');
}

?>