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
</head>
<body>
    <div class="container">
        <!-- nav -->
        <?php include 'header2.php' ?>
        <!-- end nav --> <br>
        
<center><font face = "Century Gothic" size = "6"><b>Alterar os produto cadastrados</b></font></center>
<br>

<div class="wrapper">
<fieldeset>
        <?php
        $id = $_POST["iid"];
        include_once 'Produto.php';
        $p = new Produto();
        $p->setId($id);
        $pro_bd=$p->alterar();
        ?>


    <br><form name="cliente2" method = "POST" action = "">
    <?php
    foreach($pro_bd as $pro_mostrar)
    {
    ?>
    <input type="hidden" name="iid" size="5" value='<?php echo $pro_mostrar[0]?>'>
    <p> <?php echo "ID: " . $pro_mostrar[0]; // como é mariz - posição 0 ?></b>
    <br><br><b><?php echo "Nome: "; ?></b> <input name="name" type="text" size="30" maxlength="30" placeholder="Nome do Produto" value='<?php echo $pro_mostrar[1]?>'>
    <br><br> <b><?php echo "Estoque: ";?></b>  <input name="estoqui" type="text" size="15" maxlength="30" placeholder="Estoque" value='<?php echo $pro_mostrar[2]?>'></center>
    <br><br>
    <button type="submit" name="btnalterar" class="btn btn-primary">Alterar</button><br><br>
    <a href="principal.php" class="btn btn-primary">Voltar</a>
<?php
    }
    ?>

</form>
</fieldeset>
</div>
<?php
    extract($_POST, EXTR_OVERWRITE);
    if(isset($btnalterar))
    {
    include_once 'Produto.php';
    $pro = new Produto();
    $pro->setNome($name);
    $pro->setEstoque($estoqui);
    $pro->setId($iid);
    echo "<br><br><br>" . $pro->alterar2() . "</h3>";
    echo "<script language='JavaScript'> window.location.href = 'consultar_alterar.php'; </script>";
}
?>
</body>
</html>
