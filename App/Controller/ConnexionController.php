<?php

namespace App\Controller;
use \Pdo;

    class ConnexionController {
        
        public function __construct() {
        
            $this->db = new PDO('mysql:host=localhost;dbname=poo_project', DB_USER, DB_PASSWORD);    
        }

        public function connexion($emailid, $password){  
            $res = $this->db->query("SELECT * FROM utilisateurs WHERE util_email = '".$emailid."' AND util_password = '".md5($password)."'");  
            $user_data = $res->fetch();  
        
        if ($user_data > 1)   
        {  
            if ($user_data['util_isAdmin'] == 1)
            {
                $_SESSION['util_isAdmin'] = $user_data['util_nom']; 
                $_SESSION['util_nom'] = $user_data['util_nom'];
                $_SESSION['util_id'] = $user_data['util_id'];
                $_SESSION['util_email'] = $user_data['util_email']; 
                return TRUE;    
            }

            else { 
                $_SESSION['util_nom'] = $user_data['util_nom'];
                $_SESSION['util_id'] = $user_data['util_id'];
                $_SESSION['util_email'] = $user_data['util_email'];  
                return TRUE;  
            }
        }  
        else  
        {  
            return FALSE;  
        }  
    }  

}

?>