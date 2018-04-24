<?php 

class DB{

    private static $host = "127.0.0.1";
    private static $username = "root";
    private static $password = "OXdPv08m04RhO6Cg";
    private static $db_name = "blog";
    private static $instance;

    public static function Get(){
        if(self::$instance == null){

            self::$instance = new PDO('mysql:host='.self::$host.';dbname='.self::$db_name, self::$username, self::$password);
        }

        return self::$instance;
    }

}

?>