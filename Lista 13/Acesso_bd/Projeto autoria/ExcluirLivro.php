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
</head>
<body>
    <div class="container">
        <!-- nav -->
        <?php include 'headerLivro.php' ?>
        <!-- end nav --><br><br>

<center><h1>Exclusão da Autoria cadastrados</h1></center>

<div class="wrapper">
<form name="cliente" method = "POST" action = "">
        <fieldeset id="a">
            <legend><b> Informa o código do Livro desejado: </b></legend>
            <div class="input-box">
            <input name="ccod_livro" type="number" size="10" maxlength="8" placeholder="código do livro">
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
    include_once 'Livro.php';
    $l = new Livro();
    $l->setCod_livro($ccod_livro);
    echo "<h3><br>" . $l->exclusao() . "</h3>";
    }
?>
</fieldeset>
</div>
</body>
</html>