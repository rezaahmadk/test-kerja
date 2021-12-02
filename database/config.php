<?php
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    };
	define('DB_HOST', 'localhost');
	define('DB_USER', 'root');
	define('DB_PASSWORD', '');
	define('DB_NAME', 'kepegawaian');

	class Db_config{
		var $connection;
		function __construct(){
			$this->connection = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
			if($this->connection->connect_error){
				echo $this->connection->connect_error;
				exit();
			}
		}
	}
?>