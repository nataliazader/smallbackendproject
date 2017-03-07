<?php

class model{
	protected $table;
	protected $sql;
	
    public function select($table,$conn){
		$this->table=$table;
		$this->sql ="SELECT * FROM  `$this->table` ";
		$result = array ();
		$res = $conn->query($this->sql);
		if($res->num_rows > 0){
			while($row = $res -> fetch_assoc())
				$result[] =$row;
		}
		return $result;
	}
	
	public function insert($table,array $data,$conn){
		$this->table=$table;
		$this->data=$data;
		if(is_array($this->data)){
			foreach($this->data as $key=>$value){
				$fields [] =" `$key` ";
				$values []=" $value ";
			}
		}	
	
		$this->sql =" INSERT INTO `$this->table` ( ".implode(" , ",$fields)." ) VALUES ( ".implode(" , ",$values)." ) ";
		if($conn->query($this->sql))
			return true;
		else
			return false;
	}
}

?>