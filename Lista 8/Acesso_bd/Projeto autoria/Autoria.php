<?php

include_once 'Conectar.php';

//parte 1 - atributos
class Autoria
{
    private $cod_autor;
    private $cod_livro;
    private $datalancamento;
    private $editora;
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
    public function getCod_livro()
    {
        return $this->cod_livro;
    }
    public function setCod_livro($ccod_livro)
    {
        $this->cod_livro = $ccod_livro;
    }
    public function getDatalancamento()
    {
        return $this->datalancamento;
    }
    public function setDatalancamento($datalancamentoo)
    {
        $this->datalancamento = $datalancamentoo;
    }
    public function getEditora()
    {
        return $this->editora;
    }
    public function setEditora($editoraa)
    {
        $this->editora = $editoraa;
    }

    //parte 3 - métodos

    function salvar()
    {
        try
        {
            $this-> conn = new Conectar();
            @$sql = $this->conn->prepare("INSERT INTO autoria VALUES (?,?,?,?)");
            @$sql-> bindParam(1, $this->getCod_autor(), PDO::PARAM_STR);
            @$sql-> bindParam(2, $this->getCod_livro(), PDO::PARAM_STR);
            @$sql-> bindParam(3, $this->getDatalancamento(), PDO::PARAM_STR);
            @$sql-> bindParam(4, $this->getEditora(), PDO::PARAM_STR);
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
            $sql = $this->conn->prepare("select * from autoria where cod_autor = ?"); //informei o ? (parametro)
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
            $sql = $this->conn->prepare("update autoria set cod_autor = ?, cod_livro = ?,datalancamento = ? where editora = ?");
            @$sql-> bindParam(1, $this->getCod_autor(), PDO::PARAM_STR);
            @$sql-> bindParam(2, $this->getCod_livro(), PDO::PARAM_STR);
            @$sql-> bindParam(3, $this->getDatalancamento(), PDO::PARAM_STR);
            @$sql-> bindParam(4, $this->getEditora(), PDO::PARAM_STR);
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
            $sql = $this->conn->prepare("select * from autoria where cod_livro like ?, datalancamento = ? where editora = ?");
            @$sql-> bindParam(1, $this->getCod_livro(), PDO::PARAM_STR);
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
            $sql = $this->conn->prepare("delete from autoria where cod_autor = ?");
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
        $sql = $this->conn->query("SELECT * FROM autoria ORDER BY cod_livro");
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