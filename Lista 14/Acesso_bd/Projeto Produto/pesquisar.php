<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/pesquisar.css">
    <title>Bancos de dados - Pesquisar</title>
</head>
<body>
    <div class="container">
    <!-- nav -->
    <?php include 'header2.php' ?>
    <!-- end nav -->
    <br><br><br><br>

    <div class="wrapper">
    <center><font face="Century Gothic" size="6"><b>Consulta de Produtos Cadastros</b></font></center>
    <br>

    <form name="consulta" method="POST" action="">
        <fieldset id="consultaForm">
            <legend><b> Informe o nome do produto desejado: </b></legend>
            <div class="input-box">
            <input name="name" type="text" size="30" maxlength="30" placeholder="Nome do Produto">
            <i class="bi bi-search"></i>
</div>
            <br><br>
            <button type="submit" name="btnenviar" class="btn btn-primary">Pesquisar</button><br><br>
        <button type="reset" name="limpar" class="btn btn-primary">Limpar</button><br><br>
        <a href="principal.php" class="btn btn-primary">Voltar</a>
        </fieldset>
    </form>


    <?php
    extract($_POST, EXTR_OVERWRITE);
    if(isset($btnenviar))
    {
    include_once 'Produto.php';
    $p = new Produto();
    $p->setNome($name. '%');
    $pro_bd=$p->consultar();
    foreach($pro_bd as $pro_mostrar)
    {
        ?> <br>
        <b> <?php echo "ID: " . $pro_mostrar[0]; ?></b> &nbsp;&nbsp;&nbsp;&nbsp;
        <b> <?php echo "Nome: " . $pro_mostrar[1]; ?></b> &nbsp;&nbsp;&nbsp;&nbsp;
        <b> <?php echo "Estoque: " . $pro_mostrar[2]; ?></b>
        <?php
    }
}
?>
</fieldeset>
</form>
</body>
</html>