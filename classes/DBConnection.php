<?php
if(!defined('DB_SERVER')){
    require_once("../initialize.php");
}
class DBConnection{

    private $host = DB_SERVER;
    private $username = DB_USERNAME;
    private $password = DB_PASSWORD;
    private $database = 'prison';  // Set the correct database name here
    
    public $conn;
    
    public function __construct(){
        if (!isset($this->conn)) {
            // Attempt to connect to the database
            $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);
            
            // Check for any connection error
            if ($this->conn->connect_error) {
                die('Cannot connect to database server: ' . $this->conn->connect_error);
            }            
        }    
    }
    
    public function __destruct(){
        $this->conn->close();
    }
}


?>