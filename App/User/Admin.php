<?php

namespace App\User;
use \Pdo;

    class Admin  {

        public function __construct(){
            $this->db = new PDO('mysql:host=localhost;dbname=poo_project', DB_USER, DB_PASSWORD);    
        }

        public function userAdmin() {
            $this->isAdmin = true;
        }
    }


?>