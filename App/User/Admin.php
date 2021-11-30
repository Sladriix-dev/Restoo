<?php
    namespace App\User;

    class Admin extends User {
        protected bool $isAdmin;

        public function __construct(){
            $this->isAdmin = false;
        }

        public function userAdmin() {
            $this->isAdmin = true;
        }
    }


?>