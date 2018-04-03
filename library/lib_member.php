<?php
class member{
	private $connection; 
	function __construct() {
		require_once "../include/config.php";
		$this->connection = $conn;
    }

    function create($name, $account, $password) {
    	if(!$this->check($account, $password)){
    		$sql = "INSERT INTO member (NAME ,ACCOUNT, PASSWORD) VALUES ('$name','$account', '$password')";
			if ($this->connection->query($sql) == TRUE) {
			    echo "New record created successfully";
			    return TRUE;
			} else {
			    echo "Error: " . $sql . "<br>" . $conn->error;

			    return FALSE;
			}
    	}else{
    		
    		return FALSE;
    	}
	}

	function check($account, $password) {
	    $sql = "SELECT * FROM `member` WHERE `ACCOUNT` = '$account' && `PASSWORD` = '$password';";
		$result = $this->connection->query($sql);

		if ($result->num_rows == 1) {
			return TRUE;
		}else{
			return FALSE;
		}
	}

	function getInfo($account, $password){
		$sql = "SELECT * FROM `member` WHERE `ACCOUNT` = '$account' && `PASSWORD` = '$password';";
		$result = $this->connection->query($sql);

		if ($result->num_rows == 1) {
			while($row = $result->fetch_assoc()) {
		        $id = $row["ID"];
		    }
		    return $id;
		}else{
			return FALSE;
		}
	}

	function insertInfo($id, $name, $sex, $birthday, $address, $phone, $email){
		$sql = "INSERT INTO member_information (member_ID ,Name, sex, birthday , address, phone, email) VALUES ('$id','$name', '$sex', '$birthday', '$address', '$phone', '$email')";
		$result = $this->connection->query($sql);
		if($result == true){
			return TRUE;
		}else{
			return FALSE;
		}

	}
	function updateToken($id, $account, $password){
		$token = date("Y/m/d").$account.$password;
		$token = md5($token);
		$sql = "UPDATE member SET `token` = '$token' where ID ='$id'";
		$result = $this->connection->query($sql);
		if ($result == TRUE) {
	     	return $token;

	    } else {
	     	return FALSE;
	    }
	}
}
?>