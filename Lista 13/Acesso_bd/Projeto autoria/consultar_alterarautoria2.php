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
        <?php include 'headerAutoria.php' ?>
        <!-- end nav --><br><br>

        <center><h1>Alterar a autoria cadastradas</h1></center>
<br>

<div class="wrapper">
<fieldeset>
        <?php
        $id = $_POST["ccod_autor"];
        include_once 'Autoria.php';
        $p = new Autoria();
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
    <br><br> <b><?php echo "Código do livro: ";?></b>  <input name="ccod_livro" type="text" size="35" mah="35" placeholder="" maxlength="35" placeholder="" value='<?php echo $pro_mostrar[1]?>'>
    <br><br> <b><?php echo "Data de lançamento: ";?></b>  <input name="datalancamentoo" type="text" size="35" mah="35" placeholder="" maxlength="35" placeholder="" value='<?php echo $pro_mostrar[2]?>'>
    <br><br> <b><?php echo "Editora: ";?></b>  <input name="editoraa" type="text" size="35" maxlength="30" placeholder="" value='<?php echo $pro_mostrar[3]?>'></center>
    <button type="submit" name="btnalterar" class="btn btn-primary">Alterar</button><br><br>
    <a href="consultar_alterarautoria.php" class="btn btn-primary">Voltar</a>
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
        include_once 'Autoria.php';
        $pro = new Autoria();
        $pro->setCod_livro($ccod_livro);
        $pro->setDatalancamento($datalancamentoo);
        $pro->setEditora($editoraa);
        $pro->setCod_autor($ccod_autor);
        $pro->alterar2();
        echo "<script language='JavaScript'> window.location.href = 'consultar_alterarautoria.php'; </script>";
        exit();
}
?>

</body>
</html>