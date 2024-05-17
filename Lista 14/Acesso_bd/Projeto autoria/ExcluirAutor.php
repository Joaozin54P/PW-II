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
        <?php include 'headerAutor.php' ?>
        <!-- end nav --><br><br>
<center><h1>Exclusão de Autor cadastrados</h1></center>

<div class="wrapper">
<form name="cliente" method = "POST" action = "">
        <fieldeset id="a">
            <legend><b> Informa o código do Autor desejado: </b></legend>
            <div class="input-box">
            <input name="ccod_autor" type="number" size="10" maxlength="8" placeholder="Código do Autor" required onkeypress="return blokletras(window.event.keyCode)">
            <i class="bi bi-folder-x"></i>
</div>
            <button type="submit" name="btnenviar" class="btn btn-danger">Excluir</button>&nbsp;&nbsp;
            <button type="reset" name="limpar" class="btn btn-primary">Limpar</button></button>&nbsp;&nbsp;
            <a href="principal.php" class="btn btn-primary">Voltar</a>
</fieldeset>
</form>
</div>

<fieldeset id="b">
    <legend><b> Resultado: </b></legend>

    <?php
    extract($_POST, EXTR_OVERWRITE);
    if(isset($btnenviar))
    {
    include_once 'Autor.php';
    $p = new Autor();
    $p->setCod_autor($ccod_autor);
    echo "<h3><br>" . $p->exclusao() . "</h3>";
    }
?>
</fieldeset>

</body>
</html>