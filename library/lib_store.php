<?php
class store{
	private $connection; 
	public $seller_id; 
	public $name;
	public $photo;
	public $introduction;
	public $statement;
	public $reminder;
	public $merchandise_count;

	function __construct($s_id) {
		require_once "../include/config.php";
		$this->connection = $conn;
		$this->seller_id = $s_id;

		$sql = "SELECT * FROM `seller` WHERE `member_id` = '$this->seller_id';";
		$result = $this->connection->query($sql);

		if ($result->num_rows == 1) {
		    $data = $result->fetch_array();
			$this->name = $data['name'];
			$this->photo = '../upload/user/'.$s_id.'/'.$data['photo'];
			$this->introduction = $data['introduction'];
			$this->statement = $data['statement'];
			$this->reminder = $data['reminder'];
			$this->merchandise_count = $data['merchandise_count'];
		}else{
			return FALSE;
		}
    }
	function getSellerProduct() {
		$data = array();
    	$sql = "SELECT * FROM `merchandise` WHERE `member_id` = '$this->seller_id';";
		$result = $this->connection->query($sql);

		while($row = $result->fetch_array()) {
        	$data[] = $row;
    	}

		if (count($result) > 0) {
		    return $data;
		}else{
			return FALSE;
		}
	}
	function setProduct($name, $introduction, $price, $photo_path, $member_id) {
		$sql = "INSERT INTO merchandise(name, introduction, price, photo_path, member_id) VALUES ('$name', '$introduction', '$price', '$photo_path', '$member_id')";
		if ($this->connection->query($sql) == TRUE) {
		    echo "New record created successfully";
		    return TRUE;
		} else {
		    echo "Error: " . $sql . "<br>" . $this->connection->error;
		    return FALSE;
		}
	}
}
?>