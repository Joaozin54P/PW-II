<?php

include_once 'Conectar.php';

//parte 1 - atributos
class Produto
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
        $this->id= $iid;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($name)
    {
        $this->nome= $name;
    }
    public function getEstoque()
    {
        return $this->estoque;
    }
    public function setEstoque($estoqui)
    {
        $this->estoque= $estoqui;
    }

    //parte 3 - métodos

    function salvar()
    {
        try {
            $this->conn = new Conectar();

            @$sql = $this->conn->prepare("INSERT INTO produto VALUES (null, ?, ?)");

            @$sql->bindParam(1, $this->getNome(), PDO::PARAM_STR);

            @$sql->bindParam(2, $this->getEstoque(), PDO::PARAM_STR);

            if ($sql->execute() == 1) 
            {
                return "Registro salvo com sucesso!";
            }
            $this->conn = null;
        } catch (PDOException $exc) {
            echo "Erro ao salvar o registro. " . $exc->getMessage();
        }
    }

    function alterar()
    {
        try
        {
            $this-> conn = new Conectar();
            $sql = $this->conn->prepare("select * from produto where id = ?"); //informei o ? (parametro)
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
            $this-> conn = new Conectar();
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
            $sql = $this->conn->prepare("select * from produto where nome like ?, estoque = ? whre id = ?");
            @$sql-> bindParam(1, $this->getNome(), PDO::PARAM_STR);
            $sql->execute();
            return $sql->fetchAll();
            $this->conn = null;
        }
        catch(PDOException $exc)
        {
            echo "Erro ao executar consultar. " . $exc->getMessage();
        }
    }

    function exclusao()
    {
        try
        {
            $this->conn = new Conectar();
            @$sql = $this->conn->prepare("DELETE FROM produto WHERE id = ?");
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
        $sql = $this->conn->query("SELECT * FROM produto ORDER BY id");
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
} //encerramento da clase Produto
