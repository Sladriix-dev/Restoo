<?php

namespace App\Entité;
use \Pdo;

    class User {

        protected string $nom;
        protected string $prenom;
        protected string $email;
        protected string $password;
        protected string $adresse;
        protected int $cp;
        protected string $telephone;
        protected string $genre;

        public function __construct(string $nom, string $prenom, string $email, $password, string $adresse, int $cp, string $telephone, string $genre) {
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->email = $email;
            $this->password = $password;
            $this->adresse = $adresse;
            $this->cp = $cp;
            $this->telephone = $telephone;
            $this->genre = $genre;
            $this->db = new PDO('mysql:host=localhost;dbname=poo_project', DB_USER, DB_PASSWORD);    
        }

            // destructor  
            function __destruct() {  
            }  
            public function inscriptionUtilisateur(){  
                $password = md5($this->password);  
                $qr = "
                INSERT INTO utilisateurs(util_nom, util_prénom, util_email, util_password, util_adresse, util_cp, util_telephone, util_genre) 
                VALUES('".$this->nom."','".$this->prenom."','".$this->email."','".$password."','".$this->adresse."',$this->cp,'".$this->telephone."','".$this->genre."')"; 
                $this->db->exec($qr);

                if ($qr) {
                $_SESSION['alert'] = "<div class='alert'>Inscription réussie !</div>";
                echo '<script type="text/javascript">
                window.location = "../../pages/accueil/index.php"
                </script>'; 
                }

                else {
                    $_SESSION['alert'] = "<div class='alert'>L'inscription a échoué !</div>";
                    echo '<script type="text/javascript">
                    window.location = "inscription.php"
                    </script>'; 
                }
            }  
    
            public function userExist($email){  
                $qr = $this->db->query("SELECT * FROM utilisateurs WHERE util_email = '".$email."'");
                $qr->setFetchMode(PDO::FETCH_OBJ); // retourne les valeurs en objet
                $result = $qr->fetchAll();
                var_dump($result);  
                if(empty($result)){         
                    return false;  
                } else { 
                    $_SESSION['alert'] = "<div class='alert'>Un utilisateur existe déjà avec cet adresse !</div>";
                    echo '<script type="text/javascript">
                    window.location = "inscription.php"
                    </script>';  
                }  
            }  


    }

?>