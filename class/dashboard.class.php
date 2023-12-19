<?php

require_once '../config/connecte.php';
class Dashboard{
    private DatabaseConnection $db;

    public function __construct(){
        $this->db = new DatabaseConnection();
    }

    public function ShowPlants(): array|false
    {
        $req = $this->db->prepare('SELECT * FROM plants');
        $req->execute();
        $result = $req->fetchAll();

        return $result;
    }
}