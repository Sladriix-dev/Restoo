<?php



namespace App\Controller;
use \Pdo;

Class UserProfile 
{

    //----------------------------------------------------   

    public function __construct() {
        
        $this->db = new PDO('mysql:host=localhost;dbname=poo_project', DB_USER, DB_PASSWORD);    
    }

     //----------------------------------------------------

    public function getLoggedUserPrénom()
    {

            $idUser = $_SESSION['util_id'];
            
            $selection="select util_prénom from utilisateurs where util_id=$idUser";
            $execution = $this->db->query($selection);
    


            $execution = $this->db->query($selection);
            $execution->setFetchMode(PDO::FETCH_OBJ); // retourne les valeurs en objet
            $arrayRetour = $execution->fetchAll();

            foreach ($arrayRetour as $ligne)
            {
                return $ligne->util_prénom;
            }
            
     
         
    }

     //----------------------------------------------------

    //Retourne une array des notes donnés par l'utilisateur
    //type : 1 = Restaurants, 2 = Recettes
    public function getLoggedUserNotes(int $type)
    {
            $idUser = $_SESSION['util_id'];

            if ($type == 1)
            {
                $selection="SELECT note.note_id, note.note_score, restaurant.restau_nom
                FROM note 
                JOIN utilisateurs on utilisateurs.util_id = note._user_id
                JOIN restaurant on restaurant.restau_id = note._restau_id
                WHERE note._user_id=$idUser
                ORDER BY note.note_id ASC";
            }

            if ($type == 2)
            {
                $selection="SELECT note.note_id, note.note_score, recettes.rec_nom
                FROM note 
                JOIN utilisateurs on utilisateurs.util_id = note._user_id
                JOIN recettes on note._recette_id = recettes.rec_id
                WHERE note._user_id=$idUser
                ORDER BY note.note_id ASC";
            }
            // $chaine = new PDO('mysql:host=localhost;dbname=poo_project', DB_USER, DB_PASSWORD);
 
           // var_dump($selection);
           
            $execution = $this->db->query($selection);
            $execution->setFetchMode(PDO::FETCH_OBJ); // retourne les valeurs en objet
            $retour = $execution->fetchAll();
        return $retour;
    }

     //----------------------------------------------------

    //Retourne l'historique des commandes de l'utilisateur
    public function getLoggedUserCommandes()
    {
            $idUser = $_SESSION['util_id'];

                $selection="SELECT com_id, com_status, recettes.rec_nom
                FROM commande
                JOIN utilisateurs on utilisateurs.util_id = commande._user_id
                JOIN recettes on recettes.rec_id = commande._rec_id
                WHERE utilisateurs.util_id=$idUser
                ORDER BY com_id ASC";
            

            // $chaine = new PDO('mysql:host=localhost;dbname=poo_project', DB_USER, DB_PASSWORD);
 
           // var_dump($selection);
           
            $execution = $this->db->query($selection);
            $execution->setFetchMode(PDO::FETCH_OBJ); // retourne les valeurs en objet
            $retour = $execution->fetchAll();
        return $retour;
    }

     //----------------------------------------------------

     //Retourne l'historique des commandes de l'utilisateur
     public function getLoggedUserFactures()
     {
             $idUser = $_SESSION['util_id'];
 
                 $selection="SELECT paie_id, paie_status, _user_id, _com_id
                 FROM paiement
                 JOIN utilisateurs on utilisateurs.util_id = paiement._user_id
                
                 WHERE utilisateurs.util_id=$idUser
                 ORDER BY paie_id ASC";
             
             $execution = $this->db->query($selection);
             $execution->setFetchMode(PDO::FETCH_OBJ); // retourne les valeurs en objet
             $retour = $execution->fetchAll();
            return $retour;
     }

     //----------------------------------------------------

    //Unused pour le moment
    //Annule une facture actuellement en cours de livraison ou préparation
    public function AnnulerCommande(int $CommandeId)
    {
            $idUser = $_SESSION['util_id'];

                $selection="UPDATE commande
                SET com_status = \"Annulé`\"
                WHERE com_id = ".$CommandeId;
            

            // $chaine = new PDO('mysql:host=localhost;dbname=poo_project', DB_USER, DB_PASSWORD);
 
           // var_dump($selection);
           
            $execution = $this->db->query($selection);
            $execution->setFetchMode(PDO::FETCH_OBJ); // retourne les valeurs en objet
            $retour = $execution->fetchAll();
        return $retour;
    }

     //----------------------------------------------------

    public function ChangePassword(string $password, string $newPassword)
    {
        $mail = $_SESSION['util_email'];
      //  echo md5($password);
       // echo $mail;
            $idUser = $_SESSION['util_id'];
            $cryptedPwd = md5($password);
            $selection="SELECT * FROM utilisateurs WHERE util_email = '".$mail."' AND util_password = '".md5($password)."'";
            
echo $selection;

            $execution = $this->db->query($selection);
            $execution->setFetchMode(PDO::FETCH_OBJ); // retourne les valeurs en objet
            $retour = $execution->fetchAll();

            if ($retour > 1)   
            {  
                echo "true";
                $selection="UPDATE utilisateurs
                set util_password = '".md5($newPassword)."'
                WHERE util_id = $idUser";

                $execution = $this->db->query($selection);
 

                return true;
            }
            return false;
    }


}