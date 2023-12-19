<?php

require_once '../config/connecte.php';
class Category{
    private DatabaseConnection $db;
    private $categoryId;
    private $categoryname;
    public function __construct() {
        $this->db = new DatabaseConnection();

    }
    public function __get ($property){
        return $this->$property;
    }
    public function __set($property, $value){
        $this->$property = $value;
    }

    public function insertData(): void
    {
        try {
            $stmt = $this->db->prepare('INSERT INTO categories(categoryName) VALUES (:categoryName)');
            $stmt->bindParam(':categoryName', $this->categoryname);

            if($stmt->execute())
            {
                echo "dkehlt";
            } else{
                echo "Wlah la Dkhelti";
            }
        } catch (PDOException $e) {
            echo "hani tani: " . $e->getMessage();
        }
    }

    public function Delete(): false|PDOStatement
    {
        $stmt = $this->db->prepare('DELETE FROM categories WHERE categoryId = :categoryId ');
        $stmt->bindParam(':categoryId' , $this->categoryId ,PDO::PARAM_INT);
        $stmt->execute();

        return  $stmt;
    }

    public function read(): array
    {
        $pdo_statement = $this->db->prepare("SELECT * FROM categories");
        $pdo_statement->execute();
        return $pdo_statement->fetchAll(PDO::FETCH_ASSOC);
    }
}