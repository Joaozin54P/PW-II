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
</head>
<body>
    <div class="container">
        <!-- nav -->
        <?php include 'headerAutor.php' ?>
        <!-- end nav --><br><br>

        <div class="wrapper">
    <form name="cliente" method = "POST" action = "">
        <fieldeset id="a">
            <legend><b> Dados do Autor: </b></legend>
            <div class="input-box">
            <input name="nomeautorr" type="text" size="50" maxlength="35" placeholder="Nome do autor">
            <i class="bi bi-person-vcard"></i>
            </div>
            <div class="input-box">
            <input name="sobrenomee" type="text" size="50" maxlength="35" placeholder="Sobrenome do Autor">
            <i class="bi bi-person-vcard-fill"></i>
            </div>
            <div class="input-box">
            <input name="emaill" type="email" size="80" maxlength="80" placeholder="Email do autor">
            <i class="bi bi-envelope-at"></i>
            </div>
            <div class="input-box">
            <input name="nascc" type="date" size="20" maxlength="80" placeholder="nascimento do autor">
            </div>
</fieldeset>
<button type="submit" name="btnenviar" class="btn btn-primary">Cadastrar</button><br><br>
        <button type="reset" name="limpar" class="btn btn-primary">Limpar</button><br><br>
        <a href="principal.php" class="btn btn-primary">Voltar</a>
</form>


<?php
 extract($_POST, EXTR_OVERWRITE);
 if(isset($btnenviar))
 {
    include_once 'Autor.php';
    $liv = new Autor();
    $liv->setNomeautor($nomeautorr);
    $liv->setSobrenome($sobrenomee);
    $liv->setEmail($emaill);
    $liv->setNasc($nascc);
    echo "<h3><br><br>" . $liv->salvar() . "</h3>";
 }
 ?>
 <br>

</body>
</html>