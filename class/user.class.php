<?php
class User {
    private DatabaseConnection $db;

    public function __construct() {
        $this->db = new DatabaseConnection();
    }

    public function insertUser($nom, $email, $password) {
        try {
            $sql = "INSERT INTO users (userName, userEmail, userPassword) VALUES (:nom, :email, :password)";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':nom', $nom);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $password);
            $stmt->execute();
            return $stmt;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }

    public function userLogin ($email){
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt;
    }

}
?>