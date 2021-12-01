<?php


namespace App\Controller;
use \PDO;

    class Recettes {

        public function __construct() {
        
            $this->db = new PDO('mysql:host=localhost;dbname=poo_project', DB_USER, DB_PASSWORD);    
        }

            // destructor  
            function __destruct() {  
            }  

            //Afficher la liste de toutes les Recettess
            public function getAllRecettes(){  
    
                $qr = $this->db->query("SELECT * FROM recettes");
                $qr->setFetchMode(PDO::FETCH_OBJ); // retourne les valeurs en objet
                $recettes = $qr->fetchAll();
                return $recettes;
                // include ROOT."/pages/recettes/recettes.php";

            }  

            public function addRecettes(string $nom, string $desc, string $image, int $prix) { 
                
            }


    }

?>