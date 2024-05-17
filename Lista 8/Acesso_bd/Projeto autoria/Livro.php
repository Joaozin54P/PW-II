<?php

include_once 'Conectar.php';

//parte 1 - atributos
class Livro
{
    private $cod_livro;
    private $titulo;
    private $categoria;
    private $ibsn;
    private $idioma;
    private $qtdepag;
    private $conn;

    //parte 2 - os gettes e setter

    public function getCod_livro()
    {
        return $this->cod_livro;
    }
    public function setCod_livro($ccod_livro)
    {
        $this->cod_livro = $ccod_livro;
    }
    public function getTitulo()
    {
        return $this->titulo;
    }
    public function setTitulo($tituloo)
    {
        $this->titulo = $tituloo;
    }
    public function getCategoria()
    {
        return $this->categoria;
    }
    public function setCategoria($categoriaa)
    {
        $this->categoria = $categoriaa;
    }
    public function getIbsn()
    {
        return $this->ibsn;
    }
    public function setIbsn($iibsn)
    {
        $this->ibsn = $iibsn;
    }
    public function getIdioma()
    {
        return $this->idioma;
    }
    public function setIdioma($iidioma)
    {
        $this->idioma = $iidioma;
    }
    public function getQtdepag()
    {
        return $this->qtdepag;
    }
    public function setQtdepag($QtdePag)
    {
        $this->qtdepag = $QtdePag;
    }

    //parte 3 - métodos

    function salvar()
    {
        try
        {
            $this-> conn = new Conectar();
            @$sql = $this->conn->prepare("INSERT INTO livro VALUES (?,?,?,?,?,?)");
            @$sql-> bindParam(1, $this->getCod_livro(), PDO::PARAM_STR);
            @$sql-> bindParam(2, $this->getTitulo(), PDO::PARAM_STR);
            @$sql-> bindParam(3, $this->getCategoria(), PDO::PARAM_STR);
            @$sql-> bindParam(4, $this->getIbsn(), PDO::PARAM_STR);
            @$sql-> bindParam(5, $this->getIdioma(), PDO::PARAM_STR);
            @$sql-> bindParam(6, $this->getQtdepag(), PDO::PARAM_STR);
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
            $sql = $this->conn->prepare("select * from livro where cod_livro = ?"); //informei o ? (parametro)
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
            $sql = $this->conn->prepare("update livro set cod_livro = ?, titulo = ?,categoria = ?,ibsn = ?,idioma = ? where qtdepag = ?");
            @$sql-> bindParam(1, $this->getCod_livro(), PDO::PARAM_STR);
            @$sql-> bindParam(2, $this->getTitulo(), PDO::PARAM_STR);
            @$sql-> bindParam(3, $this->getCategoria(), PDO::PARAM_STR);
            @$sql-> bindParam(4, $this->getIbsn(), PDO::PARAM_STR);
            @$sql-> bindParam(5, $this->getIdioma(), PDO::PARAM_STR);
            @$sql-> bindParam(6, $this->getQtdepag(), PDO::PARAM_STR);
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
            $sql = $this->conn->prepare("select * from livro where titulo like ?, categoria = ?,ibsn = ?,idioma = ?, where qtdepag = ?");
            @$sql-> bindParam(1, $this->getTitulo(), PDO::PARAM_STR);
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
            $sql = $this->conn->prepare("delete from livro where cod_livro = ?");
            @$sql-> bindParam(1, $this->Cod_livro(), PDO::PARAM_STR);
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
        $sql = $this->conn->query("SELECT * FROM livro ORDER BY titulo");
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