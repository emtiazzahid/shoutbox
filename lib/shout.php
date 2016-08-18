<?php 
include_once('Database.php');

class shout{
	private $db;
	public function __construct()
	{
		$this->db = new Database();
	}
	public function getAllData()
	{
		$query = "SELECT * FROM tbl_shouts Order by id DESC";
		$result = $this->db->select($query);
		return $result;
	}

	public function insertSms($data)
	{
		$name = mysqli_real_escape_string($this->db->link, $data['name']);
		$sms = mysqli_real_escape_string($this->db->link, $data['sms']);
		date_default_timezone_set('Asia/Dhaka');
		$time = date('h:i:s a', time());

		$query = "INSERT INTO tbl_shouts(name, sms, time) values ('$name', '$sms', '$time')";
		$result = $this->db->insert($query);
		header("Location: ./index.php");

	}
}
 ?>