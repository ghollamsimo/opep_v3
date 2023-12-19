<?php

class DatabaseConnection {
    private string $host = "localhost";
    private string $username = "root";
    private string $password = "";
    private string $database = "opepv3";
    private $conn;

    public function __construct() {
        try {
            $this->conn = new PDO("mysql:host={$this->host};dbname={$this->database}", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function getConnection() {
        return $this->conn;
    }


    public function prepare($sql): false|PDOStatement
    {
        return $this->conn->prepare($sql);
    }
}

//require_once ('class/user.class.php') ;$user = new User();


