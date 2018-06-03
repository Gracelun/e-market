<?php
class member{
	private $connection; 
	function __construct() {
		require_once "../include/config.php";
		$this->connection = $conn;
    }

    function create($email, $password) {
    	if(!$this->check($email, $password)){
    		$sql = "INSERT INTO member (email, PASSWORD) VALUES ('$email', '$password')";
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

	function check($email, $password) {
	    $sql = "SELECT * FROM `member` WHERE `email` = '$email' && `PASSWORD` = '$password';";
		$result = $this->connection->query($sql);

		if ($result->num_rows == 1) {
			return TRUE;
		}else{
			return FALSE;
		}
	}

	function getInfo($email, $password){
		$sql = "SELECT * FROM `member` WHERE `email` = '$email' && `PASSWORD` = '$password';";
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

	function insertInfo($id, $name, $sex, $birthday, $address, $phone){
		$sql = "INSERT INTO member_information (member_ID ,Name, sex, birthday , address, phone) VALUES ('$id','$name', '$sex', '$birthday', '$address', '$phone')";
		$result = $this->connection->query($sql);
		if($result == true){
			return TRUE;
		}else{
			return FALSE;
		}

	}
	function updateToken($id, $email, $password){
		$token = date("Y/m/d").$email.$password;
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