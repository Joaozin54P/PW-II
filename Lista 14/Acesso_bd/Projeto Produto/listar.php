<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/listar.css">
    <title>Bancos de dados - Listar</title>
</head>
<body>
    <div class="container">
        <!-- nav -->
        <?php include 'header2.php' ?>
        <!-- end nav -->
        <br><br><br><br>
        <center><h1>Relação de produtos cadastrados</h1><br><br><br>

        <div class="wrapper">
        <br>
        <?php
        include_once 'Produto.php';
        $p = new Produto();
        $pro_bd = $p->listar();
        ?>
        <b>Id &nbsp;&nbsp;&nbsp;&nbsp; Nome &nbsp;&nbsp;&nbsp;&nbsp; Estoque</b>
        <?php
        foreach ($pro_bd as $pro_mostrar) 
        {
            ?>
            <br><br>
            <b><?php echo $pro_mostrar[0]; ?></b>   
            <?php echo $pro_mostrar[1]; ?> &nbsp;&nbsp;
            <?php echo $pro_mostrar[2]; ?> &nbsp;&nbsp;
            <?php
        }
        ?>
        </div><br>
        <a href="principal.php" class="btn btn-primary">Voltar</a>
    </div>
</body>
</html>
