<?php

class Conectar extends PDO 
{
    private static $instancia;

    private $query; // comando sql

    private $host = "127.0.0.1"; // número de host ex: "000.0.0.0", "127.0.0.1"

    private $usuario = "root"; // nome do usuário do bd

    private $senha = ""; // senha de acesso

    private $db = "bd_autoria"; // nome do banco

    public function __construct() {

        parent::__construct("mysql:host=$this->host;dbname=$this->db", $this->usuario, $this->senha);

    }


    public static function getInstance() {

        if (!isset(self::$instancia)) {

            try {

                self::$instancia = new Conectar();

                echo 'Conectado com sucesso';

            } catch (PDOException $e) {

                echo 'Falha ao conectar: ';

                exit();

            }

        }

        return self::$instancia;

    }

    public function sql($query) {

        $this->getInstance();

        $this->query = $query;

        $stmt = $pdo->prepare($this->query);

        $stmt->execute();

        $pdo = null;

    }

}

?>