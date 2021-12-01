<?php

namespace App\Controller;

    class Restaurant {

        protected string $nom;
        protected string $adresse;
        protected string $desc;


        public function __construct(string $nom, string $adresse, string $desc) {
            $this->nom = $nom;
            $this->adresse = $adresse;
            $this->desc = $desc;
            $this->db = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABSE);  
        }

            // destructor  
            function __destruct() {  
            }  

            //Afficher la liste de tous les restaurants
            public function getAllRestaurants(){  
    
                $qr = $this->db->query("SELECT * FROM restaurant");  
                $qr->setFetchMode(\PDO::FETCH_OBJ); // retourne les valeurs en objet
                $restaurants = $qr->fetchAll();

                include ROOT."../restaurant/restaurants.php";
                include "../../pages/restaurant/restaurants.php";

            }  


    }

?>