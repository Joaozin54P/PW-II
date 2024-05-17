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
         <?php include 'headerLivro.php' ?>
        <!-- end nav --><br><br>

        <div class="wrapper">
    <form name="cliente" method = "POST" action = "">
        <fieldeset id="a">
            <legend><h1> Dados do Livros: </h1></legend>
            <div class="input-box">
            <input name="tituloo" type="text" size="35" maxlength="200" placeholder="Título do Livro">
            <i class="bi bi-journal-bookmark"></i>
        </div>
            <div class="input-box">
            <input name="categoriaa" type="text" size="35" maxlength="80" placeholder="Categoria">
            <i class="bi bi-list"></i>
            </div>
            <div class="input-box">
            <input name="iibsn" type="text" size="10" maxlength="35" placeholder="IBSN" required onkeypress="return blokletras(window.event.keyCode)">
            <i class="bi bi-123"></i>
            </div>
            <div class="input-box">
            <input name="iidioma" type="text" size="25" maxlength="35" placeholder="Idioma do Livro">
            <i class="bi bi-alphabet-uppercase"></i>
            </div>
            <div class="input-box">
            <input name="QtdePag" type="text" size="15" maxlength="35" placeholder="Quantidade de páginas" required onkeypress="return blokletras(window.event.keyCode)">
            <i class="bi bi-123"></i>
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
    include_once 'Livro.php';
    $liv = new Livro();
    $liv->setTitulo($tituloo);
    $liv->setCategoria($categoriaa);
    $liv->setIbsn($iibsn);
    $liv->setIdioma($iidioma);
    $liv->setQtdepag($QtdePag);
    echo "<h3><br><br>" . $liv->salvar() . "</h3>";
 }
 ?>
 <br>
</body>
</html>