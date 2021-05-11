<?php

abstract class Model
{


    //Informations de la base de donnees
    protected $_connexion;
    private $host = "localhost";
    private $port = "3306";
    private $database = "dassamMessagerie";
    private $user = "root";
    private $password = "";

    public $table;
    public $id = 2;


    public function getConnexion()
    {
        $this->_connexion = null;


        try {
            $dburl = "mysql:host=" . $this->host . ";port=" . $this->port . ";charset=utf8;dbname=" . $this->database;
            $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            $this->_connexion = new PDO($dburl, $this->user, $this->password, $pdo_options);
        } catch (Exception  $ex) {
            echo $ex->getMessage();
        }
    }

    public function getAll()
    {
        $sql = "SELECT * FROM " . $this->table;
        $query = $this->_connexion->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

    public function getOne($id)
    {
        if (is_numeric($id)) {
            $sql = "SELECT * FROM " . $this->table . " WHERE id=" . $id;
            $query = $this->_connexion->prepare($sql);
            $query->execute();
            return $query->fetch();
        } else {
            return false;
        }
    }

    public function save(){
        
    }
}
