<?php
	
	class userDB_connection{
		private $host = "localhost";
		private $user = "root";
		private $password = "";
		private $database = "tagrem";
		protected static $dbCon_obj;
		
		public function __construct(){
			$this->connection = new mysqli($this->host, $this->user, $this->password, $this->database);
		}
		
		static function db_connetion() {
			 if(!isset(self::$dbCon_obj)) {
                self::$dbCon_obj = new userDB_connection();
            }
            return self::$dbCon_obj;
		}
	}
?>
