<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/pesquisar.css">
    <title>Bancos de dados - Consultar</title>
</head>
<body>
    <div class="container">
        <!-- nav -->
        <?php include 'headerLivro.php' ?>
        <!-- end nav --><br><br>

        <div class="wrapper">
    <form name="cliente" method = "POST" action = "">
        <fieldeset id="a">
            <legend><b> Consultar dados do livro: </b></legend>
            <div class="input-box">
            <input name="tituloo" type="text" size="25" maxlength="35" placeholder="Título do Livro">
            <i class="bi bi-search"></i>
        </div>
            <br><br>
            <button type="submit" name="btnenviar" class="btn btn-primary">Pesquisar</button><br><br>
        <button type="reset" name="limpar" class="btn btn-primary">Limpar</button><br><br>
        <a href="principal.php" class="btn btn-primary">Voltar</a>
</fieldeset>
</form>
<fieldeset id="b">
    <legend><b> Resultado: </b></legend>

    <?php
    extract($_POST, EXTR_OVERWRITE);
    if(isset($btnenviar))
    {
    include_once 'Livro.php';
    $p = new Livro();
    $p->setTitulo($tituloo. '%');
    $pro_bd=$p->consultar();
    foreach($pro_bd as $pro_mostrar)
    {
        ?> <br>
        <b> <?php echo "Código do livro: " . $pro_mostrar[0]; ?></b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <b> <?php echo "Título do livro: " . $pro_mostrar[1]; ?></b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <b> <?php echo "Categoria: " . $pro_mostrar[2]; ?></b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <b> <?php echo "IBSN: " . $pro_mostrar[3]; ?></b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <b> <?php echo "Idioma: " . $pro_mostrar[4]; ?></b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <b> <?php echo "Quantidade de páginas: " . $pro_mostrar[5]; ?></b>
        <?php
    }
}
?><br><br>
</fieldeset>
</form>
</body>
</html>