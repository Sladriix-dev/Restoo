<?php


namespace App\Controller;
use \PDO;

    class RecettesController {

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

            public function findByIdRecette($idRecettes){  
                $qr = $this->db->query("SELECT * FROM recettes WHERE rec_id =".$idRecettes);
                $qr->setFetchMode(PDO::FETCH_OBJ); // retourne les valeurs en objet
                $recettes = $qr->fetchAll();
                return $recettes;
            }
    
            public function addRecettes(string $nom, string $desc, string $image, int $prix, string $dispo) { 
                $qr = "INSERT INTO recettes(rec_nom, rec_desc, rec_image, rec_prix, rec_dispo) VALUES('".$nom."','".$desc."','".$image."',".$prix.",'".$dispo."')";
                $this->db->exec($qr);
                return true;
            }

            
            public function deleteRecettes($idRecettes){
                $qr = "DELETE FROM recettes WHERE rec_id=".$idRecettes; 
                $this->db->exec($qr);
                return true;
            }

            public function modifyRecettes(string $nom, string $desc, int $prix, string $dispo, int $rec_id) { 
                $qr = "
                UPDATE recettes 
                SET rec_nom = '".$nom.
                "', rec_desc = '".$desc.
                "', rec_dispo = '".$dispo.
                "', rec_prix = ".$prix.
                " WHERE rec_id =".$rec_id;
                $this->db->exec($qr);
                return true;
            }
            

    }

?>