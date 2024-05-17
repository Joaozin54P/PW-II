<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/estilo2.css">
    <title>Bancos de dados - Alterar</title>
</head>
<body>
    <div class="container">
        <!-- nav -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container">
                <a class="navbar-brand" href="banco.html">
                    <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="currentColor" class="bi bi-cloud" viewBox="0 0 16 16">
                        <path d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383zm.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z"/>
                    </svg>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav mx-auto">
                        <a class="nav-link" href="banco.html">Home</a>
                        <a class="nav-link" href="principal.html">Principal</a>
                        <a class="nav-link" href="CadastrarAutor.php">Cadastrar</a>
                        <a class="nav-link" href="ExcluirAutor.php">Excluir</a>
                        <a class="nav-link" href="pesquisarAutor.php">Pesquisa</a>
                        <a class="nav-link" href="listarrr.php">Listar</a>
                        <a class="nav-link active" aria-current="page" href="consultar_alterarautor.php">Alterar</a>
                    </div>
                </div>
            </div>
        </nav>
        <center><font face = "Century Gothic" size = "6"><b>Alterar os produto cadastrados</b></font></center>
<br>
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
<center><input name="btnalterar" type="submit" value="Alterar"></center>
<?php
    }
    ?>

</form>
</fieldeset>

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
    header("location: consultar_alterarautor.php");
}
?>

<center> <br><br><br><br>
<button><a href="principal.html"> Voltar </a></button>
</body>
</html>