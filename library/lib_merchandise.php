<?php
class merchandise{
	private $connection; 
	public $merchandise_id; 
	public $status;
	public $name;
	public $introduction;
	public $price;
	public $remain_count;
	public $specification;
	public $photo_path;
	public $member_id;
	public $created_at;
	public $updated_at;

	function __construct($p_id) {
		require_once "../include/config.php";
		$this->connection = $conn;
		$this->merchandise_id = $p_id;

		$sql = "SELECT * FROM `merchandise` WHERE `merchandise_id` = '$this->merchandise_id';";
		$result = $this->connection->query($sql);

		if ($result->num_rows == 1) {
		    $data = $result->fetch_array();
		    $this->status = $data['status'];
			$this->name = $data['name'];
			$this->introduction = $data['introduction'];
			$this->price = $data['price'];
			$this->remain_count = $data['remain_count'];
			$this->specification = $data['specification'];
			$this->photo_path = '../'.$data['photo_path'];
			$this->member_id = $data['member_id'];
			$this->created_at = $data['created_at'];
			$this->updated_at = $data['updated_at'];
		}else{
			return FALSE;
		}
    }
}
?>