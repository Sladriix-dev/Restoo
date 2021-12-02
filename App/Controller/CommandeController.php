<?php

namespace App\Controller;
use \Pdo;

    class CommandeController  {

        public function __construct(){
            $this->db = new PDO('mysql:host=localhost;dbname=poo_project', DB_USER, DB_PASSWORD);    
        }

        public function listAllCartCommand($userId) {
            $qr =  $this->db->query("SELECT * FROM commande INNER JOIN recettes on commande._rec_id = recettes.rec_id WHERE _user_id=".$userId." AND com_status='panier'") ;
            $qr->setFetchMode(PDO::FETCH_OBJ); // retourne les valeurs en objet
            $commandes = $qr->fetchAll();
            return $commandes;
            
        }

        public function addCart($userId, $recId){
            $qr = "INSERT INTO commande(com_status, _user_id, _rec_id) VALUES ('panier',".$userId.",".$recId.")";
            $this->db->exec($qr);
            var_dump($qr);
            return true;

            
        }

        public function confirmCart(){

        }

    }


?>