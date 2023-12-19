<?php

require_once '../config/connecte.php';

class Plant {
    private DatabaseConnection $db;
    private $plantid;
    private $plantimg;
    private $plantname;
    private $plantprice;
//    private $plantcategory;

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
            $stmt = $this->db->prepare('INSERT INTO plants(plantName, plantImage, plantPrice) VALUES (:plantName, :plantImage, :plantPrice)');
            $stmt->bindParam(':plantName', $this->plantname);
            $stmt->bindParam(':plantImage', $this->plantimg);
            $stmt->bindParam(':plantPrice', $this->plantprice);
//            $stmt->bindParam(':categoryId', $this->plantcategory);
            if($stmt->execute())
            {
                echo "dkehlt";
            }
            else{
                echo "no ";
            }
            echo "hani";
//            if ($stmt->rowCount() > 0) {
//                echo 'Data Saved';
//            } else {
//                echo 'No rows were inserted';
//            }
        } catch (PDOException $e) {
            echo "hani tani: " . $e->getMessage();
        }
    }

    public function read(): array
    {
        $pdo_statement = $this->db->prepare("SELECT * FROM plants");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll(PDO::FETCH_ASSOC);

        return $result;
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

}
