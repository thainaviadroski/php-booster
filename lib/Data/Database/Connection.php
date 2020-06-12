<?php 
  
  namespace Data\Database;

use PDO;

abstract class Connection {

    private static $conn;

    public static function  getConn(){
      if(!self::$conn){        
        self::$conn = new PDO('mysql: host=localhost; dbname=php_login', 'root', '');
      }

      return self::$conn;
    }
  }