<?php

class db_connection {
	
	protected $db_name = 'facebook';
	protected $db_user = 'root';
	protected $db_password = '';
	protected $db_host = 'localhost';
	protected $conn;
	
	public function connect() {
	
		$this->conn = new mysqli( $this->db_host, $this->db_user, $this->db_password, $this->db_name );
		
		if ($this->conn->connect_error) {
			//die("Connection failed: " . $conn->connect_error);
			return null;
		} 
		//echo "Connected successfully";
		return $this->conn;
	}
	
	public function close(){
		$this->conn->close();
	}	
}
?>