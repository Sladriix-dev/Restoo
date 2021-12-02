<?php
namespace Core\Database;

use App\Controller\ErrorController;
use PDO;
use PDOException;

class Database {

    // https://github.com/alexgaill/blogsql


    /**
     * Connexion BDD
     *
     * @var PDO
     */
    protected $pdo;

    /**
     * Génère la connexion à la BDD
     */
    public function __construct()
    {
        try {
            include ROOT."/Config/config.php";
            // Exemple: 
            // $configDb = [
            //     "host" => "localhost",
            //     "dbname" => "poo_project",
            //     "user" => "root",
            //     "pwd" => "",
            // ];
            $this->pdo = new \PDO(
                "mysql:host=".DB_HOST.";dbname=".DB_DATABSE, 
                DB_USER, 
                DB_PASSWORD,
                [
                    \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
                ]
            );
            if (is_null($this->pdo)) {
                throw new PDOException("La connexion ne s'est pas faite, Vérifiez vos identifiants", 500);
            }
            
        } catch (\PDOException $e) {
            (new ErrorController)->PdoError($e->getMessage());
            die();
        }
    }

    /**
     * Retourne la connexion PDO
     *
     * @return PDO
     */
    public function getPDO():PDO
    {
        return $this->pdo;
    }
}