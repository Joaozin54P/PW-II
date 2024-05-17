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
         <?php include 'headerLivro.php' ?>
        <!-- end nav --><br><br>

        <center><h1>Alterar os livros cadastrados</h1></center>
<br>
<div class="wrapper">
<fieldeset>
        <?php
        $id = $_POST["ccod_livro"];
        include_once 'Livro.php';
        $p = new Livro();
        $p->setCod_livro($id);
        $pro_bd=$p->alterar();
        ?>

    <br><form name="cliente2" method = "POST" action = "">
    <?php
    foreach($pro_bd as $pro_mostrar)
    {
    ?>
    <center><input type="hidden" name="ccod_livro" size="5" value='<?php echo $pro_mostrar[0]?>'>
    <p> <?php echo "código de livro: " . $pro_mostrar[0]; // como é mariz - posição 0 ?></b>
    <br><br><b><?php echo "Título: "; ?></b> <input name="tituloo" type="text" size="50" maxlength="30" placeholder="Nome do livro" value='<?php echo $pro_mostrar[1]?>'>
    <br><br> <b><?php echo "Categoria: ";?></b>  <input name="categoriaa" type="text" size="35" maxlength="30" placeholder="Categoria" value='<?php echo $pro_mostrar[2]?>'>
    <br><br> <b><?php echo "isbn: ";?></b>  <input name="iibsn" type="text" size="25" maxlength="30" placeholder="" value='<?php echo $pro_mostrar[3]?>'>
    <br><br> <b><?php echo "Idioma: ";?></b>  <input name="iidioma" type="text" size="25" maxlength="30" placeholder="Idioma" value='<?php echo $pro_mostrar[4]?>'>
    <br><br> <b><?php echo "Quantidade de páginas: ";?></b>  <input name="QtdePag" type="text" size="15" maxlength="30" placeholder="" value='<?php echo $pro_mostrar[5]?>'></center>
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
    include_once 'Livro.php';
    $pro = new Livro();
    $pro->setTitulo($tituloo);
    $pro->setCategoria($categoriaa);
    $pro->setIbsn($iibsn);
    $pro->setIdioma($iidioma);
    $pro->setQtdepag($QtdePag);
    $pro->setCod_livro($ccod_livro);
    echo "<br><br><br>" . $pro->alterar2() . "</h3>";
    echo "<script language='JavaScript'> window.location.href = 'consultar_alterarlivro.php'; </script>";
}
?>

</body>
</html>
