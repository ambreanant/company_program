<?php

class member_db
{
	protected static $con;

		public function __construct()
		{
			$this->connection = new mysqli('localhost','root','','anant');
		}
		
		public function db_connection()
		{
			if(!isset(self::$con))
			{
				self::$con = new member_db();
			}
			return self::$con;
		}
}
?>