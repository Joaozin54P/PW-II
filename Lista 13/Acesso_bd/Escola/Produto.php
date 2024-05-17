<?php

include_once 'Conectar.phpp';

//parte 1 - atributos
class Produtos
{
    private $id;
    private $nome;
    private $estoque;
    private $conn;

    //parte 2 - os gettes e setter

    public function getId()
    {
        return $this->id;
    }
    public function setId($iid)
    {
        $this->id = $iid;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($name)
    {
        $this->nome = $name;
    }
    public function getEstoque()
    {
        return $this->estoque;
    }
    public function setEstoque($estoqui)
    {
        $this->estoque = $estoqui;
    }

    //parte 3 - métodos

    function salvar()
    {
        try
        {
            $this-> conn = new Conectar();
            $squl = $this->prepare("insert into produto values (null,?,?");
            @$sql-> bindParam(1, $this->getNome(), PDO::PARAM_STR);
            @$sql-> bindParam(2, $this->getEstoque(), PDO::PARAM_STR);
            if($sql->execute() == 1)
            {
                return "Registro salvo com sucesso!";
            }
            $this->conn = null;
        }
        catch(PDOException $exo)
        {
            echo "Erro ao salvar o registro. " . $exo->getMessage();
        }
    }

    function alterar()
    {
        try
        {
            $this->conn = new Conectar();
            $sql = $this->conn->prepare("select * from produto where id = ?"); //informei o ? (parametro)
            @$sql-> bindParam(1, $this->getId(), PDO::PARAM_STR); //Inclui esta linha para definir o parametro
            $sql->execute();
            return $sql->fetchAll();
            $this->conn = null;
        }
        catch(PDOException $exo)
        {
            echo "Erro ao alterar. " . $exo->getMessage();
        }
    }

    function alterar2()
    {
        try
        {
            $this->conn = new Conectar();
            $sql = $this->conn->prepare("update produto set nome = ?, estoque = ? whre id = ?");
            @$sql-> bindParam(1, $this->getNome(), PDO::PARAM_STR);
            @$sql-> bindParam(2, $this->getEstoque(), PDO::PARAM_STR);
            @$sql-> bindParam(3, $this->getId(), PDO::PARAM_STR);
            if($sql->execute() == 1)
            {
                return "Registro alterado com sucesso!";
            }
            $this->conn = null;
        }
        catch(PDOException $exo)
        {
            echo "Erro ao salvar o registro. " . $exo->getMessage();
        }
    }

    function consultar()
    {
        try
        {
            $this->conn = new Conectar();
            $sql = $this->conn->prepare("select * from produto where nome like ?, estoque = ? whre id = ?");
            @$sql-> bindParam(1, $this->getNome(), PDO::PARAM_STR);
            $sql->execute();
            return $sql->fetchAll();
            $this->conn = null;
        }
        catch(PDOException $exo)
        {
            echo "Erro ao executar consultar. " .$exo->getMessage();
        }
    }

    function exclusao()
    {
        try
        {
            $this->conn = new Conectar();
            $sql = $this->conn->prepare("delete from produto where id = ?");
            @$sql-> bindParam(1, $this->getId(), PDO::PARAM_STR);
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
        catch(PDOException $exo)
        {
            echo "Erro ao excluir. " .$exo->getMessage();
        }
    }

    function listar()
    {
        try
        {
            $this->conn = new Conectar();
            $sql = $this->conn->query("select * from produto order by nome");
            $sql->execute()
            return $sql->fetchAll();
            $this->conn = null;
        catch(PDOException $exo)
        {
            echo "Erro ao executar consulta. " .$exo->getMessage();
        }
    }

} //encerramento da clase Produto