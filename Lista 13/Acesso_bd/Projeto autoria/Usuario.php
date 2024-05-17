<?php
include_once 'Conectar.php';

class Usuario
{
    private $Login;

    private $Senha;

    private $conn;

    public function getLogin()
    {
        return $this->Login;
    }
    
    public function setLogin($usuario)
    {
        $this->Login = $usuario;
    }

    public function getSenha()
    {
        return $this->Senha;
    }

    public function setSenha($senhaa)
    {
        $this->Senha = $senhaa;
    }

    function logar()
    {
        try
        {
            $this-> conn = new Conectar();
            $sql = $this->conn->prepare("SELECT * FROM usuario WHERE login like ? and senha = ?");
            @$sql-> bindParam(1, $this->getLogin(), PDO::PARAM_STR);
            @$sql-> bindParam(2, $this->getSenha(), PDO::PARAM_STR);
            $sql->execute();
            return $sql->fetchAll();
            $this->conn = null;
        }
        catch(PDOException $exc)
        {
            echo "<span class='text-green-200'>Erro ao executar consulta.</span>" . $exc->getMessage();
        }
    }
}

?>