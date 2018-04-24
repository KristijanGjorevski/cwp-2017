<?php 
class DB {
	private static $instance;
	private static $username = 'root';
	private static $password = 'root';
	private static $host = '127.0.0.1';
	private static $dbname = 'blog';
	private function __construct(){
	}
	public static function Get() {
		if(self::$instance == null){
			self::$instance = new PDO('mysql:host='.self::$host.';dbname='.self::$dbname, self::$username, self::$password);
		}
		return self::$instance;
	}
}

?>