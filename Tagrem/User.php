<?php
include 'userDB_connection.php';
class User{
	
	public $attributes = '';
	
	public function __construct()
	{
		$this->db = userDB_connection::db_connetion();
	}
	
	public function validate(){

		$error = 1;
		
		if(($this->attributes['name'])==""){
			return $error = 0;
		} 
		else if(($this->attributes['username'])==""){
			return $error = 0;
		}
		else if(($this->attributes['password'])==""){
			return $error = 0;
		}
		else if(($this->attributes['confirm_password'])==""){
			return $error = 0;
		}
		else if(($this->attributes['password'])!=($this->attributes['confirm_password'])){
			return $error = 0;
		}
		else if(($this->attributes['zip_code'])==""){
			return $error = 0;
		}
		else{
			return $error;
		}

	}
	static function getErrorSummary($attr){
		
		$attr_val = $attr->attributes;

		if(($attr_val['name'])==""){
			echo "<span style='color:red'>Enter 'Name'</span><br><br>";
		}else if(($attr_val['username'])==""){

			echo "<span style='color:red'>Enter 'UserName'</span><br><br>";
		}else if(($attr_val['password'])==""){
		
				echo "<span style='color:red'>Enter 'PassWord'</span><br><br>";
		}else if(($attr_val['confirm_password'])==""){
		
				echo "<span style='color:red'>Enter 'Confirm PassWord'</span><br><br>";
		}else if($attr_val['password'] != $attr_val['confirm_password']){
		
				echo "<span style='color:red'>Enter 'Confirm Password' same as 'Password' field</span><br><br>";
		}else if(($attr_val['zip_code'])==""){
		
				echo "<span style='color:red'>Enter 'ZipCode'</span><br><br>";
		}

	}
    public function save()
    {
		$sql_insert_query = "INSERT INTO user (name,username,password,zip_code) VALUES 
		('".$this->attributes['name']."', '".$this->attributes['username']."', '".$this->attributes['password']."','".$this->attributes['zip_code']."')";
	
// echo $sql;

		if($this->db->connection->query($sql_insert_query))
		{
			return 1;	
		}
		else
		{
			return 0;
		}
	}  
}

?>