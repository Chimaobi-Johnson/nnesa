<?php
// include('../config/config.php');
class User {

	private $con;
	private $user;

	public function __construct($con, $user) {
		$this->con = $con;
		$user_details_query = mysqli_query($con, "SELECT * FROM users WHERE username='$user'");
		$this->user = mysqli_fetch_array($user_details_query);
	}

	public function getUsername() {
		$username = $this->user['username'];
		$query = mysqli_query($this->con, "SELECT username FROM users WHERE username='$username'");
		$row = mysqli_fetch_array($query);
		return $row['username'];
	}
	
}