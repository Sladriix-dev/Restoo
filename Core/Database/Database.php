<?php
namespace Core\Database;
use PDO;

class Database {

    // https://github.com/alexgaill/blogsql


    /**
     * Connexion BDD
     *
     * @var PDO
     */
    private $pdo;

    /**
     * Génère la connexion à la BDD
     */
    public function __construct()
    {
        include_once ROOT."/config.php";
        $this->pdo = new \PDO(
            "'mysql:host=".DB_HOST.";dbname=".DB_DATABSE."',".DB_USER, DB_PASSWORD,
            [
                \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
            ]
        );
        $this->getPDO();
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