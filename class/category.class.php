<?php

require_once '../config/connecte.php';
class Category{
    private DatabaseConnection $db;

    public function __construct() {
        $this->db = new DatabaseConnection();

    }
}