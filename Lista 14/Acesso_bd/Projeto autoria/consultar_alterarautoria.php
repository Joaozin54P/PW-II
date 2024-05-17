<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/alterar.css">
    <title>Bancos de dados - Alterar</title>

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

        <center><h1>Alteração de autoria Cadastradas</h1></center>
<br>

<div class="wrapper">
<form name="cliente" method = "POST" action = "consultar_alterarautoria2.php">
        <fieldeset>
            <legend><b> Informa o Id da autor desejado: </b></legend>
            <div class="input-box">
            <input name="ccod_autor" type="text" size="10" maxlength="5" placeholder="Id do autor" required onkeypress="return blokletras(window.event.keyCode)">
            <i class="bi bi-arrow-clockwise"></i>
</div>
            <br><br>
            <button type="submit" name="btnenviar" class="btn btn-primary">Enviar</button><br><br>
          <button type="reset" name="limpar" class="btn btn-primary">Limpar</button><br><br>
</fieldeset>
</form>
</div>
</div>


<center> <br><br><br><br>
<button><a href="principal.php"> Voltar </a></button>
</body>
</html>