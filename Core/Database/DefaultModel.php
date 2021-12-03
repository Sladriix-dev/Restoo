<?php
namespace Core\Model;

use Core\Database\Database;

class DefaultModel extends Database {

    /**
     * Nom de la table à charger dans la BDD
     *
     * @var string
     */
    protected $table;

    /**
     * Nom de l'entité chargée
     *
     * @var string
     */
    private $entity;

    /**
     * Charge l'entité appelée.
     * Appelle le constructeur de database
     */
    public function __construct()
    {
        parent::__construct();
        $this->entity = "App\Entity\\".ucfirst($this->table);
    }
     /**
     * Récupère toutes les lignes d'une table
     *
     * @return array|bool
     */
    public function findAll()
    {
        $query = $this->pdo->query("SELECT * FROM $this->table");
        // $query->setFetchMode(\PDO::FETCH_BOTH); // Valeur par défaut
        // $query->setFetchMode(\PDO::FETCH_ASSOC); // Retourne les valeurs en tableau associatif
        // $query->setFetchMode(\PDO::FETCH_OBJ); // retourne les valeurs en objet
        $query->setFetchMode(\PDO::FETCH_CLASS, $this->entity); // retourne les valeurs liés à la class
        return $query->fetchAll();
    }

    /**
     * Récupère une ligne d'une table en fonction de son id
     *
     * @param integer $id
     * @return Object|bool
     */
    public function find(int $id)
    {
        $query = $this->pdo->query("SELECT * FROM $this->table WHERE id=$id");
        $query->setFetchMode(\PDO::FETCH_CLASS, $this->entity); // retourne les valeurs liés à la class
        return $query->fetch();
    }

    /**
     * Ajoute une ligne en BDD
     *
     * @param string $statement
     * @param array $data
     * @return bool
     */
    protected function save(string $statement, array $data)
    {
        $prepare = $this->pdo->prepare($statement);
        return $prepare->execute($data);
    }
}