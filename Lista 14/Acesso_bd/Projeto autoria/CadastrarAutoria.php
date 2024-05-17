<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/cadastrar.css">
    <title>Bancos de dados - Cadastrar</title>

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
        <?php include 'headerAutoria.php' ?>
        <!-- end nav --><br><br>

        <div class="wrapper">
    <form name="cliente" method = "POST" action = "">
        <fieldeset id="a">
            <legend><b> Dados da Autoria: </b></legend>
            <div class="input-box">
            <input name="ccod_autor" type="text" size="10" maxlength="35" placeholder="código do autor" required onkeypress="return blokletras(window.event.keyCode)">
            <i class="bi bi-123"></i>
            </div>
            <div class="input-box">
            <input name="ccod_livro" type="text" size="10" maxlength="35" placeholder="código do Livro" required onkeypress="return blokletras(window.event.keyCode)">
            <i class="bi bi-123"></i>
            </div>
            <div class="input-box">
            <input name="editoraa" type="text" size="80" maxlength="80" placeholder="Editora">
            <i class="bi bi-shop"></i>
            </div>
            <div class="input-box">
            <input name="datalancamentoo" type="date" size="20" maxlength="35" placeholder="Data de Lançamento">
            </div>
</fieldeset>

<button type="submit" name="btnenviar" class="btn btn-primary">Cadastrar</button><br><br>
        <button type="reset" name="limpar" class="btn btn-primary">Limpar</button><br><br>
        <a href="principal.php" class="btn btn-primary">Voltar</a>
</form>
</div>


<?php
 extract($_POST, EXTR_OVERWRITE);
 if(isset($btnenviar))
 {
    include_once 'Autoria.php';
    $liv = new Autoria();
    $liv->setCod_autor($ccod_autor);
    $liv->setCod_livro($ccod_livro);
    $liv->setEditora($editoraa);
    $liv->setDatalancamento($datalancamentoo);
    echo "<h3><br><br>" . $liv->salvar() . "</h3>";
 }
 ?>
 <br>
</body>
</html>