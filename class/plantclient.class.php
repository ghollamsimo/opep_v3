<?php
require_once '../config/connecte.php';
class Cient{
    private DatabaseConnection $db;

    public function __construct(){
        $this->db = new DatabaseConnection();
    }

    public function Read(): false|array
    {
        $req = $this->db->prepare('SELECT * FROM plants');
        $req->execute();
        return $req->fetchAll(PDO::FETCH_ASSOC);
    }

    public function Panier(){
//        $query = $this->db->prepare('')
    }
}