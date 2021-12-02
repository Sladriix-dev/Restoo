<?php

namespace App\Controller;
use \Pdo;

    class CommandeController  {

        public function __construct(){
            $this->db = new PDO('mysql:host=localhost;dbname=poo_project', DB_USER, DB_PASSWORD);    
        }

        public function listAllCartCommand($userId) {
            $qr = $this->db->query("SELECT * FROM commande WHERE user_id=".$userId);
            $commandes = $this->db->exec($qr);
            // $qr->setFetchMode(PDO::FETCH_OBJ); // retourne les valeurs en objet
            // $commandes = $qr->fetchAll();
            return $commandes;
                // include ROOT."/pages/recettes/recettes.php";
            
        }

        public function addCart(){
            $qr = "INSERT INTO commandes(rec_nom, rec_desc, rec_image, rec_prix, rec_dispo) VALUES('".$nom."','".$desc."','".$image."',".$prix.",'".$dispo."')";
            $this->db->exec($qr);
            return true;
        }

        public function confirmCart(){

        }

    }


?>