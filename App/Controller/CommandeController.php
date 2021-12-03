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

                $qr = $this->db->query("SELECT * FROM commande INNER JOIN recettes on commande._rec_id = recettes.rec_id WHERE _user_id=".$userId." AND com_status='panier'");
                $qr->setFetchMode(PDO::FETCH_OBJ); // retourne les valeurs en objet
                $result = $qr->fetchAll();
                var_dump($result);  
                if(empty($result)){     
                    $qr = "INSERT INTO commande(com_status, _user_id, _rec_id) VALUES ('panier',".$userId.",".$recId.")";
                    $this->db->exec($qr);
                    $_SESSION['alert'] = "<div class='alert'>Votre plat a bien été ajouté au panier!</div>";
                    echo '<script type="text/javascript">
                    window.location = "../panier/panier.php"
                    </script>'; 

                } else {  
                    $_SESSION['alert'] = "<div class='alert'>Vous avez déjà un plat dans votre panier !</div>";
                    echo '<script type="text/javascript">
                    window.location = "../panier/panier.php"
                    </script>'; 
                }  
        }

        public function emptyCart($userId){
            $qr ="
            DELETE FROM commande 
            WHERE _user_id = ".$userId." AND com_status = 'panier'";
            $this->db->exec($qr);
            var_dump($qr);
            $_SESSION['alert'] = "<div class='alert'>Le panier a bien été vidé.</div>";
            echo '<script type="text/javascript">
            window.location = "panier.php"
            </script>'; 
            return true;

            
        }

        //Redirige l'utilisateur vers la page de paiement
        public function validationPaiement($userId, $comId, $cb, $fin, $cvc){

            $qr = "INSERT INTO paiement(paie_statut, paie_cb, _user_id, _com_id, paie_cb_fin, paie_cb_cvc) VALUES ('termine','".$cb."',".$userId.",'".$comId."','".$fin."','".$cvc."')";
            $this->db->exec($qr);
            $qrDel = 
            "DELETE FROM commande 
            WHERE _user_id = ".$userId." AND com_status = 'panier'";
            $this->db->exec($qrDel);
                   var_dump($qr);
                   var_dump($qrDel);
            $_SESSION['alert'] = "<div class='alert'>Votre commande a été validé. Vous devrez la recevoir d'ici peu !</div>";
            echo '<script type="text/javascript">
            window.location = "panier.php"
            </script>'; 
            
        }

    }


?>