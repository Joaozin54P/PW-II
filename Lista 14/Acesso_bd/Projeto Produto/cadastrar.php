<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
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
        <?php include 'header2.php' ?>
        <!-- end nav -->

        <br><br><br><br><br>
        <div class="wrapper">
            <h1>Dados do Produto</h1>
            <form method="post">
        <div class="input-box">
        <input name="name" type="text" size="40" maxlength="40" placeholder="Nome do Produto" required>
        <i class="bi bi-postcard-heart-fill"></i>
        </div>
        <div class="input-box">
        <input name="estoqui" type="text" size="10" placeholder="0" required onkeypress="return blokletras(window.event.keyCode)">
        <i class="bi bi-123"></i>
        </div>
        <button type="submit" name="btnenviar" class="btn btn-primary">Cadastrar</button><br><br>
        <button type="reset" name="limpar" class="btn btn-primary">Limpar</button><br><br>
        <a href="principal.php" class="btn btn-primary">Voltar</a>
        </form>
</div>


<?php
 extract($_POST, EXTR_OVERWRITE);
 if(isset($btnenviar))
 {
    include_once 'Produto.php';
    $pro = new Produto();
    $pro->setNome($name);
    $pro->setEstoque($estoqui);
    echo "<h3><br><br>" . $pro->salvar() . "</h3>";
 }
 ?>
 <br>
 
</body>
</html>