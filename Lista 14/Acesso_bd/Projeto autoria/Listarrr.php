<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/listar.css">
    <title>Bancos de dados - Listar</title>
</head>
<body>
    <div class="container">
        <!-- nav -->
        <?php include 'headerAutor.php' ?>
        <!-- end nav --><br><br>


        <center><h1>Relação de autor cadastrados</h1></center>
        <br><br>
        <div class="wrapper">
            <br>
        <?php
        include_once 'Autor.php';
        $aa = new Autor();
        $pro_bd = $aa->listar();
        ?>
        <b>cod_autor &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; nomeautor &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; sobrenome &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; nasc &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>
        <?php
        foreach ($pro_bd as $pro_mostrar) 
        {
            ?>
            <br><br>
            <b><?php echo $pro_mostrar[0]; ?></b>&nbsp;&nbsp;&nbsp;&nbsp;
            <?php echo $pro_mostrar[1]; ?> &nbsp;&nbsp;&nbsp;&nbsp;
            <?php echo $pro_mostrar[2]; ?> &nbsp;&nbsp;&nbsp;&nbsp;
            <?php echo $pro_mostrar[3]; ?> &nbsp;&nbsp;&nbsp;&nbsp;
            <?php echo $pro_mostrar[4]; ?> &nbsp;&nbsp;&nbsp;&nbsp;
            <?php
        }
        ?>
        </div><br>
        <a href="principal.php" class="btn btn-primary">Voltar</a>
    </div>
</body>
</html>