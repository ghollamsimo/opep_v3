<?php

class User
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function register($username, $email, $password)
    {
        $role = 4;

        $select = "SELECT * FROM users WHERE userEmail = ?";
        $stmt = $this->conn->prepare($select);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if (mysqli_num_rows($result) > 0) {
            return 'A user is already registered with this email';
        } else {
            $insert = "INSERT INTO users (userName, userEmail, userPassword, roleId) VALUES (?, ?, ?, ?)";
            $stmt = $this->conn->prepare($insert);

            if ($stmt) {
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                $stmt->bind_param("sssi", $username, $email, $hashedPassword, $role);
                $stmt->execute();
                $userId = $stmt->insert_id;
                $stmt->close();
                return $userId;
            } else {
                return "Error preparing statement: " . $this->conn->error;
            }
        }
    }
}
?>
