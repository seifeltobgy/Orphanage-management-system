<?php

 class DbConnection 
 {

     private $host="localhost";
     private $username="root";
     private $password="";
     private $db_name="orphanage";
     private $database_connection;
     private static $instance;
     public static $Counter=0;
     
     private function __construct() 
     {
         $this->database_connection = $this->database_connect($this->host ,$this->username,$this->password,$this->db_name);
     }
     
     
     public static function getInstance()
     {
         if (self::$instance == null)
         {
             self::$instance = new DbConnection();
         }
       
         
         return self::$instance;
     }
     
     private function database_connect($database_host, $database_username,$database_password,$db_name)
     {
         if($connection = mysqli_connect($database_host, $database_username,$database_password,$db_name))
         {
             return $connection;
         }
         else 
         {
             die("Database connection error ");
         }
     }
     public function getConnection()
     {
         return $this->database_connection;
     }
 }

?>