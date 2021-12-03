<?php

namespace App\Controller;
use Core\Controller\DefaultController;

use \Pdo;

    class AccueilController extends DefaultController {

        public function __construct(){
            $this->db = new PDO('mysql:host=localhost;dbname=poo_project', DB_USER, DB_PASSWORD);    
        }

        public function index()
    {
        $this->render("Accueil/index", [
            
        ]);
    }

        public function userAdmin() {
            $this->isAdmin = true;
        }
    }


?>