<?php

require_once '../config/connecte.php';

class Plant {
    private DatabaseConnection $db;
    private $plantid;
    private $plantimg;
    private $plantname;
    private $plantprice;
    private $plantcategory;

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
            $stmt = $this->db->prepare('INSERT INTO plants(plantName, plantImage, plantPrice , idcategory) VALUES (:plantName, :plantImage, :plantPrice , :category)');
            $stmt->bindParam(':plantName', $this->plantname);
            $stmt->bindParam(':plantImage', $this->plantimg);
            $stmt->bindParam(':plantPrice', $this->plantprice);
            $stmt->bindParam(':category', $this->plantcategory);
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

    public function read(): array
    {
        $pdo_statement = $this->db->prepare("SELECT plants.*, categories.categoryName as nom 
                    FROM plants 
                    LEFT JOIN categories ON plants.idcategory = categories.categoryId");
        $pdo_statement->execute();
        return $pdo_statement->fetchAll(PDO::FETCH_ASSOC);
    }


    public function deletePlant(): false|PDOStatement
    {
        $stmt = $this->db->prepare('DELETE FROM plants WHERE plantId = :plantid ');
        $stmt->bindParam(':plantid' , $this->plantid ,PDO::PARAM_INT);
        $stmt->execute();

        return  $stmt;
    }

    public function updateProduct (){
//        $sql =  "UPDATE plants SET plantName = :plantName, plantImage = :plantImage, plantPrice = :plantPrice WHERE plantId = :plantid";
//        $stmt= $this->db->prepare($sql);
//        $stmt->bindParam(':plantName',$this->plantname);
//        $stmt->bindParam(':plantImage',$this->plantimg);
//        $stmt->bindParam(':plantPrice',$this->plantprice);
//        $stmt->execute();
//        return $stmt;
    }



    public function getCategories()
    {
        $stmt = $this->db->prepare('SELECT categoryId, categoryName FROM categories');
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}