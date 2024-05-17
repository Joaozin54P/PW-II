<?php

include_once 'Conectar.php';

//parte 1 - atributos
class Autor
{
    private $cod_autor;
    private $nomeautor;
    private $sobrenome;
    private $email;
    private $nasc;
    private $conn;

    //parte 2 - os gettes e setter

    public function getCod_autor()
    {
        return $this->cod_autor;
    }
    public function setCod_autor($ccod_autor)
    {
        $this->cod_autor = $ccod_autor;
    }
    public function getNomeautor()
    {
        return $this->nomeautor;
    }
    public function setNomeautor($nomeautorr)
    {
        $this->nomeautor = $nomeautorr;
    }
    public function getSobrenome()
    {
        return $this->sobrenome;
    }
    public function setSobrenome($sobrenomee)
    {
        $this->sobrenome = $sobrenomee;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($emaill)
    {
        $this->email = $emaill;
    }
    public function getNasc()
    {
        return $this->nasc;
    }
    public function setNasc($nascc)
    {
        $this->nasc = $nascc;
    }

    //parte 3 - métodos

    function salvar()
    {
        try
        {
            $this-> conn = new Conectar();
            @$sql = $this->conn->prepare("INSERT INTO autor VALUES (null,?,?,?,?)");
            @$sql-> bindParam(1, $this->getNomeautor(), PDO::PARAM_STR);
            @$sql-> bindParam(2, $this->getSobrenome(), PDO::PARAM_STR);
            @$sql-> bindParam(3, $this->getEmail(), PDO::PARAM_STR);
            @$sql-> bindParam(4, $this->getNasc(), PDO::PARAM_STR);
            if($sql->execute() == 1)
            {
                return "Registro salvo com sucesso!";
            }
            $this->conn = null;
        }
        catch(PDOException $exc)
        {
            echo "Erro ao salvar o registro. " . $exc->getMessage();
        }
    }

    function alterar()
    {
        try
        {
            $this->conn = new Conectar();
            $sql = $this->conn->prepare("select * from autor where cod_autor = ?"); //informei o ? (parametro)
            @$sql-> bindParam(1, $this->getId(), PDO::PARAM_STR); //Inclui esta linha para definir o parametro
            $sql->execute();
            return $sql->fetchAll();
            $this->conn = null;
        }
        catch(PDOException $exc)
        {
            echo "Erro ao alterar. " . $exc->getMessage();
        }
    }

    function alterar2()
    {
        try
        {
            $this->conn = new Conectar();
            $sql = $this->conn->prepare("update autoria set cod_autor = ?, nomeautor = ?,sobrenome = ?,email = ? where nasc = ?");
            @$sql-> bindParam(1, $this->getCod_autor(), PDO::PARAM_STR);
            @$sql-> bindParam(2, $this->getNomeautor(), PDO::PARAM_STR);
            @$sql-> bindParam(3, $this->getSobrenome(), PDO::PARAM_STR);
            @$sql-> bindParam(4, $this->getEmail(), PDO::PARAM_STR);
            @$sql-> bindParam(5, $this->getNasc(), PDO::PARAM_STR);
            if($sql->execute() == 1)
            {
                return "Registro alterado com sucesso!";
            }
            $this->conn = null;
        }
        catch(PDOException $exc)
        {
            echo "Erro ao salvar o registro. " . $exc->getMessage();
        }
    }

    function consultar()
    {
        try
        {
            $this->conn = new Conectar();
            $sql = $this->conn->prepare("select * from autor where nomeautor like ?, sobrenome = ?, email = ? where nasc = ?");
            @$sql-> bindParam(1, $this->getNomeautor(), PDO::PARAM_STR);
            $sql->execute();
            return $sql->fetchAll();
            $this->conn = null;
        }
        catch(PDOException $exc)
        {
            echo "Erro ao executar consultar. " .$exc->getMessage();
        }
    }

    function exclusao()
    {
        try
        {
            $this->conn = new Conectar();
            $sql = $this->conn->prepare("delete from autor where cod_autor = ?");
            @$sql-> bindParam(1, $this->cod_autor(), PDO::PARAM_STR);
            if($sql->execute() == 1)
            {
                return "Excluido com sucesso!";
            }
            else
            {
                return "Erro na exclusao!";
            }
            $this->conn = null;
        }
        catch(PDOException $exc)
        {
            echo "Erro ao excluir. " .$exc->getMessage();
        }
    }

    function listar()
{
    try
    {
        $this->conn = new Conectar();
        $sql = $this->conn->query("SELECT * FROM autor ORDER BY nomeautor");
        $sql->execute();
        $resultados = $sql->fetchAll();
        $this->conn = null;
        return $resultados;
    }
    catch(PDOException $exc)
    {
        echo "Erro ao executar consulta. " . $exc->getMessage();
    }
}
}//encerramento da clase Produto