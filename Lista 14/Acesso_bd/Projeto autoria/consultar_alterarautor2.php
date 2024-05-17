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
        <?php include 'headerAutor.php' ?>
        <!-- end nav --><br><br>


        <center><h1>Alterar os Autor cadastrados</h1></center>
<br>
<div class="wrapper">
<fieldeset>
        <?php
        $id = $_POST["ccod_autor"];
        include_once 'Autor.php';
        $p = new Autor();
        $p->setCod_autor($id);
        $pro_bd=$p->alterar();
        ?>

    <br><form name="cliente2" method = "POST" action = "">
    <?php
    foreach($pro_bd as $pro_mostrar)
    {
    ?>
    <center><input type="hidden" name="ccod_autor" size="5" value='<?php echo $pro_mostrar[0]?>'>
    <p> <?php echo "código de autor: " . $pro_mostrar[0]; // como é mariz - posição 0 ?></b>
    <br><br><b><?php echo "Nome do Autor: "; ?></b> <input name="nomeautorr" type="text" size="50" maxlength="35" placeholder="Nome do autor" value='<?php echo $pro_mostrar[1]?>'>
    <br><br> <b><?php echo "Sobrenome: ";?></b>  <input name="sobrenomee" type="text" size="35" maxlength="35" placeholder="Sobrenome" value='<?php echo $pro_mostrar[2]?>'>
    <br><br> <b><?php echo "Email: ";?></b>  <input name="emaill" type="email" size="25" maxlength="35" placeholder="" value='<?php echo $pro_mostrar[3]?>'>
    <br><br> <b><?php echo "Data de nascimento: ";?></b>  <input name="nascc" type="date" size="25" maxlength="30" placeholder="" value='<?php echo $pro_mostrar[4]?>'></center>
    <br><br>
    <button type="submit" name="btnalterar" class="btn btn-primary">Alterar</button><br><br>
    <a href="consultar_alterarlivro.php" class="btn btn-primary">Voltar</a>
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
    include_once 'Autor.php';
    $pro = new Autor();
    $pro->setNomeautor($nomeautorr);
    $pro->setSobrenome($sobrenomee);
    $pro->setEmail($emaill);
    $pro->setNasc($nascc);
    $pro->setCod_autor($ccod_autor);
    echo "<br><br><br>" . $pro->alterar2() . "</h3>";
    echo "<script language='JavaScript'> window.location.href = 'consultar_alterarautor.php'; </script>";
}
?>


</body>
</html>