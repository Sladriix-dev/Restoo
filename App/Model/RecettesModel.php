<?php
namespace App\Model;

use Core\Model\DefaultModel;
use \Pdo;
/**
 * @method array findAll() Retourne tous les articles
 * @method Article find(int $id) Retourne un article en fonction de son id
 */
    class RecettesModel extends DefaultModel {

        protected $table = "recettes";

        /**
         * Undocumented function
         *
         * @param array $categorie
         * @return bool
         */
        public function listAllArticles(array $categorie)
        {
            $statement = "INSERT INTO article 
            (title, content, categorie_id, user_id, picture)
            VALUES (:title, :content, :categorie_id, :user_id, :picture)
            ";
            return $this->save($statement, $categorie);
        }
    }