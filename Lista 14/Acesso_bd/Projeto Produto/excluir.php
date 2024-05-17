<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/excluir.css">
    <title>Bancos de dados - Excluir</title>

    <script language=javascript>
  function blokletras(keypress) {
    // Campo senha - bloqueia letras
    if (keypress >= 48 && keypress <= 57) {
      return true;
    } else {
      return false;
    }
  }
</script>
</head>
<body>

<div class="container">
<!-- nav -->
<?php include 'header2.php' ?>
    <!-- end nav -->

<br><br><br><br>

<h1>Exclusão de Produtos Cadastrados</h1>
        <br>

    <div class="wrapper">
        <form name="cliente" method="POST" action="">
            <legend><b> Informe o ID do produto desejado: </b></legend>
            <div class="input-box">
            <input name="iid" type="text" size="20" maxlength="8" placeholder="ID do Produto" required onkeypress="return blokletras(window.event.keyCode)">
            <i class="bi bi-folder-x"></i>
</div>
            <button type="submit" name="btnenviar" class="btn btn-danger">Excluir</button>&nbsp;&nbsp;
            <button type="reset" name="limpar" class="btn btn-primary">Limpar</button></button>&nbsp;&nbsp;
            <a href="principal.php" class="btn btn-primary">Voltar</a>
        </form>
    </div>


<legend><b> Resultado: </b></legend><br><br>

    <?php
    extract($_POST, EXTR_OVERWRITE);
    if(isset($btnenviar))
    {
    include_once 'Produto.php';
    $p = new Produto();
    $p->setId($iid);
    echo "<h3><br>" . $p->exclusao() . "</h3>";
    }
?>
</div>
</body>
</html>