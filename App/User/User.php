<?php

namespace App\User;

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
            $this->db = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABSE);  
        }

            // destructor  
            function __destruct() {  
            }  
            public function inscriptionUtilisateur(){  
    
                    $password = md5($this->password);  
                    $query = "INSERT INTO utilisateurs(util_nom, util_prénom, util_email, util_password, util_adresse, util_cp, util_telephone, util_genre) VALUES('".$this->nom."','".$this->prenom."','".$this->email."','".$password."','".$this->adresse."',$this->cp,'".$this->telephone."','".$this->genre."')";
                    $this->db->query($query);
                    $qr = mysqli_query($this->db, $query);  
                    var_dump($query);
                return true;
            }  
    
            public function userExist($email){  
                $qr = $this->db->query("SELECT * FROM utilisateurs WHERE util_email = '".$email."'");  
                echo $row = $qr->num_rows;   
                if($row > 0){  
                    return true;  
                } else {  
                    return false;  
                }  
            }  


    }

?>